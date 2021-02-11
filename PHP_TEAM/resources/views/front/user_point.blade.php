@extends('layouts.app')

@section('content')
<div class="container p-5">
        <h1 class="text-center border-bottom border-secondary pb-3 mb-5">ポイント申請画面</h1>
        <div class="col-md-8 mx-auto">
        <form action="point/save" method="post">
            @csrf
                <div class="my-5">
                    <h5 class="py-2">1.達成した項目を選択してください</h5>
                    <div class="my-2">
                        <div class="btn-group btn-group-toggle" data-toggle="buttons" id="option1">
                            <label class="btn btn-outline-secondary btn-lg px-4">
                            <input type="radio" name="clear" id="option1" value="カリキュラムの合格">カリキュラムの合格
                            </label>
                            
                            <label class="btn btn-outline-secondary btn-lg px-4">
                            <input type="radio" name="clear" id="option1" value="資格取得">資格取得
                            </label>

                            <label class="btn btn-outline-secondary btn-lg px-4">
                            <input type="radio" name="clear" id="option1" value="その他の貢献活動">その他の貢献活動
                            </label>
                        </div>
                    </div>
                    {!! formErr('clear') !!}
                </div>
                <div class="form-group">
                    <h5 class="py-2">2.達成内容を入力してください</h5>
                    <textarea class="form-control" name="content" rows="10"></textarea>
                    {!! formErr('content') !!}
                </div>
                <input type="submit" class="btn btn-secondary p-2 px-5 float-right" value="申請する">
        </form>
        </div>
</div>
@endsection