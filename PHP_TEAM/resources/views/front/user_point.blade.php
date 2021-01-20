@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="mx-auto" style="max-width:1200px">
                <h1>ポイント申請画面</h1>
                <form action="#" method="post">
                    <div class="form-group row">
                        <div class="">
                            <input type="radio" class="form-control" name="title" value="{{--{{  }}--}}">
                        </div>
                        <br>
                        <label class="">カリキュラムの合格</label>
                    </div>
                    <div class="form-group row">
                        <div class="">
                            <input type="radio" class="form-control" name="title" value="{{--{{  }}--}}">
                        </div>
                        <br>
                        <label class="">その他の貢献活動</label>
                    </div>
                    <div class="form-group row">
                        <div class="">
                            <input type="radio" class="form-control" name="title" value="{{--{{  }}--}}">
                        </div>
                        <br>
                        <label class="">資格取得</label>
                    </div>
                    <br>
                    <div class="form-group row">
                        <div class="">
                            <textarea class="form-control" name="body" rows="20"></textarea>
                        </div>
                    </div>
                    <input type="submit" class="create-btn" value="申請する">
                </form>       
        </div>
    </div>
@endsection