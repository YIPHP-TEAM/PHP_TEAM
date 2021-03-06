<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
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
        $validate_rule = [
            'image' => 'required',
            'name' => 'required|max:50',
            'email' => 'required',
            'password' => 'required|max:8',
            'role' => 'required',
            'language' => 'required',
        ];
        $this->validate($request, $validate_rule);

        $user = new User;
        $form = $request->all();
        if (isset($form['image'])) {
            $path = $request->file('image')->store('img','public');
            $user->image = basename($path);
        } else {
            $user->image = null;
        }

        unset($form['_token']);
        unset($form['image']);
        $user->point = 0;

        $user->fill($form);

        $user->fill([
            'password' => Hash::make($request->password)
        ]);

        
        $user->save();


        return redirect('/admin_index'); 
    }

    public function add() {
        return view('admin.user_create');
    }


}
