<?php
require_once('additem.php');
require_once('getarray.php');
if ($_GET != null && $_GET['dbname'] == 'job_guide') {
    $num = $_GET['number'];
    $dbname = $_GET['dbname'];
    // 取得した$num, $dbnameを関数に渡してアイテムを追加する
    additem($num, $dbname, 'regist_item', 'jobguide.php');
}
else if($_GET != null && $_GET['dbname'] == 'campus_event') {
    $num = $_GET['number'];
    $dbname = $_GET['dbname'];
    // 取得した$num, $dbnameを関数に渡してアイテムを追加する
    additem($num, $dbname, 'regist_item_event', 'campusevent.php');
}
$_GET = null;
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/homemenu.css?<?php echo date('YmdHis'); ?>"/>
        <title>ホームメニュー</title>
    </head>
    <body>
        <div class="block">
            <div class="head"><p class="headtext">ホームメニュー</p></div>
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
                    <div class="maincontent">
                        <div class="job">
                            <p class="jobtext">就職活動</p>
                            <?php  
                            $result = getarray('regist_item');
                            $i = 0;
                            while ($i < count($result)){
                                if ($result[$i][0] != null) {
                                    ?>
                                    <div class="rowitem">
                                        <div class="rowitemarea">
                                            <p class="rowtext"><?php echo "No." . $result[$i][0] . "　" . $result[$i][1];?></p>              
                                            <div class="rowbuttonarea">
                                                <form class="checkform" action="myitemevent.php" method="get">
                                                    <input type="hidden" name="num" value=<?= $result[$i][0] ?> >
                                                    <input type="hidden" name="dbname" value="job_guide">
                                                    <button class="rowcheck" type='submit'>詳細</button>
                                                </form>
                                                <form class="registform" action="deleteitem.php" method="get">
                                                    <input type="hidden" name="number" value=<?=$result[$i][0]?> >
                                                    <input type="hidden" name="dbname" value="regist_item">
                                                    <button class="rowdelete" type='submit'>削除</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                $i++;
                            }
                            $i = 0;
                            ?>
                        </div>
                        <div class="job">
                            <p class="jobtext">学内イベント</p>
                            <?php  
                            $result = getarray('regist_item_event');
                            $i = 0;
                            while ($i < count($result)){
                                if ($result[$i][0] != null) {
                                    ?>
                                    <div class="rowitem">
                                        <div class="rowitemarea">
                                            <p class="rowtext"><?php echo "No." . $result[$i][0] . "　" . $result[$i][1];?></p>              
                                            <div class="rowbuttonarea">
                                                <form class="checkform" action="myitemevent.php" method="get">
                                                    <input type="hidden" name="num" value=<?= $result[$i][0] ?> >
                                                    <input type="hidden" name="dbname" value="campus_event">
                                                    <button class="rowcheck" type='submit'>詳細</button>
                                                </form>
                                                <form class="registform" action="deleteitem.php" method="get">
                                                    <input type="hidden" name="number" value=<?=$result[$i][0]?> >
                                                    <input type="hidden" name="dbname" value="regist_item_event">
                                                    <button class="rowdelete" type='submit'>削除</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                $i++;
                            }
                            $i = 0;
                            ?>
                        </div>
                         
                    </div>
                    <div class="foot">
                        <div class="jump">
                            <button onclick="location.href='#'" class="footbutton"><div class="foottext">TOPに戻る</div></button>
                        </div>
                        <div class="logout">
                            <button onclick="location.href='logout.php'" class="footbutton"><div class="foottext">ログアウト</div></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>