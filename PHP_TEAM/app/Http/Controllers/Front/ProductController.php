<?php

namespace App\Http\Controllers\Front;
use App\Models\Product as ProductModel;

class ProductController extends \App\Http\Controllers\Controller
{
    public function detail($item_id)
    {
        //dd($item_id);
        $this->data['item'] = ProductModel::find($item_id);
        // dd($this->data['details']);
        return view('front.item_detail',$this->data);
        // return view('front.item_detail');
    }

}
