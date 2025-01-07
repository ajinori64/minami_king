<?php
// そのテーブルの連番(主キー)とタイトルを取得する
function getarray(string $dbname) {
    require_once('db_manager.php');
    require_once('encode.php');
    $result[][] = null;
    try {
        $pdo = getDB();
        $sql = "SELECT number, title FROM {$dbname}";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        for ($i = 0; $row = $stmt->fetch(PDO::FETCH_ASSOC); $i++) {
            $result[$i][0] = e($row['number']);
            $result[$i][1] = e($row['title']);
        }
        return $result;
    }
    catch (PDOException $e) {
        echo "connection error：".$e->getMessage();
    }
    finally {
        $pdo = null;
    }
}

?>