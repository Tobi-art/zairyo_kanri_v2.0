<!-- データ更新機能。クリックしたアイテムのデータを取得し、フォームに出力します。 -->
<?php
include('_ident.php');
include('_conx.php');
$id = $_GET['id'];
$org = $_GET['org'];


$sql = 'SELECT * FROM ' . $dbnm . ' WHERE id=:id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

if ($status == false) {
    exit('Error');
} else {
    $row = $stmt->fetch();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>更新</title>
    <?php include('_stylelink.php') ?>
</head>

<body>
    <header>
        <?PHP include('_header.php') ?>
    </header>
    <div class="adjust">
        <form action="update_act.php" method="post" id='upd'>
            <label for="category">種類</label><input type="text" name="category" value='<?= $row['category'] ?>'><br>
            <label for="item">品名</label><input type="text" name="item" value='<?= $row['item'] ?>'><br>
            <label for="location">保存場所</label><input type="text" name="location" value='<?= $row['location'] ?>'><br>
            <label for="expire">賞味期限</label><input type="date" name="expire" value='<?= $row['expire'] ?>'><br>
            <input type="hidden" name="id" value='<?= $row['id'] ?>'>
            <input type="hidden" name="org" value='<?= $org ?>'>
        </form>
        <div class="updBtn">
            <button type="submit" form="upd">更新</button>
            <a href="_delete.php?id=<?= $row['id'] ?>&org=<?= $org ?>"><button type="" class="dlt">削除</button></a>
        </div>
    </div>
    <footer></footer>
</body>

</html>