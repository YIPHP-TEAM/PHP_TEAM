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