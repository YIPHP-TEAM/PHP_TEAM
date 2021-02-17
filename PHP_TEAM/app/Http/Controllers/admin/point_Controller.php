<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Point;
use Illuminate\Support\Facades\Auth;


class point_Controller extends Controller
{
    //public function point()
    //{
        //データ表示//

        //$users = User::select('name')->get();
        //$points = Point::select('content','clear')->get();

        //return view('admin.admin_point');
    //}

    //public function destoryData(Request $request)
    //{
        //$this->data['points']=Point::where('user_id','=',$user_id)->get();
        //$points->destory();
        //return redirect()->route('user_detail.detail',$user_id);
      //}
    //}
    public function point($user_id)
    {
        $this->data['user']=User::find($user_id);
        $this->data['points']=Point::where('user_id','=',$user_id)->get();
        return view('admin.admin_point',$this->data);
    }

    //public function addto()
    //{
        //$user = User::find($user_id);
        //$user->point = $request->quantity;
        //$user->save();
        //return redirect()->route('user_detail.detail',$user_id);
      //}

    //public function deletes(Request $request)
    //{
        //$point = Point::find($request->id);
        //$point->delete();
        //return redirect('/admin_point/{user_id}');
    //}

}