<?php
function additem(int $number, string $dbname, string $registdb , string $filename) {
    require_once('db_manager.php');
    require_once('encode.php');
    try {
        $pdo = getDB();
        // データの抽出処理
        $sql = "SELECT * FROM {$dbname} WHERE number = :num";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':num', $number);
        $stmt->execute();
        $result = "";
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $num = e($row['number']);
            $title = e($row['title']);
            $head = e($row['header']);
            $body = e($row['body']);
        }
        // 重複している連番を抽出
        $sql = "SELECT * FROM $registdb WHERE number = :num";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':num', $num);
        $stmt->execute();
        // 重複したものを$memberにセット
        $member = $stmt->fetchAll(PDO::FETCH_COLUMN);
        // 存存在するならガイドページ・しなければ追加処理
        if ($member != null) {
            header("Location: {$filename}?No.{$num}はすでに登録しています");
        }
        else {
            // データの登録処理
            $sql = "INSERT INTO {$registdb} (number, title, header, body) VALUES (:number, :title, :head, :body)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':number', $num);
            $stmt->bindValue(':title', $title);
            $stmt->bindValue(':head', $head);
            $stmt->bindValue(':body', $body);
            $stmt->execute();
        }        
    }
    catch (PDOException $e) {
        echo "connection error：".$e->getMessage();
    }
    finally {
        $pdo = null;
    }
}

?>