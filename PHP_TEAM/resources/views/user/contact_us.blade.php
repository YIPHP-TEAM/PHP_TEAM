@extends('layouts.app')

@section('content')
    <div class="">
        <h1>お問い合わせ</h1>
        <div class="">
            <!-- ユーザー名 -->
            <div class="">
                {{$users->name}}
            </div>
            <!-- 問い合わせフォーム -->
            <div class="">
                <form action="{{ action(' ') }}" method="post" enctype="multipart/form-data">
                            @if (count($errors) > 0)
                                <ul>
                                    @foreach($errors->all() as $e)
                                        <li>{{ $e }}</li>
                                    @endforeach
                                </ul>
                            @endif
                            <div class="form-group row">
                                <div class="">
                                    <textarea class="form-control" name="body" rows="20">{{ old('content') }}</textarea>
                                </div>
                            </div>
                            {{ csrf_field() }}
                            <input type="submit" class="create-btn" value="お問い合わせ">
                </form>
            </div>
        </div>
    </div>
@endsection