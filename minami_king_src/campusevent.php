<?php 
require_once('get_title.php'); 
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/homemenu.css?<?php echo date('YmdHis'); ?>"/>
        <title>学内イベント案内</title>
    </head>
    <body>
        <div class="block">
            <div class="head"><p class="headtext">学内イベントの案内</p></div>
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
                        <?php 
                        $i = 1;
                        $result = get_title('campus_event');
                        foreach ($result as $row){
                        ?>
                            <div class="rowitem">
                                <div class="rowitemarea">
                                    <p class="rowtext"><?=$row?></p>
                                    <div class="rowbuttonarea">
                                        <form class="checkform" action="checkitemevent.php" method="get">
                                            <input type="hidden" name="num" value=<?= $i ?> >
                                            <input type="hidden" name="dbname" value="campus_event">
                                            <button class="rowcheck" type='submit'>詳細</button>
                                        </form>
                                        <form class="registform" action="homemenu.php" method="get">
                                            <input type="hidden" name="number" value=<?= $i ?> >
                                            <input type="hidden" name="dbname" value="campus_event">
                                            <button class="rowregister" type='submit'>登録</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php
                            $i++;
                        }
                        $i = 1;
                        ?>
                    </div>
                    <div class="foot">
                        <div class="jump">
                            <button onclick="location.href='#'" class="footbutton"><div class="foottext">TOPに戻る</div></button>
                        </div>
                        <div class="logout">
                            <button onclick="location.href='homemenu.php'" class="footbutton"><div class="foottext">ホーム</div></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>