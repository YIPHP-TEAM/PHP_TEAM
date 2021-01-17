@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="mx-auto" style="max-width:1200px">  
            <h1>商品詳細画面</h1>
            <!-- 商品詳細部分 -->
            <div class="row">
                <div class="col-md-10"> 
                    <img src="#" alt="">
                </div>
                <div class="col-md-8">
                    <div>商品名</div>
                    <div>商品説明</div>
                </div>
                <div class="col-md-6">
                    <div>必要ポイント数</div>
                    <div>在庫状況の確認</div>
                </div>
            </div>
            <!-- 個数選択部分 -->
            <div class="row">
                <form action="{{ action('#') }}" method="post">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <div>
                            <label class="col-md-2">数量</label>
                            <br>
                            <div class="col-md-2">
                                <select class="form-control" name="priority" min="1" max="10" value="{{ old('orders') }}">
                                <?php
                                for ($i = 1; $i <=10; $i++) {
                                    print ('<option value="' . $i. '">' . $i . '</option>');
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div>
                            <input type="submit" class="create-btn" value="購入する">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection