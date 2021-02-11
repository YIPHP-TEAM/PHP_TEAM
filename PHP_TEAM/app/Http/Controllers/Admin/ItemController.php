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
        $validate_rule = [
            'name' => 'required|max:50',
            'point' => 'integer|required|max:100',
            'stock' => 'integer|required',
            'content' => 'required|max:255',
        ];
        $this->validate($request, $validate_rule);

        $item = new Item;
        $form = $request->all();
        if (isset($form['image'])) {
            $path = $request->file('image')->store('img/items','public');
            $item->image = basename($path);
        } else {
            $item->image = null;
        }

        unset($form['_token']);
        unset($form['image']);

        $item->fill($form);
        $item->save();


        return redirect('/index'); 
    }
}
