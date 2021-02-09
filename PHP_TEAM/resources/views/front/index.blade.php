@extends('layouts.app')

@section('content')
    <div class="container px-5">
        <div class="mx-auto" >
            <!--↓↓ 検索フォーム ↓↓-->
            <form class="row form-group mt-3 mb-5 py-2" action="/search" method="get">
                <div class="col-md-12 d-flex">
                    <input type="text" name="keyword" value="{{isset($keyword) ? $keyword : null}}" class="form-control mr-4" placeholder="ワードを入力してください">
                    <input type="submit" value="検索" class="btn btn-info">
                </div>
            </form>
            <!-- 商品一覧 -->
            <div class="row">
                @if ($items->isNotEmpty())
                    @foreach ($items as $item)
                    <div class="col-md-3 mb-3">
                        <div class="py-4 text-center card">
                            <div class="mb-3">
                                <a href="{{'/item_detail/'.$item->id}}"><img class="img-rounded col-md-10" src="{{asset('img/items/'.$item->image)}}" alt=""></a>
                            </div>
                            <div class="">
                                <div class="lead">{{$item->name}}</div>
                                <div class="">必要ポイント：{{$item->point}} pt</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @else
                    @if (isset($keyword))
                        該当する商品がございません。
                    @endif
                @endif
            </div>
        </div>
    </div>
@endsection