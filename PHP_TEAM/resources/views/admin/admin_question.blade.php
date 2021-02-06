@extends('layouts.admin_app')

@section('content')
    <div class="container p-5">
        <div class="mx-auto">
            <h1 class="text-center border-bottom border-secondary pb-3 mb-5">お問い合わせ一覧画面</h1>

            <!-- お問い合わせ(ループ) -->
                @foreach ($questions as $question)
                <div class="row">
                    <!-- ユーザー名と問合せ内容 -->
                    <div class="col-md-8">
                        <div class="">id{{$question->user_id}}</div>
                        <div class="">問い合わせ内容{{$question->content}}</div>
                    </div>

                    <div class="col-md-2">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    </div>
                    <form action="/admin_question/delete/{{$question->id}}" method="post">
                    {{ csrf_field() }}
                    <div class="col-md-2">
                        <button type="submit" class="btn">削除</button>
                    </div>
                    </form>
                </div>                
                @endforeach

        </div>
    </div>
@endsection