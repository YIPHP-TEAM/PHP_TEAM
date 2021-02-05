<?php

namespace App\Http\Controllers\Front;
use App\Models\Product as ProductModel;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends \App\Http\Controllers\Controller
{
    public function index()
    {
        if (session()->has('cart')) {
            $this->data['cart'] = Cart::content();
        } else {
            $this->data['cart'] = null;
        }
        // dd($this->data['cart']);
        return view('front.cart', $this->data);
    }

    public function delete(Request $request)
    {
        // dd($request->all());
        $rowId = $request->rowId;
        Cart::remove($rowId);

        return redirect('/cart');
    //         $this->data['cart'] =Cart::destroy();
    //         $product = cart::forget('cart', $id)->first();
    //         $product->destroy($id);
    //         return redirect()->back();
    //   return redirect('front.cart');
    }

    public function edit(Request $request){
        // dd($request->all());
        $rowId = $request->rowId;
        Cart::update($rowId, $request->cnt);
        return redirect('/cart');
    }

    public function itemToCart(Request $request) 
    {
        // dd($request->all());
        $item = ProductModel::findOrFail($request->item_id);
        
        Cart::add([
            [
                'id' => $item->id,
                'name' => $item->name,
                'qty' => $request->quantity,
                'price' => $item->point,
                'weight' => '1',
                'options' => ['photo_path'=> $item->image,
                'stock' => $item->stock],
                ]
            ]);
        
        // $carts = Cart::content();
        return back()->with('message', 'カート内に商品を入れました。');
    }

}