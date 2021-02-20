<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Point;
use Illuminate\Support\Facades\Auth;


class point_Controller extends Controller
{
    public function point($point_id)
    {
        $user =  Point::where('id','=',$point_id)->get();
        $user_id = $user[0]->user_id;
        $this->data['user']=User::find($user_id);
        $this->data['point']=Point::find($point_id);

        return view('admin.admin_point',$this->data);
        //return var_dump($test);
    }
    public function delete($point_id)
    {
        $user =  Point::where('id','=',$point_id)->get();
        $user_id = $user[0]->user_id;
        $this->data['user']=User::find($user_id);
        $this->data['points']=Point::where('user_id','=',$user_id)->get();
        Point::find($point_id)->delete();
        return redirect()->route('user_detail.detail',$user_id);

    }
    public function update(Request $request, $point_id)
    {
        $user =  Point::where('id','=',$point_id)->get();
        $user_id = $user[0]->user_id;
        $user=User::find($user_id);
        $user->point += $request->input('clear');
        $user->save();

        Point::find($point_id)->delete();
      return redirect()->route('user_detail.detail',$user_id);
      }

}