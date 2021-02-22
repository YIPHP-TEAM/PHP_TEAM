@extends('layouts.admin_app')

@section('content')
    <div class="container p-5">
        <div class="mx-auto">
            <h1 class="text-center border-bottom border-secondary pb-3 mb-5">お問い合わせ一覧画面</h1>

            <!-- お問い合わせ(ループ) -->
                <!-- ユーザー名と問合せ内容 -->
                <div class="row">
                @if ($questions->isNotEmpty())
                    <div class="mx-auto col-md-12">
                        <table class="table table-bordered text-center" style="table-layout:fixed;width:100%;">
                        <thead class="table-active">
                            <tr>
                            <th style="width:10%;"><div class="my-2">ID</div></th>
                            <th style="width:70%;"><div class="my-2">問い合わせ内容</div></th>
                            <th style="width:20%;"><div class="my-2">対応管理</div></th>
                            </tr>
                        </thead>
                        @foreach ($questions as $question)
                        <tbody class="table-light">
                            <tr>
                            <td class="align-middle" style="word-wrap:break-word;"><div>{{$question->user_id}}</div></td>
                            <td class="align-middle" style="word-wrap:break-word;"><div>{{$question->content}}</div></td>
                            <td class="align-middle" style="word-wrap:break-word;">
                                <div class="d-flex">
                                    <div class="col-md-6">
                                        <div class="btn-group-toggle" data-toggle="buttons">
                                                    <label class="btn btn-outline-secondary">
                                                        <input type="checkbox" autocomplete="off"><i class="far fa-bookmark"></i>
                                                    </label>
                                                </div>
                                        </div>
                                    <div class="col-md-6">
                                    <form action="/admin_question/delete/{{$question->id}}" method="post">
                                        {{ csrf_field() }}
                                            <button class="btn btn-secondary"><i class="far fa-trash-alt"></i></button>
                                    </form>
                                    </div>
                                </div>
                            </td>
                            </tr>
                        </tbody>
                        @endforeach
                        </table>
                    </div>
                    @else
                    <p class="mx-auto">お問い合わせはありません。</p>
                    @endif
                </div>                

        </div>
    </div>
@endsection