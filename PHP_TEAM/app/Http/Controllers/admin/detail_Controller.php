<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Point;
use Illuminate\Support\Facades\Auth;

class detail_Controller extends Controller
{
    public function detail($user_id)
    {
        $this->data['user']=User::find($user_id);
        $this->data['points']=Point::where('user_id','=',$user_id)->get();
        return view('admin.user_detail',$this->data);
        }
    public function update(Request $request, $user_id)
    {
      //User::where('id','=',$user_id)->update(['point',$request->quantity]);
        //$this->data['user']=User::find($user_id);
        $user = User::find($user_id);
        $user->point = $request->quantity;
        $user->save();
      //$request->save($this->data);
      //return var_dump(User::where('id','=',$user_id));
      //return var_dump($user_id);
        //$user->id = Auth::user()->id;
        //$user->point = $request->quantity;
        //$user->save();
        //return redirect('/admin.user_detail',$this->data);
        //}
      return redirect()->route('user_detail.detail',$user_id);
      }




}



