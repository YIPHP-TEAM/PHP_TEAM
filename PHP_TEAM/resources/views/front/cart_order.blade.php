@extends('layouts.app')

@section('content')
    <div class="container p-5">
        <div class="mx-auto">
            <h1 class="text-center border-bottom border-secondary pb-3 mb-5">購入画面</h1>
            <!-- 購入商品一覧 -->
            <div class="row">
                <!-- テーブルで購入品一覧を表示 -->
                    <div class="col-md-10">
                        @if (!empty($cart))
                        @foreach ($cart as $item)
                            <div class="">
                                    <div class=""><img src="{{asset('img/items/'.$item->options->photo_path)}}" alt=""></div>
                                    <div class="">商品名:{{$item->name}}</div>
                                    <div class="">注文数:{{$item->qty}}</div>
                                    <div class="">必要ポイント:{{$item->price}}</div>
                            </div>
                        @endforeach
                        @endif
                    </div>

                <!-- 購入確認 -->
                    <div class="col-md-10 text-right pt-5">
                        <div class="">
                            <div class="pb-1">
                                <div class=""><h2>注文数合計:{{Cart::count()}}</h2></div>
                                <div class=""><h2>注文合計額:{{Cart::total()}}ポイント</h2></div>
                            </div>
                        </div>
                        <div class="col ">
                            <form action="/order" method="post">
                                @csrf
                                <input type="submit" class="btn btn-secondary border-dark  px-4" value="購入する">
                            </form>
                        </div>
                    </div>
        </div>
    </div>
@endsection