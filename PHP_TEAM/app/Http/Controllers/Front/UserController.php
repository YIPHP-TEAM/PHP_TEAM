<?php

namespace App\Http\Controllers\Front;

class UserController extends \App\Http\Controllers\Controller
{
    public function point()
    {
        return view('front.user_point');
    }

    public function info(){
        return view('front.user_info');
    }

}