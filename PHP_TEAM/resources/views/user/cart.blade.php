@extends('layouts.app')

@section('content')
    <div class="container-fluid">
    <div class="">
        <div class="mx-auto" style="max-width:1200px">
            <div class="">
                <h1>カート内一覧画面</h1>
                <!-- 商品一覧 -->
                <div class="d-flex flex-row flex-wrap">
                        @foreach($carts as $cart)
                        <a src="/image/{{$cart->image}}" alt="" href="#"></a>
                        <br>
                        {{$cart->name}} <br>
                        {{$cart->orders}} <br>
                        {{$cart->point}} <br>
                        <div>
                            <a href="{{ action('', ['id' => $cart->id]) }}">削除</a>
                        </div>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection