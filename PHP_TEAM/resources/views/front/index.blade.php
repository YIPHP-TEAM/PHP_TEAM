@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="mx-auto" style="max-width:1200px">
            <!--↓↓ 検索フォーム ↓↓-->
            <form class="form-group row" style="padding:20px 0; padding-left:0px;">
                <div class="col-md-10">
                    <input type="text" name="keyword" class="form-control" placeholder="ワードを入力してください">
                </div>
                <div class="col-md-2">
                    <input type="submit" value="検索" class="btn btn-info">
                </div>
            </form>
                
            <!-- 商品一覧 -->
            <div class="row">
                @foreach ($items as $item)
                <div class="col-md-3">
                    <div class="">
                <a href="{{'/item_detail/'.$item->id}}"><img src="{{asset('img/items/'.$item->image)}}" alt=""></a>
                    </div>
                    <div class="">
                        <div class="">{{$item->name}}</div>
                        <div class="">必要ポイント：{{$item->point}} pt</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection