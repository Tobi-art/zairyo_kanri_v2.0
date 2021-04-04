<?php
include('_ident.php');
include('_conx.php');

$stmt = $pdo->prepare('SELECT category, count(category) AS CountOf FROM ' . $dbnm . ' GROUP BY category');
$status = $stmt->execute();




$count = '<form action="shoppinglist_act.php" method="post">';
$count .= '<div class="lines" style="display: flex"><label for="" style="width: 80px">種類</label>';
$count .= '<label for="">残存</label>';
$count .= '<label for="">必要個数</label></div>';
if ($status == false) {
    exit('Error!');
} else {
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $count .= '<div class="lines" style="display: flex">';
        $count .= '<label for="" style="width: 80px">' . $result['category'] . ':</label>';
        $count .= '<label for="" style="width: 40px">' . $result['CountOf'] . '</label>';
        $sql2 = $pdo->prepare('SELECT qty FROM s_list WHERE dbnm="' . $dbnm . '" AND category="' . $result["category"] . '"');
        $stmt2 = $sql2->execute();
        $result2 = $sql2->fetch(PDO::FETCH_ASSOC);
        $qty = intval($result2["qty"]);
        $count .= '<input type="number" name="' . $result['category'] . '" id="" style="width: 50px; height: 30px; margin-top: 15px" value=' . $qty . '>';
        $count .= '</div>';
    }
    $count .= '<br><button type="submit">ショッピングリスト作成</button></form>';
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ショッピングリスト作成</title>
    <?php include('_stylelink.php') ?>
</head>

<body>
    <header>
        <?php
        include('_header.php') ?>
    </header>
    <main>
        <div class="shoppinglist">
            <?= $count ?>
        </div>
        <div class="shoppinglist">
        </div>
    </main>
    <footer></footer>
</body>

</html>