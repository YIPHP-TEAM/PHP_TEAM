@extends('layouts.app')

@section('content')
@if (session('questionMessage'))
<div class="">
    {{ session('questionMessage') }}
</div>
@endif
    <div class="container p-5">
      <div class="mx-auto">
        <h1 class="text-center border-bottom border-secondary pb-3 mb-5">お問い合わせ</h1>
        <div class="form-group row px-5">
        <!-- ユーザーネーム -->
        <p>こんにちは {{ Auth::user()->name }} さん。</p>
          <!-- 問い合わせフォーム -->
          @if ($errors->has('name'))
            <li>{{$errors->first('name')}}</li>
          @endif
          <form action="/question/save" method="POST">
          @csrf
          <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
          <textarea name="comment" rows="4" cols="120"></textarea>
          <div class="col-md-12 clearfix">
            <input class="float-right mt-2 p-2" type="submit" value="お問い合わせ">
          </div>         
          </form>
        </div>
      </div>  
    </div>
@endsection