@extends('layouts.app')

@section('content')
<div class="container p-5">
        <div class="mx-auto">
            <h1 class="text-center border-bottom border-secondary pb-3 mb-5">ポイント付与画面</h1>

                <div>
                  <!-- ユーザーネームの表示 -->
                <div>{{ $user->name }}</div>  
                <div class="col-md-8">
                        <div class="">達成項目名 
                              {{$point->clear}}
                              <br>
                        </div>
                        <br>
                        <div class="">詳細内容
                              {{$point->content}}
                              <br>
                        </div>
                    </div>
                    <div class="col-md-4">
                    <form action="/admin_point/delete/{{$point->id}}" method="post">
                                        {{ csrf_field() }}
                        <input type="submit" class="create-btn" value="削除" style="width:100px">
                      </form>
                    </div>
                </div>
                <!-- ポイントの付与 -->
                 <form class="form-inline py-3" action="{{'/admin_point/save/'.$point->id}}" method="post">
                        @csrf
                      <div class="form-check">
                          <input class="form-check-input" type="radio"　required="required" name="clear" id="exampleRadios1" value ="1">
                          <label class="form-check-label" for="exampleRadios1">
                          1P
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio"　required="required" name="clear" id="exampleRadios1" value="5">
                          <label class="form-check-label" for="exampleRadios1">
                          5P
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio"　required="required" name="clear" id="exampleRadios1" value="10">
                          <label class="form-check-label" for="exampleRadios1">
                          10P
                          </label>
                        </div>
                      <input type="submit"  class="create-btn" value="ポイント付与">
                  </form>   
              </div>    
        </div>
@endsection