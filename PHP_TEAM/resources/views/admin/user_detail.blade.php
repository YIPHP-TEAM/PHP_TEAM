@extends('layouts.admin_app')

@section('content')
    <div class="container p-5">
        <div class="mx-auto">
            <h1 class="text-center border-bottom border-secondary pb-3 mb-5">ユーザー詳細画面</h1>
            <!-- ユーザー情報 -->
            <div class="row">
                <div><td class="align-middle" style="word-wrap:break-word;"><img class="w-50" src="{{asset('storage/img/'.$user->image)}}"></th></div>
                <br>
                <div>{{ $user->name }}</div>            
                <div>初期選択言語{{ $user->language }}</div>
                <br>
                
                <div>保有ポイント数編集{{ $user->point }}</div>
                <form class="form-inline py-3" action="{{'/user_detail/save/'.$user->id}}" method="post">
                        @csrf
                            <ul>

                            </ul>

                            <div class="">
                                <div class="">
                                    <select class="form-control" name="quantity" min="1" max="300" value="submit">
                                    @for ($i = $user->point; $i <= 300; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="">
                                <input type="hidden" name="{{$user->id}}" value="submit">
                                
                                <input type="submit" class="create-btn" value="ポイントを変更する" style="width:300px">
                            
                            </div>
                        
                </form>
                </div>
            </div>

            <!-- 達成項目(ループ) -->
                <div class="row">
                @foreach ($points as $point)
                    <div class="col-md-8">
                        <div class="">達成項目名
                            {{$point->clear}}
                        </div>
                        <div class="">詳細内容
                            {{$point->content}}
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-outline-secondary">
                                <input type="checkbox" autocomplete="off">対応中
                            </label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <a href="{{'/admin_point/'.$point->id}}">
                        <button type="button" class="btn">ポイント付与へ</button>
                    </a>
                    </div>
                @endforeach
                </div>                

        </div>
    </div>


@endsection