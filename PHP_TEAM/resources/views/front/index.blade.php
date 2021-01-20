@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="mx-auto" style="max-width:1200px">
            <!--↓↓ 検索フォーム ↓↓-->
            <div class="col-md-4" style="padding:20px 0; padding-left:0px;">
                <form class="form-inline" action="{{url('/crud')}}">
                    <div class="form-group">
                        <input type="text" name="keyword" class="form-control" placeholder="ワードを入力してください">
                    </div>
                    <input type="submit" value="検索" class="btn btn-info">
                </form>
            </div>
                
            <!-- 商品一覧 -->
            <div class="row">
                <div class="col-md-3">
                    <div class="">画像</div>
                    <div class="">
                        <div class="">商品名</div>
                        <div class="">必要ポイント数</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="">画像</div>
                    <div class="">
                        <div class="">商品名</div>
                        <div class="">必要ポイント数</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="">画像</div>
                    <div class="">
                        <div class="">商品名</div>
                        <div class="">必要ポイント数</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="">画像</div>
                    <div class="">
                        <div class="">商品名</div>
                        <div class="">必要ポイント数</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection