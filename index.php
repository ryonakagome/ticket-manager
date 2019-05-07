<?php
    session_start();
    if(isset($_SESSION['UserID']) == '') {

    } else {
        header("Location: home.php");
        exit();
    }
?>
<!DOCTYPE HTML>
<html lang="ja">
    <?php require_once('temp/head.php'); ?>
    <body>
        <?php require_once('temp/nav.php'); ?>
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <h3>ログイン</h3>
                    <p>N-Ticketを使用するには、ログインしてください...</p>
                    <form action="d-login.php" method="POST">
                        <h5>ユーザーID</h5>
                        <input type="password" placeholder="ユーザーIDを入力..." name="ui" class="validate" required />
                        <h5>パスワード</h5>
                        <input type="password" placeholder="パスワードを入力..." name="pw" class="validate" required />
                        <button type="submit" class="btn">送信</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>