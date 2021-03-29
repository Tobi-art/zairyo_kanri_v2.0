<!-- 新しいアカウントを作成します。 -->
<?php
$user = $_POST['user'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];
$tablenm = $_POST['tablenm'];
$access = $_POST['access'];

//ユーザーネームなし、またはパスワードとパスワード確認欄が一致しないとNGです。
if ($pass1 != $pass2) {
    exit('パスワードは一致しません。<a href="account.php"><button>戻る</button><a>');
} elseif ($user == "") {
    exit('ユーザー名を入力して下さい。<a href="account.php"><button>戻る</button><a>');
};

include('_conx.php');

$sql = 'SELECT * FROM user_id WHERE user_nm=:userid AND user_pw=:pwd';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':userid', $tablenm);
$stmt->bindValue(':pwd', $access);
$res = $stmt->execute();

if ($res == false) {
    exit('Something went wrong. Please try again');
}

$val = $stmt->fetch();
if ($val != '') {

    //ユーザーデータベースに新しいユーザーを追加します。
    $sql = 'INSERT INTO user_id (id, user_nm, user_pw, u_table) VALUES (null, :user, :pass, :tablenm)';
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':user', $user, PDO::PARAM_STR);
    $stmt->bindValue(':pass', $pass1, PDO::PARAM_STR);
    $stmt->bindValue(':tablenm', $tablenm, PDO::PARAM_STR);
    $res = $stmt->execute();
    echo ('<script>    
    if(confirm("テーブルに接続しました。新しいユーザー名とパスワードでログインして下さい。")){
        window.location.href = "login.php";
    } else {
        window.location.href = "login.php";}
    </script>');
} else {
    $sql = 'INSERT INTO user_id (id, user_nm, user_pw, u_table) VALUES (null, :user, :pass, :userid)';
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':user', $user, PDO::PARAM_STR);
    $stmt->bindValue(':pass', $pass1, PDO::PARAM_STR);
    $stmt->bindValue(':userid', $user, PDO::PARAM_STR);
    $res = $stmt->execute();

    //新しく登録したユーザーと同名のテーブルを作成します。各ユーザーは自分のテーブルにしかアクセスできません。
    $sql = 'CREATE TABLE ' . $user . ' (id INT(12) PRIMARY KEY AUTO_INCREMENT, category VARCHAR(32) NOT NULL, item VARCHAR(32) NOT NULL, location VARCHAR(32) NOT NULL, expire DATE NOT NULL, indate DATETIME NOT NULL)';
    $stmt = $pdo->prepare($sql);
    $create = $stmt->execute();

    if ($create != true) {
        header('Location: account.php');
    } else {
        //反応がないと、実行されたかよく分からないですが、phpページをそれ以上増やしたくなかったのでJSで対応しています。
        echo ('<script>    
            if(confirm("新規テーブルが作成されました。新しいユーザー名とパスワードでログインして下さい。")){
                window.location.href = "login.php";
            } else {
                window.location.href = "login.php";}
            </script>');
    }
}
