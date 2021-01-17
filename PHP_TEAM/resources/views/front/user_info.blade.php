@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="mx-auto" style="max-width:1200px">
            <h1>ユーザー情報画面</h1>
            <!-- ユーザー情報 -->
            <div class="row">
                <div>{{ Auth::user()->id }}</div>
                <div>{{ Auth::user()->name }}</div>            
                <br>
                <div>初期選択言語</div>
                <div>保有ポイント数</div>
            </div>
        
            <!-- 達成項目(ループ) -->
            <div class="row">
                <div class="">
                    <div class="col-md-4">達成項目名</div>
                    <div class="col-md-12">詳細内容</div>
                </div>
                <div class="">
                    <div class="col-md-4">達成項目名</div>
                    <div class="col-md-12">詳細内容</div>
                </div>
            </div>
        </div>
    </div>
@endsection