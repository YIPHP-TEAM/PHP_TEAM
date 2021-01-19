<?php

namespace App\Http\Controllers\Front;

class OrderController extends \App\Http\Controllers\Controller
{
    public function order()
    {
        return views('front.cart_order');
    }
}