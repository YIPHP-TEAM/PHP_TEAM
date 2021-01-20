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
                <div>初期選択言語{{ Auth::user()->language }}</div>
                <div>保有ポイント数{{ Auth::user()->point }}</div>
            </div>

            <!-- 達成項目(ループ) -->
            @if ($points->isNotEmpty())
                @foreach ($points as $point)
                <div class="row">
                    <div class="">
                        <div class="col-md-4">達成項目名 {{$point->clear}}</div>
                        <div class="col-md-12">詳細内容{{$point->content}}</div>
                    </div>                
                @endforeach
            @endif
            </div>
        </div>
    </div>
@endsection