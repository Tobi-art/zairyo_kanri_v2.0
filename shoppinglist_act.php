<?php
// include('_ident.php');
session_start();
include('_conx.php');

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

echo $pre[0] . ':' . intval($pre[1]) - intval($pre[2]);
