<?php

namespace App\Http\Controllers\Front;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Order as OrderModel;
use Illuminate\Support\Facades\Auth;
use App\Models\User as UserModel;
use App\Models\Product as ProductModel;

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

        $user = UserModel::find(Auth::user()->id);
        $user->point = $user->point - Cart::total();
        $user->save();

        //在庫処理
        foreach ($cart as $item) {
            $product = ProductModel::find($item->id);
            $product->stock = $product->stock - $item->qty;
            $product->save();
        }


        Cart::destroy();
        return redirect('/order_commit');
    }

    public function orderCommit(){
        return view('front.order_commit');
    } 
}