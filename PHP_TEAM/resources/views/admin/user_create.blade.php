@extends('layouts.admin_app')

@section('content')
    <div class="container p-5">
        <div class="mx-auto">  
            <!-- ページタイトルとボーダー -->
            <h1 class="text-center border-bottom border-secondary pb-3 mb-5">ユーザー作成画面</h1>
            <div class="row justify-content-center">
                <div class="col-md-10 mt-1">
                    <form method="POST" action="{{action('Admin\UserController@create') }}" enctype="multipart/form-data">
                        @csrf
                        <!-- 画像のアップロード -->
                        <!-- ＊＊＊要編集＊＊＊ -->
                        <div class="form-group row pt-1">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('ユーザー画像') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="file" class="form-control-file @error('name') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="name" autofocus accept="image/png, image/jpeg">
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- ＊＊＊ ＊＊＊ -->

                        <div class="form-group row pt-1">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('ユーザー名') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row pt-1">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('メールアドレス') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- ここから -->
                        <div class="form-group row pt-1">
                            <label for="role" class="col-md-4 col-form-label text-md-right">権限</label>
                            <div class="col-md-6">
                                <select id="role" type="text" class="form-control @error('role') is-invalid @enderror" name="role" value="{{ old('role') }}" required autocomplete="role" autofocus>
                                  <option value="" selected disabled>選択して下さい</option>
                                  <option value="0">一般ユーザー</option>
                                  <option value="1">管理者</option>
                                </select>
                                @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row pt-1">
                            <label for="language" class="col-md-4 col-form-label text-md-right">言語</label>
                            <div class="col-md-6">
                                <select id="role" type="text" class="form-control @error('language') is-invalid @enderror" name="language" value="{{ old('language') }}" required autocomplete="language" autofocus>
                                    <option value="" selected disabled>選択して下さい</option>
                                    <option value="PHP">PHP</option>
                                    <option value="JAVA">JAVA</option>
                                </select>
                                @error('language')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- ここまで内室追記 -->

                        <div class="form-group row pt-1">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('パスワード') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group  mb-0 row pt-2">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-secondary p-2 px-3">
                                    {{ __('ユーザーを作成する') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </div>
@endsection
