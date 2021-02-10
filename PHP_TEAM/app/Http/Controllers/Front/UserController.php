<?php

namespace App\Http\Controllers\Front;
use App\Http\Requests\Front\PointRequest;
use App\Models\Point as PointModel;
use Illuminate\Support\Facades\Auth;


class UserController extends \App\Http\Controllers\Controller
{
    public function point()
    {
        return view('front.user_point');
    }
    
    public function info()
    {
        $points = PointModel::where('user_id', Auth::user()->id)->get();
        $this->data['points'] = $points;
       //dd($points);
        return view('front.user_info',$this->data);
    }

    public function pointSave(PointRequest $request)
    {
        // form solve
        //dd($request->all());
        // database save
        $point = new PointModel();
        $point->user_id = Auth::user()->id;
        $point->content = $request->content;
        $point->clear = $request->clear;
        $point->created_at = now();
        $point->save();
        // dd($point);
        return redirect('/index');
    }
}