<?php
// db_connect.phpの読み込み
require_once('db_connect.php');
// function.phpの読み込み
require_once('function.php');
// ログインしていなければ、login.phpにリダイレクト
check_user_logged_in();
// URLの?以降で渡されるIDをキャッチ
$id = $_GET['id'];
// もし、$idが空であったらmain.phpにリダイレクト
// 不正なアクセス対策
if (empty($id)) {
    header("Location: main.php");
    exit;
}
// PDOのインスタンスを取得
$pdo = db_connect();

try {
    // SQL文の準備
    $sql = "SELECT * FROM posts WHERE id = :id";
    // プリペアドステートメントの作成
    $stmt = $pdo->prepare($sql);
    // idのバインド
    $stmt->bindParam(':id', $id);
    $stmt->execute();
} catch (PDOException $e) {
    // エラーメッセージの出力
    echo 'Error: ' . $e->getMessage();
    // 終了
    die();
}

// 結果が1行取得できたら
if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $id = $row['id'];
    $title = $row['title'];
    $content = $row['content'];
} else {
    // 対象のidでレコードがない => 不正な画面遷移
    echo "対象のデータがありません。";
}
?>

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
