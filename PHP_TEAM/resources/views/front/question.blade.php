@extends('layouts.app')

@section('content')
@if (session('questionMessage'))
<div class="">
    {{ session('questionMessage') }}
</div>
@endif
    <div class="container p-5 mb-5">
      <div class="mx-auto">
        <h1 class="text-center border-bottom border-secondary pb-3 mb-5">お問い合わせ</h1>
        <div class="col-md-10 mx-auto">
        <!-- ユーザーネーム -->
        <div class="col">
          <p>こんにちは {{ Auth::user()->name }} さん。</p>
        </div>
        <div class="col-md-12">
          <!-- 問い合わせフォーム -->
          @if ($errors->has('name'))
            <li>{{$errors->first('name')}}</li>
          @endif
          <form action="/question/save" method="POST">
          @csrf
          <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
          <textarea class="form-control" name="content" rows="4"></textarea>
            <input class="float-right mt-3 p-2 px-3 btn btn-secondary " type="submit" value="お問い合わせ">        
          </form>
        </div>
      </div>  
    </div>
@endsection