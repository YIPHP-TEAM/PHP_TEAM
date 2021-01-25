@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="mx-auto" style="max-width:1200px">  
            <h1>商品詳細画面</h1>
            <!-- 商品詳細部分 -->
            <div class="row">
                <div class="col-md-10"> 
                    <img src="{{asset('img/items/'.$item->image)}}">
                </div>
                <div class="col-md-8">
                    <div>商品名{{$item->name}}</div>
                    <div>商品説明{{$item->content}}</div>
                </div>
                <div class="col-md-6">
                    <div>必要ポイント数{{$item->point}} pt</div>
                    <div>在庫状況の確認{{$item->stock}}</div>
                </div>
            </div>
            <!-- 個数選択部分 -->
            <div class="row">
                <form action="/cart/add" method="post">
                    @csrf
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
                                <select class="form-control" name="quantity" min="1" max="{{ $item->stock }}" value="{{ old('orders') }}">
                                @for ($i = 1; $i <= $item->stock; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                                
                                </select>
                            </div>
                        </div>
                        <div>
                            <input type="hidden" name="item_id" value="{{ $item->id }}">
                            <input type="submit" class="create-btn" value="商品をカートに入れる">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection