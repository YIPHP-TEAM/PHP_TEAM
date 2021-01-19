@extends('layouts.app')

@section('content')
    <div class="">
        <h1>ユーザー情報画面</h1>
        <div class="">
            {{$users->id}}
            {{$users->name}} <br>
            {{$users->language}}
            {{$users->point}}
        </div>

        <div class="">
            @foreach($points as $point)
            達成項目
            {{$point->content}}
            @endforeach
        </div>
    </div>
@endsection