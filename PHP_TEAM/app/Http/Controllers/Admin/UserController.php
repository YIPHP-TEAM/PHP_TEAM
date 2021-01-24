<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin_index');
    }

    public function create(Request $request)
    {
        $user = new UserModel();
        $user->id = $request->id;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->language = $request->language;
        $user->role = $request->role;
        //画像保存の追記
        $question->created_at = now();
        $question->save();

        return redirect('/admin_index'); 
    }


}
