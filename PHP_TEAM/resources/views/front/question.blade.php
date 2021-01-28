@extends('layouts.app')

@section('content')
    <div class="container p-5">
      <div class="mx-auto">
        <h1 class="text-center border-bottom border-secondary pb-3 mb-5">お問い合わせ</h1>
        <!-- ユーザーネーム -->
        <p>{{ Auth::user()->name }} さん、こんにちは</p>
        <div class="form-group row">
          <!-- 問い合わせフォーム -->
          @if ($errors->has('name'))
            <li>{{$errors->first('name')}}</li>
          @endif
          <form action="/question/save" method="POST">
          @csrf
          <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
          <textarea name="comment" rows="4" cols="40"></textarea>
          <input type="submit" value="お問い合わせ">
          </form>
        </div>
      </div>  
    </div>
@endsection