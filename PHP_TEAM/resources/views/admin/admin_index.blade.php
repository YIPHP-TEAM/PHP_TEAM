@extends('layouts.admin_app')

@section('content')
    <div class="container px-5">
        <div class="mx-auto" >
            <!--↓↓ 検索フォーム ↓↓-->
            <form class="row form-group mt-3 mb-5 py-2" action="{{action('Admin\UserController@index')}}" method="get">
                <div class="col-md-8 d-flex mx-auto">
                    <input type="text" name="cond_title" value="{{$cond_title}}" class="form-control mr-4" placeholder="ワードを入力してください">
                    <input type="submit" value="検索" class="btn btn-info">
                </div>
            </form>
                
            <!-- ユーザー一覧 -->
            <div class="row">
                <div class="mx-auto col-md-8">
                    <table class="table table-bordered text-center">
                    <thead class="table-active">
                        <tr>
                        <th><div class="my-2">ユーザー画像</div></th>
                        <th><div class="my-2">ユーザーネーム</div></th>
                        <th><div class="my-2">選択言語</div></th>
                        </tr>
                    </thead>
                    @foreach ($users as $user)
                    <tbody class="table-light">
                        <tr>
                        <td><a href="{{'/user_detail/'.$user->id}}"><img src="{{asset('storage/img/'.$user->image)}}"></a></th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->language}}</td>
                        </tr>
                    </tbody>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
