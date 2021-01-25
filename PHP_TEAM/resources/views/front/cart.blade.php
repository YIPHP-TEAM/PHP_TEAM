@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="mx-auto" style="max-width:1200px">
            <div class="row">
                <h1>カート内一覧画面</h1>
                    <!-- 商品一覧 -->
                    @foreach ($cart as $item)
                    <div class="col-md-4">
                            <div class=""><img src="{{asset('img/items/'.$item->options->photo_path)}}" alt=""></div>
                            <br>
                            <div class="">商品名{{$item->name}}</div>
                            <br>
                            <div class="">
                                <div class="">注文数{{$item->qty}}</div>
                                <div class="">必要ポイント{{$item->price}}</div>
                            </div>
                            <br>
                            <div class="">
                                <!-- 数量編集プルダウン -->
                                <form action="/cart/edit" method="post">
                                    @csrf
                                    <input type="hidden" name="rowId" value="{{$item->rowId}}">
                                <div class=""> 
                                        <select name="cnt">
                                            <option value="1" selected>1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                </div>
                                <button class="btn btn-link btn-sm" type="submit">
                                    編集
                                </button>
                            </form>
                                <!-- 商品削除 -->
                                <form action="/cart/delete" method="post">
                                    @csrf
                                    <input type="hidden" name="rowId" value="{{$item->rowId}}">
                                <div lass="">
                                    <button class="btn btn-link btn-sm" type="submit">
                                        削除
                                    </button>
                                    {{-- <a href="{{ action('Front\CartController@delete', ['id' => $item->id]) }}">削除</a> --}}
                                </div>
                                </form>
                            </div>
                    </div>
                    @endforeach
                    <!-- 合計表示・購入ボタン -->
                    <div class="">  
                        <div class="">合計ポイントの表示</div>
                            <div class="">
                                <input type="submit" class="create-btn" value="購入画面へ">
                            </div>
                        </div>
            </div>
        </div>
    </div>
@endsection