@extends('layouts.app')

@section('content')
    <div class="container-fluid">
    <div class="">
        <div class="mx-auto" style="max-width:1200px">
            <div class="">
                <!--↓↓ 検索フォーム ↓↓-->
                <div class="col-sm-4" style="padding:20px 0; padding-left:0px;">
                <form class="form-inline" action="{{url('/crud')}}">
                <div class="form-group">
                <input type="text" name="keyword" value="{{$keyword}}" class="form-control" placeholder="ワードを入力してください">
                </div>
                <input type="submit" value="検索" class="btn btn-info">
                </form>
                </div>
                <!--↑↑ 検索フォーム ↑↑-->
                
                <div class="col-sm-8" style="text-align:right;">
                <div class="paginate">
                
                </div>
                </div>
                
                <!-- 商品一覧 -->
                <div class="d-flex flex-row flex-wrap">
                <!-- divで一覧作る -->
                        <a src="#" alt="" href="#"></a>
                        <br>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection