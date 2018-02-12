<?php

namespace App\Http\Controllers\Auths;

use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function showForm()
    {
        return view('auths.login');
    }
}
