<?php

namespace App\Http\Controllers\Front;

class OrderController extends \App\Http\Controllers\Controller
{
    public function order()
    {
        return view('front.cart_order');
    }
}