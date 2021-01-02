<?php

namespace App\Http\Controllers\Front;

class ProductController extends \App\Http\Controllers\Controller
{
    public function detail()
    {
        return view('front.item_detail');
    }

}
