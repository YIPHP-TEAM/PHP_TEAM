@extends('layouts.app')

@section('content')
    <div class="container p-5">
        <div class="mx-auto">  
            <!-- ページタイトルとボーダー -->
            <h1 class="text-center border-bottom border-secondary pb-3 mb-5">THANK YOU!!</h1>
            <div class="row px-5 text-center my-4">
                <a href="{{ url('/') }}">買い物を続ける</a>
            </div>
        </div>
    </div>
@endsection