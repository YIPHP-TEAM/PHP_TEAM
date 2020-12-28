<?php

namespace App\Http\Controllers\Front;

class IndexController extends \App\Http\Controllers\Controller
{
    public function index()
    {
        return view('front.index');
    }

    public function contact(){
        return view('front.question');
    }

}