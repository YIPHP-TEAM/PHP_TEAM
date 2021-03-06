@extends('layouts.admin_app')

@section('content')
    <div class="container p-5">
        <div class="mx-auto">  
            <!-- データベースやリンク部分は＃にしてます。 -->
            <!-- ページタイトルとボーダー -->
            <h1 class="text-center border-bottom border-secondary pb-3 mb-5">商品作成画面</h1>
            <div class="row justify-content-center">
                <div class="col-md-10 mt-1">
                    <form method="POST" action="{{action('Admin\ItemController@create') }}" enctype="multipart/form-data">
                        @csrf
                        <!-- 画像のアップロード -->
                        <div class="form-group row pt-1">
                            <label for="name" class="col-md-4 col-form-label text-md-right">商品画像</label>

                            <div class="col-md-6">
                                <input id="name" type="file" class="form-control-file @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="name" autofocusautofocus accept="image/png, image/jpeg">

                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <!-- 商品名の入力 -->
                        <div class="form-group row pt-1">
                            <label for="name" class="col-md-4 col-form-label text-md-right">商品名</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- 必要ポイント数の入力 -->
                        <div class="form-group row pt-1">
                            <label for="point" class="col-md-4 col-form-label text-md-right">必要ポイント</label>

                            <div class="col-md-6">
                                <input id="#" type="#" class="form-control @error('point') is-invalid @enderror" name="point" value="{{ old('point') }}" required autocomplete="#">

                                @error('point')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- 在庫数の入力 -->
                        <div class="form-group row pt-1">
                            <label for="stock" class="col-md-4 col-form-label text-md-right">在庫数</label>
                            <div class="col-md-6">
                                <input id="#" type="text" class="form-control @error('stock') is-invalid @enderror" name="stock" value="{{ old('stock') }}" required autocomplete="#" autofocus>
                                @error('stock')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- 商品説明 -->
                        <div class="form-group row pt-1">
                            <label for="content" class="col-md-4 col-form-label text-md-right">商品説明</label>
                            <div class="col-md-6">
                                <input id="＃" type="text" class="form-control @error('content') is-invalid @enderror" name="content" value="{{ old('content') }}" required autocomplete="＃" autofocus>
                                @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0 pt-1">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-secondary p-2 px-3">
                                    {{ __('商品を作成する') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </div>
@endsection
