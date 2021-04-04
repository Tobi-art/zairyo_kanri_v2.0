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

        //テーブルレイアウトの方が見やすいので、テーブルに入れておきます。
        $count = '<tr><th colspan="2">残存</th></tr>';
        if ($status == false) {
            exit('Error!');
        } else {
            while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $count .= '<tr>';
                $count .= '<td>';
                $count .= $result['category'];
                $count .= '</a> ';
                $count .= '</td>';
                $count .= '<td>';
                $count .= $result['CountOf'];
                $count .= '</a> ';
                $count .= '</td>';
                $count .= '</tr>';
            }
            $count .= '<tr><td><br></td><td></td></tr>';
        }
        ?>
        <div class="shoppinglist">
            <table>
                <?= $count ?>
            </table>
        </div>
        <div class="shoppinglist">
            <form action="shoppinglist_act.php" method="post">
                <input type="number" name="" id="">

            </form>
        </div>
    </main>


    <footer></footer>

</body>

</html>