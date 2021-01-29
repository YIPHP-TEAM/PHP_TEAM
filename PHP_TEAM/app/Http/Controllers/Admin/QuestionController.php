<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Question;

class QuestionController extends Controller
{
    //一覧表示
    public function index() 
    {
        $questions = Question::all();
        return view('admin.admin_global_menu');
    }

    //削除機能
    public function delete(Request $request)
    {
        $question = Question::find($request->id);
        $question->delete();
        return redirect('/admin_index');
    }


}
