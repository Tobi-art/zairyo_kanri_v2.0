<!-- dbに接続します。
全てのページに読み込みますので、一箇所変更すれば別のdbに帰ることができます。 -->
<?php
if (isset($_SESSION['user_nm'])) {
    $dbnm = $_SESSION['u_table'];
}

try {
    $pdo = new PDO('mysql:dbname=zairyo_db;charset=utf8;host=localhost', 'root', '');
} catch (PDOException $e) {
    exit('DbConnectError:' . $e->getMessage());
}
return $pdo;
