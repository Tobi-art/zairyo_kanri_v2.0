<?php
$user = $_POST['user'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];


if (empty($_POST['dblink'])) {
    echo '
<form name="new_u" method="post" action="account_new_act.php">
<input type="text" name="user" value="' . $user . '">
<input type="text" name="pass1" value="' . $pass1 . '">
<input type="text" name="pass2" value="' . $pass2 . '">
<input type="text" name="tablenm" value="">
<input type="text" name="access" value="">
    <script language="JavaScript">document.new_u.submit();</script></form>';
} else {
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>テーブルと接続</title>

</head>

<body>
    <header>
        <?php
        include('_stylelink.php');
        include('_header.php') ?>
    </header>
    <main>
        <form name="new_u" method="post" action="account_new_act.php" class="inputForm">
            <input type="hidden" name="user" value="<?= $user ?>">
            <input type="hidden" name="pass1" value="<?= $pass1 ?>">
            <input type="hidden" name="pass2" value="<?= $pass2 ?>">
            <label for="tablenm">何方のデータベースに接続しますか。</label><input type="text" name="tablenm" id="tablenm"><br>
            <label for="tablenm">パスワード</label><input type="password" name="access" id="access"><br><br>
            <button type="submit">連携アカウントを作成</button>
        </form>
    </main>









</body>

</html>