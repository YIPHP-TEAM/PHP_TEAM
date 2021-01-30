<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $cond_title = $request->cond_title;
      if ($cond_title != '') {
          // 検索されたら検索結果を取得する
          $users = User::where('name', 'like', "%$cond_title%")->get();
      } else {
          // それ以外はすべてのユーザーを取得する
          $users = User::all();
      }
      return view('admin.admin_index', ['users' => $users, 'cond_title' => $cond_title]);
    }

    public function create(Request $request)
    {
        // $user = new UserModel();
        // $user->id = $request->id;
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->language = $request->language;
        // $user->role = $request->role;
        // //画像保存の追記
        // $question->created_at = now();
        // $question->save();

        // return redirect('/admin_index'); 
    }


}
