@extends('layouts.admin_app')

@section('content')
    <div class="container px-5">
        <div class="mx-auto" >
            <!--↓↓ 検索フォーム ↓↓-->
            <form class="form-group row mt-3 mb-5 py-2 pl-0" action="{{action('Admin\UserController@index')}}" method="get">
                <div class="col-md-10">
                    <input type="text" name="cond_title" value="{{$cond_title}}" class="form-control" placeholder="ワードを入力してください">
                </div>
                <div class="col-md-2">
                    <input type="submit" value="検索" class="btn btn-info">
                </div>
            </form>
                
            <!-- ユーザー一覧 -->
            <div class="row">
                @foreach ($users as $user)
                <div class="">
                    <div class="">
                    <!-- ユーザー画像 -->
                        <a href="{{'/user_detail/'.$user->id}}"></a>
                    </div>
                    <div class="">
                        <div class="">{{$user->image}}</div>
                        <div class="">{{$user->name}}</div>
                        <div class="">{{$user->language}}</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
