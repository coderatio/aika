<?php

namespace App\Http\Controllers\Auths;

use App\Http\Controllers\Controller;
use App\Models\Auths\UserVerifications;
use App\User;
use Illuminate\Http\Request;

class VerifyAccountController extends Controller
{
    protected $user, $token, $request, $userId;

    public function __construct()
    {
        $this->request = new Request();
    }

    public function verifyCode($token)
    {
        $explodedToken = explode('_', $token);
        $this->token = $explodedToken[1];
        $this->userId = $explodedToken[0];

        if ($this->validateToken() == false) {
            return $this->redirectInvalidToken();
        }

        $this->assign['userId'] = $this->userId;
        $this->assign['token'] = $this->token;
        $this->assign['only_body'] = true;
        $this->assign['title'] = 'Verify Account Code';
        $this->assign['body'] = 'auths.verify-code-form';

        return view('frontend.wrapper', $this->assign);
    }

    public function validateAccountCode(Request $request)
    {
        $this->request = $request;
        $this->userId = $request->user_id;
        $this->token = $request->token;
        if (!$this->validateToken()) {
            return $this->redirectInvalidToken();
        }

        $user = UserVerifications::getByUserId($this->userId);
        $this->user = $user;

        if ($request->code == $this->user->code) {
            if (time() > $user->expired_at) {
                $this->alert('e', "This code has expired. Please request a new one.");

            }
            UserVerifications::createOrUpdate(['user_id' => $this->userId, 'phone' => 1]);
            $this->alert('success', "Your account is now verified! Please login.");

            return redirect('login');
        }

        $formData['user_id'] = $this->userId;
        $formData['token'] = $this->token;

        $this->alert('e', "Invalid verification code! {$this->getNewCodeForm($formData)}");
        return back()->withInput();

    }

    public function validateToken()
    {
        return UserVerifications::where('user_id', $this->userId)
            ->where('token', $this->token)
            ->first() == true ? true : false;
    }

    public function redirectInvalidToken()
    {
        if ($this->validateToken() == false) {
            $this->alert('error', "Invalid credentials detected");

            return redirect('login');
        }

        return true;
    }

    public function getAccountCode(Request $request)
    {
        $this->request = $request;
        $user = User::whereId($request->user_id)->first();
        $userVerifications = UserVerifications::getByUserId($user->id);

        if ($userVerifications) {
            session()->put('can_request_new_code', true);
            $this->alert('success', "We have sent you a new code. Enter it below.");
        }


    }

    public function getNewCodeForm($data = null, $raw_inputs=null)
    {
        return "
            <form action='".url('get-account-code')."' method='post' class='ml-2'>
                ".csrf_field()."
                {$raw_inputs}
                <input type='hidden' name='user_id' value='{$data['user_id']}' >
                <input type='hidden' name='token' value='{$data['token']}'>
                <button type='submit' class='c-badge c-badge--danger ak-no-border u-color-danger u-bg-secondary'>Get
                 New 
                Code</button>
            </form>
        ";
    }
}
