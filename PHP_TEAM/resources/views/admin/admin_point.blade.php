<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>ポイント付与画面</title>
    <link rel="" href="">
  </head>

  <body>
    <div id="wrapper">
        <!--▼グローバルナビゲーション部分-->
        <?php include( $_SERVER['DOCUMENT_ROOT'] . '/admin_global_menu.php'); ?>

        <article>
            <h2>ポイント付与画面</h2>
            <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
            <h3><?php echo $row['ユーザ名']; ?></h3>
            <section>
                <h4>達成項目：<span><?php echo $row['達成項目']; ?></span></h4>
                <h4>詳&nbsp;細：<span><?php echo $row['詳細']; ?></span></h4>
                <p>？？削除ボタン？？</p>
            </section>
            <?php } ?>
            <section>
            <form action="">
                <p>何ポイント付与しますか？</p>
                <ul>
                    <li>1P</li>
                    <li>5P</li>
                    <li>10P</li>
                </ul>
                <input type="submit" value="ポイント付与">
            </form>
            </section>
        </article>
    </div><!--wrapper-->
  </body>
</html>

@extends('layouts.app')

@section('content')
<div class="container p-5">
        <div class="mx-auto">
            <h1 class="text-center border-bottom border-secondary pb-3 mb-5">>ポイント申請画面</h1>

                <div>
                  <!-- ユーザーネームの表示 -->
                <div>{{ Auth::user()->name }}</div>  
                <div class="col-md-8">
                        <div class="">達成項目名 {{$point->clear}}</div>
                        <br>
                        <div class="">詳細内容{{$point->content}}</div>
                    </div>
                    <div class="col-md-4">
                        <button type="button" class="btn">削除</button>
                    </div>
                </div>
                <!-- ポイントの付与 -->
                <div>
                  <form action="point/save" method="post">
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
                      <input type="submit" class="create-btn" value="ポイント付与">
                  </form>   
                </div>    
        </div>
</div>
@endsection