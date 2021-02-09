@extends('layouts.admin_app')

@section('content')
    <div class="container p-5">
        <div class="mx-auto">
            <h1 class="text-center border-bottom border-secondary pb-3 mb-5">ユーザー詳細画面</h1>
            <!-- ユーザー情報 -->
            <div class="row">
                <! <div>{{ Auth::user()->image }}</div>
                <br>
                <div>{{ Auth::user()->name }}</div>            
                <div>初期選択言語{{ Auth::user()->language }}</div>
                <br>
                
                <div>保有ポイント数編集
                <form class="form-inline py-3" action="#" method="post">
                        @csrf
                        @if (count($errors) > 0)
                            <ul>
                                @foreach($errors->all() as $e)
                                    <li>{{ $e }}</li>
                                @endforeach
                            </ul>
                        @endif
                            <div class="">
                                <div class="">
                                    <select class="form-control" name="quantity" min="1" max="100" value="submit">
                                    @for ($i = 1; $i <= 100; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="">
                                <input type="hidden" name="" value="submit">
                                <a href="user_detail">
                                <input type="submit" class="create-btn" value="ポイントを変更する" style="width:300px">
                            </a>
                            </div>
                        
                </form>
                </div>
            </div>

            <!-- 達成項目(ループ) -->
                @foreach ($points as $point)
                <div class="row">
                    <div class="col-md-8">
                        <div class="">達成項目名 {{$point->clear}}</div>
                        <br>
                        <div class="">詳細内容{{$point->content}}</div>
                    </div>
                    <div class="col-md-2">

                        <button type="button" class="btn">対応中</button>

                    </div>
                    <div class="col-md-2">
                        <a href="admin_point">
                        <button type="button" class="btn">ポイント付与へ</button>
                    </a>
                    </div>
                </div>                
                @endforeach
        </div>
    </div>
@endsection