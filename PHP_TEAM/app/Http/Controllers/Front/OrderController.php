<?php

namespace App\Http\Controllers\Front;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Order as OrderModel;
use Illuminate\Support\Facades\Auth;

class OrderController extends \App\Http\Controllers\Controller
{
    public function orderConfirm()
    {
        if (session()->has('cart')) {
            $this->data['cart'] = Cart::content();
        } else {
            $this->data['cart'] = null;
        }
        // dd($this->data['cart']);
        return view('front.cart_order', $this->data);
    }

    public function order(){
        $cart = Cart::content();
        foreach ($cart as $item) {
            $order = new OrderModel();
            $order->item_id = $item->id;
            $order->user_id = Auth::user()->id;
            $order->order_count = $item->qty;
            $order->save();
        }
        Cart::destroy();
        return redirect('/cart');
    }
}