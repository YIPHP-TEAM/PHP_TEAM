<?php

namespace App\Http\Controllers\Front;

use App\Http\Requests\Front\ContactRequest;
use App\Models\Product as ProductModel;
use App\Models\Question as QuestionModel;

class IndexController extends \App\Http\Controllers\Controller
{
    /**
     * index 画面
     * 
     */
    public function index()
    {
        // todo: products info get
        // $this->data['products'] = ProductModel::all()->limit(8);
        // dd($this->data['products']);

        // return view('front.index', $this->data);
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
        //dd($request->all());


        // database save
        $question = new QuestionModel();
        
        $question->user_id = $request->user_id;
        $question->content = $request->comment;
        $question->created_at = now();
        $question->save();
        //dd($question);

        // complete redirect
        //return $this->complete();
        // return redirect('/question/complete');
        return redirect('/index');
    }

    public function complete()
    {
        return redirect('/index');
    }

}