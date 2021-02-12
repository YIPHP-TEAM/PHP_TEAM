@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="mx-auto" style="max-width:1200px">
            <h1>購入画面</h1>
            <!-- 購入商品一覧 -->
            <div class="row">
                @if (!empty($cart))
                @foreach ($cart as $item)
                    <div class="col-md-4">
                            <div class=""><img src="{{asset('storage/img/items/'.$item->options->photo_path)}}" alt=""></div>
                            <br>
                            <div class="">商品名{{$item->name}}</div>
                            <br>
                            <div class="">
                                <div class="">注文数{{$item->qty}}</div>
                                <div class="">必要ポイント{{$item->price}}</div>
                            </div>
                    </div>
                @endforeach
            @endif

            <!-- 購入確認 -->
                <div class="row">
                    <div class="">
                        <div class="">注文内容</div>
                        <br>
                        <div class="">
                            <div class="">注文数合計{{Cart::count()}}</div>
                            <br>
                            <div class="">注文合計額{{Cart::total()}}</div>
                        </div>
                    </div>
                    <div class="">
                      <form action="/order" method="post">
                        @csrf
                        <input type="submit" class="create-btn" value="購入する">
                      </form>
                    </div>
                </div>
        </div>
    </div>
@endsection