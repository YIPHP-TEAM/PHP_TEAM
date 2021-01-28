<?php

namespace App\Http\Controllers\Front;

class CartController extends \App\Http\Controllers\Controller
{
    public function index(){
        return view('front.cart');
    }

    public function edit(){
        return view('front.cart_edit');
    }

}