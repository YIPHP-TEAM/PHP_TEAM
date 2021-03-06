@extends('layouts.app')

@section('content')
    <div class="container p-5">
        <div class="mx-auto">  
            <!-- ページタイトルとボーダー -->
            <h1 class="text-center border-bottom border-secondary pb-3 mb-5">商品詳細</h1>
            <div class="row px-5 mx-auto">
                <!-- 商品詳細部分_右側-->
                <div class="col-md-8">
                    <div class="">
                        <h2 class="py-2">{{$item->name}}</h2>
                        <p class="border-top border-bottom py-5">{{$item->content}}</p>
                    </div>
                    <div class="form-inline py-2">
                        <div class="lead pr-5">必要ポイント数：{{$item->point}} pt</div>
                        <!-- 在庫数を記号表示 -->
                        <div class="lead">在庫：
                            @if(($item->stock) > 4)
                            ◯
                            @elseif(($item->stock) > 0)
                            ▲
                            @else
                            ×
                            @endif
                        </div>
                    </div>

                    <!-- 個数選択 -->
                    <div class="form-inline py-3">
                    <form action="/cart/add" method="post">
                        @csrf
                        @if ($item->stock > 0)
                            <ul>
                                @foreach($errors->all() as $e)
                                    <li>{{ $e }}</li>
                                @endforeach
                            </ul>
                            <div class="pb-0 d-flex align-items-end">
                                <label class="mr-2">数量</label>
                                <div class="">
                                    <select class="form-control" name="quantity" min="1" max="{{ $item->stock }}" value="{{ old('orders') }}">
                                    @for ($i = 1; $i <= $item->stock; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                    </select>
                                </div>
                                <div class="ml-3 align-items-end">
                                <input type="hidden" name="item_id" value="{{ $item->id }}">
                                <input type="submit" class="btn btn-secondary p-2 mb-0" value="商品をカートに入れる" style="width:300px">
                                </div>
                            </div>
                            @else
                            <p>在庫がありません。</p>
                            @endif
                    </form>
                    </div>
                </div>

                <!-- 商品画像_左側 -->
                <div class="col-md-4"> 
                    <img class="w-100" src="{{asset('storage/img/items/'.$item->image)}}" style="object-fit: cover;">
                </div>

                @if (session('message'))
                <div class="col mt-3">
                    {{ session('message') }}
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection