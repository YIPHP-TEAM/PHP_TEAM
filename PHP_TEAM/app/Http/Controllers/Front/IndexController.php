<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Requests\Front\ContactRequest;
use App\Models\Product as ProductModel;
use App\Models\Question as QuestionModel;
use App\Http\Requests\Front\SearchRequest;

class IndexController extends \App\Http\Controllers\Controller
{
    /**
     * index 画面
     * 
     */
    public function index()
    {
        
        // todo: 商品詳細テーブル(items)のデータを取得。
         $this->data['items'] = ProductModel::all();
        // dd($this->data['items']);
         return view('front.index', $this->data);
        // return view('front.index');
    }


    public function search(SearchRequest $request)
{
    $keyword = $request->keyword;
    $point = $request->point; //追加
    // if($keyword !=''){
    $items = ProductModel::Where('name','like',"%$keyword%")
    ->Where('point', 'LIKE', "%$point%")//追加 orwhereでor検索の実装も可能
    ->get();
    // }else{
        // $items = ProductModel::all();
    // }
    $this->data['keyword'] = $keyword;
    $this->data['point'] = $point;
    $this->data['items'] = $items;
    return view('front.index', $this->data);

}

    /**
     * contact 画面
     * 
     * 
     */
    public function contact()
    {
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
        return back()->with('questionMessage', 'お問い合わせ内容送信完了しました。');
    }

    //完了した際のTOP画面にリダイレクトするための処理。
    public function complete()
    {
        return redirect('/index');
    }

}