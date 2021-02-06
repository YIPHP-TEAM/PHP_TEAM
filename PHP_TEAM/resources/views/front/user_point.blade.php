@extends('layouts.app')

@section('content')
<div class="container p-5">
        <div class="mx-auto">
            <h1 class="text-center border-bottom border-secondary pb-3 mb-5">>ポイント申請画面</h1>
                <form action="point/save" method="post">
                    @csrf
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="clear" id="exampleRadios1" value="カリキュラムの合格">
                        <label class="form-check-label" for="exampleRadios1">
                        カリキュラムの合格 
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="clear" id="exampleRadios1" value="その他の貢献活動">
                        <label class="form-check-label" for="exampleRadios1">
                        その他の貢献活動
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="clear" id="exampleRadios1" value="資格取得">
                        <label class="form-check-label" for="exampleRadios1">
                        資格取得
                        </label>
                      </div>
                      {!! formErr('clear') !!}
                    {{-- <div class="form-group">
                        <div class="">
                            <input type="radio" class="form-control" name="title" value="{{  }}">
                        </div>
                        <br>
                        <label class="">カリキュラムの合格</label>
                    </div>
                    <div class="form-group">
                        <div class="">
                            <input type="radio" class="form-control" name="title" value="{{  }}">
                        </div>
                        <br>
                        <label class="">その他の貢献活動</label>
                    </div>
                    <div class="form-group">
                        <div class="">
                            <input type="radio" class="form-control" name="title" value="{{  }}">
                        </div>
                        <br>
                        <label class="">資格取得</label>
                    </div>
                    <br> --}}
                    <div class="form-group">
                        <div class="">
                            <textarea class="form-control" name="content" rows="10"></textarea>
                        </div>
                        {!! formErr('content') !!}
                    </div>
                    <input type="submit" class="create-btn" value="申請する">
                </form>       
        </div>
</div>
@endsection