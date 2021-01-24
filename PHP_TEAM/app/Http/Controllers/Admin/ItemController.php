<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Item;

class ItemController extends Controller
{
    public function add()
    {
        return view('');
    }

    public function create()
    {
        $item = new ItemModel();
        $item->id = $request->id;
        $item->name = $request->name;
        $item->point = $request->point;
        $item->stock = $request->stock;
        //画像保存追記
        $item->created_at = now();
        $item->save();

        return redirect('');
    }
}
