@extends('layouts.app')

@section('content')
    <div class="container p-5">
        <div class="mx-auto">  
            <!-- ページタイトルとボーダー -->
            <h1 class="text-center border-bottom border-secondary pb-3 mb-5">お買い上げありがとうございました！</h1>
            <div class="row px-5 text-center my-4">
                <div class="col-md-12"><img style="width: 350px;" src="{{ asset('/img/thankyou_logo_2.png') }}" alt=""></div>
                <div class="col-md-11 mt-5 ml-4">
                    <p>注文内容がショップに送信されました。</p>
                    <h5><a href="{{ url('/') }}">買い物を続ける</a></h5>
                </div>
            </div>
        </div>
    </div>
@endsection
