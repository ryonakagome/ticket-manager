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
    <head>
        <meta charset="UTF-8">

        <meta name="robots" content="noindex,nofollow" />
        <meta name="description" content="N-Point Ticket Manager" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />

        <title>N-Point Ticket Manager</title>

    </head>
    <body>
        