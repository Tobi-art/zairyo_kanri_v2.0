<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ショッピングリスト</title>
    <?php include('_stylelink.php') ?>
</head>

<body>
    <header>
        <?php
        include('_ident.php');
        include('_conx.php');
        include('_header.php') ?>
    </header>
    <main>

        <?php
        $stmt = $pdo->prepare('SELECT category, count(category) AS CountOf FROM ' . $dbnm . ' GROUP BY category');
        $status = $stmt->execute();

        $count = '<form action="shoppinglist_act.php" method="post" id="printShoppinglist">';
        if ($status == false) {
            exit('Error!');
        } else {
            while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $count .= '<label for="">';
                $count .= $result['category'];
                $count .= '</label>';
                $count .= '<input type="number" name="' . $result["category"] . '" id="' . $result["category"] . '" value=0>';
                $count .= '(現:' . $result['CountOf'] . ')';
                $count .= '<br>';
            }
            $count .= '<button type="submit" id="printShoppinglist">ショッピングリスト作成</button></form>';
        }
        ?>
        <div class="counts">
            <?= $count ?>
        </div>
        <div id="shoppinglist">
        </div>
    </main>


    <footer></footer>

</body>

</html>