@extends('layouts.app')

@section('content')
<div class="container p-5">
        <div class="mx-auto">
            <h1 class="text-center border-bottom border-secondary pb-3 mb-5">>ポイント申請画面</h1>

                <div>
                  <!-- ユーザーネームの表示 -->
                <div>{{ $user->name }}</div>  
                <div class="col-md-8">
                        <div class="">達成項目名 
                              @foreach ($points as $point)
                              {{$point->clear}}
                              <br>
                              @endforeach
                        </div>
                        <br>
                        <div class="">詳細内容
                              @foreach ($points as $point)
                              {{$point->content}}
                              <br>
                              @endforeach
                        </div>
                    </div>
                    <div class="col-md-4">
                        <form action={{--"/admin_point/destroy/{{$points->id--}} method="post">

                        <button type="button" class="btn">削除</button>
                    </div>
                </div>
                <!-- ポイントの付与 -->
                <div>
                  <form class="form-inline py-3" name="quantity" action="{{'/user_detail/save/'.$user->id}}" method="post">
                      @csrf
                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="clear" id="exampleRadios1" value="カリキュラムの合格">
                          <label class="form-check-label" for="exampleRadios1">
                          1P
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="clear" id="exampleRadios1" value="その他の貢献活動">
                          <label class="form-check-label" for="exampleRadios1">
                          5P
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="clear" id="exampleRadios1" value="資格取得">
                          <label class="form-check-label" for="exampleRadios1">
                          10P
                          </label>
                        </div>
                      <div class="col-md-2">
                        <input type="hidden" name="{{$user->id}}" value="submit">
                      <a href="{{'/user_detail/'.$user->id}}">
                      <input type="submit" class="create-btn" value="ポイント付与">
                    </a>
                      </div>
                  </form>   
                </div>    
        </div>
</div>
@endsection
 