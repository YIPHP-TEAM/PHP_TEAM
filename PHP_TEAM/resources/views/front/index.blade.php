@extends('layouts.front')
@section('content')
    <p>TOP画面</p>
    <p><a href="{{ action('Front\IndexController@contact') }}">お問い合わせ先</a></p>
@endsection