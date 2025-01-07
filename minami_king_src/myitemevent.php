<?php 
// アイテム一覧を表示する
require_once('check_contents.php');
$num = $_GET['num'];
$dbname = $_GET['dbname'];
$result = check_contents($num, $dbname);
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/homemenu.css?<?php echo date('YmdHis'); ?>"/>
    </head>
    <body>
        <div class="block">
            <div class="head"><p class="itemhead"><?=$result[0]?></p></div>
            <div class="main">
                <div class="side">
                    <div class="items">
                        <div class="itemcontents">
                            <p>ホーム</p>
                        </div>
                        <div class="itembutton">
                            <button class="type1button" onclick="location.href='homemenu.php'"></button>
                        </div>
                    </div>
                    <div class="items">
                        <div class="itemcontents">
                            <p>カレンダー</p>
                        </div>
                        <div class="itembutton">
                            <button class="type1button" onclick="location.href='calendar.php'"></button>
                        </div>
                    </div>
                    <div class="items">
                        <div class="itemcontents">
                            <p>就職活動</p>
                        </div>
                        <div class="itembutton">
                            <button class="type1button" onclick="location.href='jobguide.php'"></button>
                        </div>
                    </div>
                    <div class="items">
                        <div class="itemcontents">
                            <p>学内イベント</p>
                        </div>
                        <div class="itembutton">
                            <button class="type1button" onclick="location.href='campusevent.php'"></button>
                        </div>
                    </div>
                    <div class="items">
                        <div class="itemcontents">
                            <p>ヘルプ</p>
                        </div>
                        <div class="itembutton">
                            <button class="type1button" onclick="location.href='help.php'"></button>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <div class="mainitem">
                        <?php 
                        // ヘッダーはh要素で、本文はp要素で表示する
                        // ヘッダーと本文で組み分けして見やすく
                        ?>
                        <div class="rowitem">
                            <div class="itemcontentsarea">
                                <h3 class="rowhead"><u><?=$result[1]?></u></h3>
                                <p class="rowbody"><?=$result[2]?></p>
                            </div>
                        </div>
                    </div>
                    <div class="foot">
                        <div class="jump">
                            <button onclick="location.href='#'" class="footbutton"><div class="foottext">TOPに戻る</div></button>
                        </div>
                        <div class="logout">
                            <button onclick="location.href='homemenu.php'" class="footbutton"><div class="foottext">項目一覧</div></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>