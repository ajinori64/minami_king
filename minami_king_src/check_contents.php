<?php
function check_contents(int $number, string $dbname) {
    // 確認ボタンを押したときのページ作成
    require_once('db_manager.php');
    require_once('encode.php');

    try {
        $pdo = getDB();
        $sql = "SELECT * FROM {$dbname} WHERE number = :num";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':num', $number);
        $stmt->execute();
        $result[] = "";
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $result[0] = "No." . e($row['number']) . "　" . e($row['title']);
            $result[1] = e($row['header']);
            $result[2] = e($row['body']);
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