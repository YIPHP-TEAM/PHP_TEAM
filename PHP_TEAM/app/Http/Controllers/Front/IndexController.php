<?php

namespace App\Http\Controllers\Front;

use App\Http\Requests\Front\ContactRequest;

class IndexController extends \App\Http\Controllers\Controller
{
    /**
     * index 画面
     * 
     */
    public function index()
    {
        return view('front.index');
    }

    /**
     * contact 画面
     * 
     * 
     */
    public function contact(){
        return view('front.question');
    }

    /**
     * contact 処理
     * @param \App\Http\Requests\Front\ContactRequest $request
     * 
     * @return function compete
     */
    public function save(ContactRequest $request){
        // form solve

        // database sa
        

        // complete redirect
        return $this->complete();
        // return redirect('/question/complete');
    }

    public function complete()
    {
        return view();
    }

}