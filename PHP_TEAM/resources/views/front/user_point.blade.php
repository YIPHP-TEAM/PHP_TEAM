@extends('layouts.app')

@section('content')
<div class="container p-5">
        <h1 class="text-center border-bottom border-secondary pb-3 mb-5">ポイント申請画面</h1>
          <form action="point/save" method="post">
            @csrf
                <div class="my-5 row">
                    <h5 class="py-2 col-md-12">1.達成した項目を選択してください</h5>
                    <div class="mx-auto my-2">
                        <div class="btn-group btn-group-toggle" data-toggle="buttons" id="option1">
                            <label class="btn btn-outline-secondary btn-lg">
                            <input type="radio" name="options" id="option1" autocomplete="off">カリキュラムの合格
                            </label>
                            
                            <label class="btn btn-outline-secondary btn-lg px-4">
                            <input type="radio" name="options" id="option2" autocomplete="off">資格取得
                            </label>

                            <label class="btn btn-outline-secondary btn-lg">
                            <input type="radio" name="options" id="option2" autocomplete="off">その他の貢献活動
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <h5 class="py-2">2.達成内容を入力してください</h5>
                    <textarea class="form-control" name="content" rows="10"></textarea>
                </div>
                <input type="submit" class="create-btn btn-lg float-right" value="申請する">
          </form>
</div>
@endsection