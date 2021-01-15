@extends('layouts.front')
@section('content')

<p>{{ Auth::user()->name }} さん、こんにちは</p>
@if ($errors->has('name'))
  <li>{{$errors->first('name')}}</li>
@endif
    <form action="/question/save" method="POST">
        @csrf
        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
        <textarea name="comment" rows="4" cols="40"></textarea>
        <input type="submit" value="お問い合わせ">
    </form>
@endsection