<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Item;

class ItemController extends Controller
{
    public function add()
    {
        return view('admin.item_create');
    }

    public function create(Request $request)
    {
        $item = new Item;
        $form = $request->all();
        if (isset($form['image'])) {
            $path = $request->file('image')->store('public/img');
            $item->image = basename($path);
        } else {
            $item->image = null;
        }

        unset($form['_token']);
        unset($form['image']);

        $item->fill($form);
        $item->save();


        return redirect('/admin_index'); 
    }
}
