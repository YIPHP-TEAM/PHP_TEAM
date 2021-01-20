@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="mx-auto" style="max-width:1200px">
            <div class="row">
                <h1>カート内一覧画面</h1>
                <form action="#" method="post">
                    <!-- 商品一覧 -->
                    <div class="col-md-4">
                            <div class=""><img src="#" alt="">商品画像</div>
                            <br>
                            <div class="">商品名</div>
                            <br>
                            <div class="">
                                <div class="">注文数</div>
                                <div class="">必要ポイント</div>
                            </div>
                            <br>
                            <div class="">
                                <!-- 数量編集プルダウン -->
                                <div class=""> 
                                        <select name="cnt">
                                            <option value="1" selected>1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                </div>
                                <!-- 商品削除 -->
                                <div lass="">
                                    <a href="{{--{{ action('', ['id' => $cart->id]) }}--}}">削除</a>
                                </div>
                            </div>
                    </div>
                    <!-- 合計表示・購入ボタン -->
                    <div class="">  
                        <div class="">合計ポイントの表示</div>
                            <div class="">
                                <input type="submit" class="create-btn" value="購入画面へ">
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection