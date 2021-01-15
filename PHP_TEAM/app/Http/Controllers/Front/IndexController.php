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
        
        // todo: 商品詳細テーブル(items)のデータを取得し、8件ユーザTOP画面に表示させるための処理。
        // $this->data['items'] = ProductModel::all()->limit(8);
        // dd($this->data['items']);
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
        //問い合わせテーブル(question)のインスタンス化。
        $question = new QuestionModel();
        $question->user_id = $request->user_id;
        $question->content = $request->comment;
        $question->created_at = now();
        $question->save();
        //dd($question);
        //問い合わせ画面完了ページに遷移するかもしれない処理。
        // complete redirect
        //return $this->complete();
        // return redirect('/question/complete');
        return redirect('/index');
    }

    //完了した際のTOP画面にリダイレクトするための処理。
    public function complete()
    {
        return redirect('/index');
    }

}