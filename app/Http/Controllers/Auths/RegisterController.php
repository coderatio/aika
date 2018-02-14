<?php

namespace App\Http\Controllers\Auths;

use App\Http\Controllers\Controller;
use App\Models\Auths\UserVerifications;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mockery\Exception;

class RegisterController extends Controller
{
    public function showForm()
    {
        $this->assign['title'] = 'Register';

        return view('auths.register', $this->assign);
    }

    public function doRegistration(Request $request)
    {
        DB::beginTransaction();

        try {
            $user = User::create([
                'fname' => $request->fname,
                'lname' => $request->lname,
                'password' => bcrypt($request->password),
                'fullname' => "{$request->fname} {$request->lname}",
                'phone' => $request->phone,
                'social_credentials' => $this->fillSocialCredentialsWithEmptyData()
            ]);

            $token = bcrypt('aika_user_token');
            UserVerifications::createOrUpdate([
                'user_id' => $user->id,
                'phone' => 0,
                'email' => 0,
                'code' => random_numbers(6),
                'token' => $token,
                'expired_at' => time() + 604800 //Keep verification code valid for a week
            ]);

            $this->alert('success', "Your registration was successful. Please, enter verification code sent to you to continue.");
            DB::commit();

            return redirect("verify-account-code/{$user->id}_{$token}");
        }
        catch (Exception $exception) {
            $this->alert('error', "Failed to create your account. Reasons: {$exception->getMessage()}");
            DB::rollback();

            return back()->withInput();
        }

    }

    public function fillSocialCredentialsWithEmptyData()
    {
        return json_encode(
            [
                [
                    'name' => 'facebook',
                    'id' => '',
                    'token' => '',
                    'photo' => '',
                    'email' => '',
                    'username' => '',
                ],
                [
                    'name' => 'twitter',
                    'id' => '',
                    'token' => '',
                    'photo' => '',
                    'email' => '',
                    'username' => '',
                ],
                [
                    'name' => 'google',
                    'id' => '',
                    'token' => '',
                    'photo' => '',
                    'email' => '',
                    'username' => '',
                ]
            ]
        );
    }

}
