@extends('layouts.app')

@section('content')
    <div class="">
        <h1>お問い合わせ</h1>
        <div class="">
            <!-- ユーザー名 -->
            <div class="">
            ユーザーネーム
            </div>
            <!-- 問い合わせフォーム -->
            <div class="">
                <form action="{{ action(' ') }}" method="post" enctype="multipart/form-data">
                            <div class="form-group row">
                                <div class="">
                                    <textarea class="form-control" name="body" rows="20">{{ old('content') }}</textarea>
                                </div>
                            </div>
                            <!-- {{ csrf_field() }} -->
                            <input type="submit" class="create-btn" value="お問い合わせ">
                </form>
            </div>
        </div>
    </div>
@endsection