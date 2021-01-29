@extends('layouts.admin_app')

@section('content')
    <div class="container p-5">
        <div class="mx-auto">
            <h1 class="text-center border-bottom border-secondary pb-3 mb-5">お問い合わせ一覧画面</h1>

            <!-- お問い合わせ(ループ) -->
            @if ()
                @foreach ()
                <div class="row">
                    <!-- ユーザー名と問合せ内容 -->
                    <div class="col-md-8">
                        <div>{{ Auth::user()->image }}</div>
                        <br>
                        <div class="">問合せ内容{{}}</div>
                    </div>

                    <div class="col-md-2">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn">削除</button>
                    </div>
                </div>                
                @endforeach
            @endif
        </div>
    </div>
@endsection