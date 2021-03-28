<!-- アカウント管理画面です。こちらからパスワード変更、新規登録、アカウント削除機能にアクセスできます。 -->
<?php
session_start();
$mode = $_POST['dark'];
$_SESSION["mode"] = $mode;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アカウント管理</title>
    <?php include('_stylelink.php') ?>
</head>

<body>
    <header>
        <?php include('_header.php') ?>
    </header>
    <main>
        <div id="dark">
            <form action="account.php" method="post">
                <input type="radio" name="dark" id="on" value="CSS/style3.css"><label for="on">dark</label>
                <input type="radio" name="dark" id="off" value="CSS/style2.css"><label for="off">light</label>
                <button type="submit">send</button>
            </form>
        </div>
        <div id='accounts' style='display: flex; flex-direction: column; padding-top: 5vw'>
            <a href="_logout.php"><button>ログアウト</button></a>
            <a href="account_chgpw.php"><button>パスワード変更</button></a>
            <a href="account_new.php"><button>アカウント新規作成</button></a>
            <a href="account_drop.php"><button>アカウント削除</button></a>
        </div>
    </main>
    <footer>
    </footer>
</body>

</html>