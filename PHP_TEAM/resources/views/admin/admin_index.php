<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>管理者Top画面</title>
    <link rel="" href="">
  </head>

  <body>
    <div id="wrapper">
      <!--▼グローバルナビゲーション部分-->
      <?php include( $_SERVER['DOCUMENT_ROOT'] . '/admin_global_menu.php'); ?>

      <article>
        <section>
          <form action="">
            <input type="search" name="search" placeholder="ユーザー名">
            <input type="submit" name="submit" value="検索">
          </form>
        </section>
        <section>
          <div id="users_list">

          </div>
        </section>
      </article>
    </div>
  </body>
</html>