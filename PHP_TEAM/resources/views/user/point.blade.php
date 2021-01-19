@extends('layouts.app')

@section('content')
    <div class="">
        <h1>ポイント申請画面</h1>
        <form action="{{ action(' ') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <div class="">
                            <input type="radio" class="form-control" name="title" value="{{  }}">
                        </div>
                        <br>
                        <label class="">カリキュラムの合格</label>
                    </div>
                    <div class="form-group row">
                        <div class="">
                            <input type="radio" class="form-control" name="title" value="{{  }}">
                        </div>
                        <br>
                        <label class="">その他の貢献活動</label>
                    </div>
                    <div class="form-group row">
                        <div class="">
                            <input type="radio" class="form-control" name="title" value="{{  }}">
                        </div>
                        <br>
                        <label class="">資格取得</label>
                    </div>
                    <br>
                    <div class="form-group row">
                        <div class="">
                            <textarea class="form-control" name="body" rows="20">{{ old('') }}</textarea>
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="create-btn" value="申請する">
                </form>
    </div>
@endsection