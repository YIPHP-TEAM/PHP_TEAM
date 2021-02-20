@extends('layouts.app')

@section('content')
    <div class="container p-5">
        <div class="mx-auto">
            <h1 class="text-center border-bottom border-secondary pb-3 mb-5">カート内一覧画面</h1>
            <div class="row">
                    <!-- 商品一覧 -->
                    {{-- {{ dd($cart) }} --}}
                    @if (!empty($cart) && $cart->isNotEmpty())
                        @foreach ($cart as $item)
                            <div class="col-md-4">
                                <div class="card border-0">
                                    <div class="d-block mx-auto mt-5"><img src="{{asset('storage/img/items/'.$item->options->photo_path)}}" alt=""></div>
                                    <br>
                                    <div class="container px-5">
                                        <div class="text-center border-bottom border-secondary pb-3 mb-3">商品名{{$item->name}}</div>
                                        <div class="">
                                            <div class="">注文数：{{$item->qty}}</div>
                                            <div class="">必要ポイント(単価)：{{$item->price}}pt</div>
                                        </div>

                                        <!-- 数量編集プルダウン -->
                                        <div class="mt-3">
                                            <form action="/cart/edit" method="post">
                                                @csrf
                                                <input type="hidden" name="rowId" value="{{$item->rowId}}">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <select name="cnt" style="height:43px">
                                                            @for($i = 1; $i <= $item->options->stock; $i++)
                                                            <option value="{{ $i }}">{{ $i }}</option>
                                                            @endfor
                                                        </select>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <input type="submit" class="create-btn btn-block p-2 md-0" value="変更する">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <!-- 商品削除 -->
                                        <div class="mt-2">
                                            <form action="/cart/delete" method="post">
                                                @csrf
                                                <input type="hidden" name="rowId" value="{{$item->rowId}}">
                                                <div lass="">
                                                    <input type="submit" class="create-btn btn-block p-2 md-0" value="カートから削除する">
                                                    {{-- <a href="{{ action('Front\CartController@delete', ['id' => $item->id]) }}">削除</a> --}}
                                                </div>
                                            </form>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                                <br>
                            </div>
                        @endforeach

                        <!-- 合計表示・購入ボタン -->
                        <div class="container p-5">
                        <div class="col-md-12 mt-5" style="text-align:center">  
                            <div class="border-bottom border-secondary pb-3"><h2>合計ポイント： {{Cart::total()}}pt</h2></div>
                            <div class="mt-4">
                                @if (Auth::user()->point >= Cart::total())
                                <a class="btn btn-secondary border-dark" style="width:300px" href="/cart_order">購入画面へ進む</a>
                                @else
                                ポイントが足りませんので購入できません。<br>
                                編集で商品数を調整してください。
                                @endif
                            </div>
                        </div>
                        </div>
                    @else
                    <p class="mx-auto">カート内には何も入っていません。</p>
                    @endif
            </div>
        </div>
    </div>
@endsection