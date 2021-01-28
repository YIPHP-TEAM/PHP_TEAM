@extends('layouts.app')

@section('content')
    <div class="container p-5">
        <div class="mx-auto">
            <h1 class="text-center border-bottom border-secondary pb-3 mb-5">>購入画面</h1>
            <!-- 購入商品一覧 -->
            <div class="row">
                <div class="">
                    <div class=""><img src="" alt=""></div>
                    <div class="">商品名</div>
                    <div class="">必要ポイント数</div>
                    <div class="">数量</div>
                </div>
                <br>
                <div class="">
                    <div class=""><img src="" alt=""></div>
                    <div class="">商品名</div>
                    <div class="">必要ポイント数</div>
                    <div class="">数量</div>
                </div>
                <br>
                <div class="">
                    <div class=""><img src="" alt=""></div>
                    <div class="">商品名</div>
                    <div class="">必要ポイント数</div>
                    <div class="">数量</div>
                </div>
            </div>

            <!-- 購入確認 -->
            <form action="#" method="post">
                <div class="row">
                    <div class="">
                        <div class="">注文内容</div>
                        <br>
                        <div class="">
                            <div class="">注文数合計</div>
                            <br>
                            <div class="">注文合計額</div>
                        </div>
                    </div>
                    <div class="">
                        <input type="submit" class="create-btn" value="購入する">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection