<!DOCTYPE html>
<html>
  <head>
  	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>ユーザー作成画面</title>
    <link rel="" href="">
  </head>

  <body>
    <div id="wrapper">
    <!--▼グローバルナビゲーション部分-->
    <?php include( $_SERVER['DOCUMENT_ROOT'] . '/admin_global_menu.php'); ?>

      <article>
          <h2>ユーザ作成画面</h2>
        <form action="" method="post">
        <section>
            <label for="image">ユーザ画像の選択</label>
            <input type="file" class="form-control-file" name="image">
        </section>
        <section>
            <label for="name">ユーザ名</label>
            <input type="text" class="form-control" name="" value="">
        </section>
        <section>
            <label for="address">ユーザアドレス</label>
            <input type="text" class="form-control" name="" value="">
        </section>
        <section>
            <label for="password">パスワード</label>
            <input type="password" name="" size="" maxlength="">
        </section>
        <section>
            <label for="privilege">ユーザ権限</label>
        </section>
        <section>
            <label for="learning">学習言語</label>
            <p>
                <input type="checkbox" name="language" value="1">Java
                <input type="checkbox" name="language" value="2">PHP
            </p>
        </section>
        <section>
            <input type="submit" value="ユーザ作成">
        </section>
        </form>
      </article>
    </div>
  </body>
</html>
