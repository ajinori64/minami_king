<?php
// そのテーブルの連番(主キー)とタイトルを取得する
function get_title(string $dbname) {
    require_once('db_manager.php');
    require_once('encode.php');
    $result[] = null;
    try {
        $pdo = getDB();
        $sql = "SELECT number, title FROM {$dbname}";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        for ($i = 0; $row = $stmt->fetch(PDO::FETCH_ASSOC); $i++) {
            $result[$i] = "No." . e($row['number']) . "　" . e($row['title']);
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