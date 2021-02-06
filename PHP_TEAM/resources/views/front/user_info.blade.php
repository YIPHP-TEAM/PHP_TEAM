@extends('layouts.app')

@section('content')
    <div class="container p-5">
        <div class="mx-auto">
            <h1 class="text-center border-bottom border-secondary pb-3 mb-5">ユーザー情報画面</h1>
            <!-- ユーザー情報 -->
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
            <div class="card w-100 border-0"style="text-align:center">
                <h6 class="mt-3">保有ポイント数</h6>
                <h4>{{ Auth::user()->point }} pt</h4>
            </div>

            <!-- 達成項目(ループ) -->
            @if ($points->isNotEmpty())
                <table class="table table-bordered mt-4">
                    <thead class="table-active">
                        <tr style="text-align:center">
                            <td style="width:30%" class="border-dark"><h6 class="mt-2">達成項目名</h6></td>
                            <td style="width:70%" class="border-dark"><h6 class="mt-2">詳細内容</h6></td>
                        </tr>
                    </thead>
                    <!-- theadを使用しているため、１行目下線が太くなる -->
                    <tbody class="table-light">
                        @foreach ($points as $point)
                            <tr>
                                <td class="border-dark"><h6 style="text-align:center" class="mt-2">{{$point->clear}}</h6></td>
                                <td class="border-dark"><h6 class="ml-2 mt-2">{{$point->content}}</h6></td>
                                <!-- 達成項目名が２行になった場合、詳細内容はmt-2で上下の感覚を揃えているため、中央揃えじゃなくなる -->
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection