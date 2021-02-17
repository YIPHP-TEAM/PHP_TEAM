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
                    <div class="col-md-8">
                        <div class="">達成項目名
                            @foreach ($points as $point)
                            {{$point->clear}}
                            <br>
                            @endforeach
                        </div>
                        <div class="">詳細内容
                            @foreach ($points as $point)
                            {{$point->content}}
                            <br>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-2">

                        <HTML>
                        <BODY>

                        <FORM name="f1">
                        <INPUT type="button" value="対応中" onClick="color(0)">
                        </FORM>

                        <SCRIPT language="JavaScript">
                        <!--
                            function color(b){
                            document.f1.elements[b].value='対応中';
                            document.f1.elements[b].style.background='#FF0000';
                            document.f1.elements[b].style.color='#FFFFFF';
                            }
                        // -->
                        </SCRIPT>
                        </BODY>
                        </HTML>
                    </div>
                    <div class="col-md-2">
                        <a href="{{'/admin_point/'.$user->id}}">
                        <button type="button" class="btn">ポイント付与へ</button>
                    </a>
                    </div>
                </div>                

        </div>
    </div>


@endsection