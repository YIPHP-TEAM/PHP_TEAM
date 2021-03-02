@extends('layouts.app')

@section('content')
    <div class="container p-5">
        <div class="mx-auto">
            <h1 class="text-center border-bottom border-secondary pb-3 mb-5">ユーザー情報</h1>
            <!-- ユーザー情報 -->
            <div class="px-5 pt-3">
                <div class="row px-3">
                    <div class="d-md-flex">
                        <h6 class="mr-4">ID：{{ Auth::user()->id }}</h6>
                        <h6>{{ Auth::user()->name }} さん</h6>
                    </div>
                </div>

                <div class="card w-100 border-0 mt-3" style="text-align:center">
                    <h6 class="mt-3">選択言語</h6>
                    <h4>{{ Auth::user()->language }}</h4>
                </div>
                <br>
                <div class="card w-100 border-0 mt-1" style="text-align:center">
                    <h6 class="mt-3">保有ポイント数</h6>
                    @if ($points->isEmpty())
                        <h4>0 pt</h4>
                    @else
                        <h4>{{ Auth::user()->point }} pt</h4>
                    @endif
                </div>

                <!-- 達成項目(ループ) -->
                @if ($points->isNotEmpty())
                    <table class="table table-bordered mt-5 text-center" style="table-layout:fixed;width:100%;">
                        <thead class="table-active">
                            <tr class="">
                                <th style="width:30%"><div class="my-2">達成項目名</div></th>
                                <th style="width:70%"><div class="my-2">詳細内容</div></th>
                            </tr>
                        </thead>
                        <!-- theadを使用しているため、１行目下線が太くなる -->
                        <tbody class="table-light">
                            @foreach ($points as $point)
                                <tr>
                                    <td class="align-middle">{{$point->clear}}</td>
                                    <td class="align-middle" style="word-wrap:break-word;">{{$point->content}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
@endsection