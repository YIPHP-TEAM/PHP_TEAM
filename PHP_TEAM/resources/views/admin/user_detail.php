<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>ユーザー詳細画面</title>
    <link rel="" href="">
  </head>

  <body>
    <div id="wrapper">
        <!--▼グローバルナビゲーション部分-->
        <?php include( $_SERVER['DOCUMENT_ROOT'] . '/admin_global_menu.php'); ?>

        <article>
            <h2>ユーザ詳細画面</h2>
            <section>
                <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                    <div id="user_img"><?php echo $row['ユーザ画像']; ?></div>
                    <table>
                        <tr>
                            <td><?php echo $row['ユーザ名']; ?></td>
                            <td><?php echo $row['選択言語']; ?></td>
                        </tr>
                        <tr>
                            <td>
                                <label>保有ポイント：<?php echo $row['保有ポイント']; ?></label>
                                <a class="js-modal-open" href="">ポイントを変更する</a>
                            </td> 
                        </tr>
                    </table>
                <?php } ?>
            </section>
            <section>
                <h3>ポイント申請状況</h3>
                <table>
                    <tr>
                        <td>達成項目</td>
                        <td>詳&nbsp;細</td>
                        <td>ステータス</td>
                    </tr>
                    <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                        <a href="">
                            <tr>
                                <td><?php echo $row['達成項目']; ?></td>
                                <td><?php echo $row['詳細']; ?></td>
                                <td><?php echo $row['ステータス']; ?></td>
                            </tr>
                        </a>
                    <?php } ?>
                </table>
            </section>
        </article>
    </div><!--wrapper-->
    <div class="modal js-modal">
        <div class="modal__bg js-modal-close"></div>
        <div class="modal__content">
            <button type="button" class="js-modal-close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <p>現在の保有ポイント：</p><?php echo $row['保有ポイント']; ?><br>
            <form action="xxx.php" method="post">
                <input type="number" name="changePoint"><input type="submit" value="ポイント変更">
            </form>
        </div><!--modal__inner-->
    </div><!--modal-->
  </body>
</html>

