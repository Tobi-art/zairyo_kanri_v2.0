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

//delete previously existing data
$sql2 = 'DELETE FROM s_list WHERE dbnm = "' . $dbnm . '"';
$stmt2 = $pdo->prepare($sql2);
$status2 = $stmt2->execute();



for ($i = 0; $i < (sizeof($pre) - 1); $i += 3) {
    $sql3 = 'INSERT INTO s_list VALUES("' . $dbnm . '", "' . $pre[$i] . '", "' . $pre[$i + 2] . '")';
    $stmt3 = $pdo->prepare($sql3);
    $stmt3->execute();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ショッピングリスト</title>
</head>

<body>
    <main>
        <?= $sl ?>
    </main>
</body>