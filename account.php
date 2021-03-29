<!-- アカウント管理画面です。こちらからパスワード変更、新規登録、アカウント削除機能にアクセスできます。 -->
<?php
session_start();
if (isset($_GET['mode'])) {
    $mode = $_GET['mode'];
}
if (isset($mode)) {
    $_SESSION["mode"] = $mode;
}
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
        <div id="dark" style="display:flex; flex-direction:column;font-size:0.8rem; position:absolute; top:70px; right: 40px">
            <a href="account.php?mode=CSS/style2.css">ライトモード</a>
            <a href="account.php?mode=CSS/style3.css">ダークモード</a>

        </div>
    </header>

    <main>
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