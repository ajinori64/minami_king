<?php 
//アイテムを削除する関数を作成する
//DELETE FROM テーブル名 WHERE 条件;
require_once('db_manager.php');
$num = $_GET['number'];
$dbname = $_GET['dbname'];
try {
    $pdo = getDB();
    // 値と一致する連番を抽出
    $sql = "DELETE FROM $dbname WHERE number = :num";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':num', $num);
    $stmt->execute();
    // 一致するものを抽出
    header("Location: homemenu.php");
}
catch (PDOException $e) {
    echo "connection error：".$e->getMessage();
}
finally {
    $pdo = null;
}
?>