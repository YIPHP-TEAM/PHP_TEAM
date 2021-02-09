<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Point;




class detail_Controller extends Controller
{
    public function details()
        {
        $users = User::all();
        return view('admin.user_detail',['users' => $users]);
    }

    public function points() 
    {
        $points = Point::all();
        return view('admin.user_detail',['points' => $points]);
    }


    public function update(Request $request)
    {

      $user = User::all();
      $user->point = $request->point;
      $user->save();
      return redirect('/user_detail');


    
}
}

