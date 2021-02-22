@extends('layouts.admin_app')

@section('content')
<div class="container p-5">
        <div class="mx-auto">
            <h1 class="text-center border-bottom border-secondary pb-3 mb-5">ポイント付与画面</h1>
              <div class="pt-4">
                  <!-- ユーザーネームの表示 --> 
                <div class="d-flex">
                  <div class="col-md-7">
                  <p class="pb-3">1.達成内容を確認してください。</p>
                    <div class="card">
                      <h5 class="card-header py-4">{{$point->clear}}</h5>
                      <div class="card-body py-4">
                        <p class="card-text">{{$point->content}}</p>
                      </div>
                      <div class="card-footer py-1">
                                      <form action="/admin_point/delete/{{$point->id}}" method="post">
                                              {{ csrf_field() }}
                                              <button class="btn float-right"><i class="far fa-trash-alt"></i></button>
                                      </form>
                      </div>
                    </div>
                  </div>
                  <!-- ポイントの付与 -->
                  
                  <div class="col-md-1 mt-5 pt-5 pl-4"><h1 class="">→</h1></div>

                  <div class="col-md-4">
                    <p class="">2.付与するポイントを選択してください。</p>
                    <form action="{{'/admin_point/save/'.$point->id}}" method="post">
                            @csrf
                            <div class="form-inline py-3 btn-group btn-group-toggle" data-toggle="buttons">
                              <label class="btn btn-outline-secondary btn-lg px-4" for="exampleRadios1">
                              <input class="form-check-input" type="radio" required="required" name="clear" id="exampleRadios1" value ="1">
                              1P
                              </label>
                              <label class="btn btn-outline-secondary btn-lg px-4" for="exampleRadios1">
                              <input class="form-check-input" type="radio" required="required" name="clear" id="exampleRadios1" value="5">
                              5P
                              </label>
                              <label class="btn btn-outline-secondary btn-lg px-4" for="exampleRadios1">
                              <input class="form-check-input" type="radio" required="required" name="clear" id="exampleRadios1" value="10">
                              10P
                              </label>
                            </div>
                          <input type="submit"  class="btn btn-secondary p-2 px-3" value="ポイントを付与する">
                      </form>   
                  </div>
                </div>
              </div>    
        </div>
@endsection