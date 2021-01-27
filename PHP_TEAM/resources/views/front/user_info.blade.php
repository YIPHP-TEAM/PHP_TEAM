@extends('layouts.app')

@section('content')
    <div class="container p-5">
        <div class="mx-auto">
            <h1 class="text-center border-bottom border-secondary pb-3 mb-5">ユーザー情報画面</h1>
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
                    <div class="col-md-12">
                        <div class="">達成項目名 {{$point->clear}}</div>
                        <br>
                        <div class="">詳細内容{{$point->content}}</div>
                    </div>       
                </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection