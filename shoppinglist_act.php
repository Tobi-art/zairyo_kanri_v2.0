<?php
session_start();
include('_conx.php');
include('_stylelink.php');
include('_header.php');

$stmt = $pdo->prepare('SELECT category, count(category) AS CountOf FROM ' . $dbnm . ' GROUP BY category');
$status = $stmt->execute();

$categ = '';
if ($status == false) {
    exit('Error!');
} else {
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $categ .= $result['category'];
        $categ .= ',';
        $categ .= $result['CountOf'];
        $categ .= ',';
        $categ .= $_POST[$result['category']];
        $categ .= ',';
    }
    $pre = explode(',', $categ);
}

$sl = '<table>';
for ($i = 0; $i < sizeof($pre) - 1; $i += 3) {
    $sl .= '<tr><td>';
    $sl .= $pre[$i];
    $a = intval($pre[$i + 1]);
    $b = intval($pre[$i + 2]);
    $c = $b - $a;
    $sl .= '</td><td>';
    $sl .= $c;
    $sl .= '</td></tr>';
}
$sl .= '</table>';

//make sure there is a record for the user 
$sql2 = 'SELECT * FROM shoppinglist WHERE user_nm = "' . $dbnm . '"';
$stmt2 = $pdo->prepare($sql2);
$status2 = $stmt2->execute();
//in case there is no such user, create a new record
if ($stmt2->fetch(PDO::FETCH_ASSOC) == '') {
    $sql3 = 'INSERT INTO shoppinglist (user_nm) VALUES("' . $dbnm . '")';
    $stmt3 = $pdo->prepare($sql3);
    $status = $stmt3->execute();
};
//then insert data
$writedata = '"';
$writedata .= $pre[0] . '", "' . $pre[1] . '"';
for ($i = 3; $i < sizeof($pre) - 1; $i += 3) {
    $writedata .= ', "';
    $writedata .= $pre[$i];
    $writedata .= '" , "';
    $writedata .= $pre[$i + 1];
    $writedata .= '"';
};


$sql3 = 'INSERT INTO shoppinglist VALUES("' . $dbnm . '", ' . $writedata . ')';
//throws error #1136 - column count doesn't match value count at row 1
//add NULL values for each empty column before proceeding

var_dump($sql3);
exit;

$stmt3 = $pdo->prepare($sql3);
$status = $stmt3->execute();




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <?= $sl ?>
    </main>
</body>

</html>