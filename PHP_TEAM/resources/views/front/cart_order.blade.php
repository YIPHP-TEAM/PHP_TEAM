@extends('layouts.app')

@section('content')
    <div class="container p-5">
        <div class="mx-auto">
            <h1 class="text-center border-bottom border-secondary pb-3 mb-5">購入画面</h1>
            <!-- 購入商品一覧 -->
            <div class="row">
                <!-- テーブルで購入品一覧を表示 -->
                    <div class="mx-auto col-md-10">
                            <table class="table table-bordered text-center" style="table-layout:fixed;width:100%;">
                                <thead class="table-active">
                                    <tr>
                                    <th style="width:20%;"><div class="my-2">商品画像</div></th>
                                    <th style="width:50%;"><div class="my-2">商品名</div></th>
                                    <th style="width:15%;"><div class="my-2">注文数</div></th>
                                    <th style="width:15%;"><div class="my-2">必要ポイント</div></th>
                                    </tr>
                                </thead>
                                @if (!empty($cart))
                                @foreach ($cart as $item)
                                <tbody class="table-light">
                                    <tr>
                                    <td class="align-middle" style="word-wrap:break-word;"><a href=""><img class="img_size_3" src="{{asset('storage/img/items/'.$item->options->photo_path)}}" alt=""></a></th>
                                    <td class="align-middle" style="word-wrap:break-word;">{{$item->name}}</td>
                                    <td class="align-middle" style="word-wrap:break-word;">{{$item->qty}}</td>
                                    <td class="align-middle" style="word-wrap:break-word;">{{$item->price}}</td>
                                    </tr>
                                </tbody>
                                @endforeach
                                @endif
                            </table>
                    </div>
                <!-- 購入確認 -->
                    <div class="col-md-10 mx-auto text-center pt-5">
                        <div class="">
                            <div class="border-bottom border-secondary pb-2">
                                <div class=""><h2>注文数合計:{{Cart::count()}}</h2></div>
                                <div class=""><h2>注文合計額:{{Cart::total()}}ポイント</h2></div>
                            </div>
                        </div>
                        <div class="col mt-3">
                            <form action="/order" method="post">
                                @csrf
                                <input type="submit" class="btn btn-secondary border-dark  p-2 px-3" value="購入する">
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection