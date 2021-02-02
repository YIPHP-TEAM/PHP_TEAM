@extends('layouts.app')

@section('content')
    <div class="container p-5">
        <div class="mx-auto">
            <h1 class="text-center border-bottom border-secondary pb-3 mb-5">ユーザー情報画面</h1>
            <!-- ユーザー情報 -->
            <div class="row px-3">
                <div class="d-md-flex">
                    <h6 class="mr-4">ID：{{ Auth::user()->id }}</h6>
                    <h6>{{ Auth::user()->name }} さん</h6>
                </div>
            </div>

            <div class="card w-100 border-0 mt-3" style="text-align:center">
                <h6 class="mt-3">選択言語</h6>
                <h4>{{ Auth::user()->language }}</h4>
            </div>
            <br>
            <div class="card w-100 border-0"style="text-align:center">
                <h6 class="mt-3">保有ポイント数</h6>
                <h4>{{ Auth::user()->point }} pt</h4>
                <!--　保有ポイントが未設定だと表示がされません、if文お願いします-->
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