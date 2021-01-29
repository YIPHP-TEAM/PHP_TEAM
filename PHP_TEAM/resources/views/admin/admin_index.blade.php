@extends('layouts.admin_app')

@section('content')
    <div class="container px-5">
        <div class="mx-auto" >
            <!--↓↓ 検索フォーム ↓↓-->
            <form class="form-group row mt-3 mb-5 py-2 pl-0">
                <div class="col-md-10">
                    <input type="text" name="keyword" class="form-control" placeholder="ワードを入力してください">
                </div>
                <div class="col-md-2">
                    <input type="submit" value="検索" class="btn btn-info">
                </div>
            </form>
                
            <!-- 商品一覧 -->
            <div class="row">
                <!-- @foreach ($ as $) -->
                <div class="">
                    <div class="">
                    <!-- ユーザー画像 -->
                        <!-- <a href="{{'/item_detail/'.$item->id}}"><img src="{{asset('img/items/'.$item->image)}}" alt=""></a> -->
                    </div>
                    <div class="">
                        <div class="">{{ユーザー名}}</div>
                        <div class="">必要ポイント：{{選択言語}} pt</div>
                    </div>
                </div>
                <!-- @endforeach -->
            </div>
        </div>
    </div>
@endsection
