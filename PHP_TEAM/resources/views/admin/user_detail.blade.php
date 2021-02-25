



@extends('layouts.admin_app')

@section('content')
    <div class="container p-5">
            <!-- ユーザー情報 -->
            <div class="pt-3">
                <!-- ユーザー画像 -->
                    <div class="d-flex px-5">
                        <div class="col-md-6 ">
                            <h1 class="border-bottom border-secondary text-center mb-5">{{ $user->name }}</h1>           
                            <h4 class="mt-3 ml-3">選択言語：{{ $user->language }}</h4>
                            <h4 class="mt-3 ml-3">保有ポイント：{{ $user->point }} pt</h4>
                            <form class="form-inline py-3 align-items-end ml-3" action="{{'/user_detail/save/'.$user->id}}" method="post">
                                    @csrf
                                        <div class="">
                                            <select class="form-control" name="quantity" min="1" max="300" value="submit">
                                            @for ($i = 1; $i <= 300; $i++)
                                                <option value="{{ $i }}">{{ $i }}</option>
                                            @endfor
                                            </select>
                                        </div>
                                    <div class="">
                                        <input type="hidden" name="{{$user->id}}" value="submit">
                                        <input type="submit" class="btn btn-secondary p-2 px-3 ml-3" value="ポイントを変更する" >
                                    </div>
                            </form>
                        </div>
                        <div class="col-md-6 text-right"><img class="img_size_4" src="{{asset('storage/img/'.$user->image)}}" style="object-fit: cover;"></div>
                    </div>

            <!-- 達成項目(ループ) -->
                <div class="mt-5">
                @if ($points->isNotEmpty())
                    <table class="table table-bordered text-center" style="table-layout:fixed;width:100%;">
                            <thead class="table-active">
                                <tr>
                                <th style="width:20%;"><div class="my-2">達成項目</div></th>
                                <th style="width:50%;"><div class="my-2">詳細内容</div></th>
                                <th style="width:30%;"><div class="my-2">対応管理</div></th>
                                </tr>
                            </thead>
                            @foreach ($points as $point)
                            <tbody class="table-light">
                                <tr>
                                <td class="align-middle" style="word-wrap:break-word;"><div>{{$point->clear}}</div></td>
                                <td class="align-middle" style="word-wrap:break-word;"><div>{{$point->content}}</div></td>
                                <td class="align-middle" style="word-wrap:break-word;">
                                    <div class="text-center">
                                        <div class="d-flex">
                                            <div class="btn-group-toggle col-md-6" data-toggle="buttons">
                                                <label class="btn btn-outline-secondary">
                                                    <input type="checkbox" autocomplete="off"><i class="far fa-bookmark"></i>
                                                </label>
                                            </div>
                                            <div class="col-md-6">
                                                <a href="{{'/admin_point/'.$point->id}}"><button type="button" class="btn"><i class="fas fa-donate"></i></button></a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                </tr>
                            </tbody>
                            @endforeach
                            </table>
                @else
                <p class="pl-3 pt-5 text-center">達成項目はありません。</p>
                    @endif
                </div>                
            </div>
    </div>


@endsection
