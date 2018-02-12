<?php

namespace App\Http\Controllers\Fronts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $this->assign['body'] = 'frontend.home.index';

        return view('frontend.wrapper', $this->assign);

    }
}
