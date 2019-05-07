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
    