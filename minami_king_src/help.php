<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/homemenu.css?<?php echo date('YmdHis'); ?>"/>
        <title>ヘルプページ</title>
    </head>
    <body>
        <div class="block">
            <div class="head"><p class="headtext">ヘルプページ</p></div>
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
                    <div class="helpmaincontent">
                        <div class="screenlayout1">
                            <h2 class="helphead">画面構成について</h2>
                            <div class="helpbodyarea">
                                <p class="sideitembody">・ヘッダーには機能の名前、サイドメニューには主に5つの機能がある。<br>
                                ・右側に主なコンテンツが表示され、下部にページトップに戻るボタンある。<br>
                                ・ホーム画面からのみ、ログアウトが可能。</p>        
                            </div>
                        </div>
                        <div class="screenlayout2">
                            <h2 class="helphead">各ページの役割</h2>
                            <div class="helpbodyarea">
                                <h3 class="sideitemhead">◆ ホーム画面</h3>
                                <p class="sideitembody">・就職活動・学内イベントから自分の登録した項目を閲覧できる。<br>
                                ・詳細内容の確認と、削除が可能。</p>
                            </div>
                            <div class="helpbodyarea">
                                <h3 class="sideitemhead">◆ カレンダー</h3>
                                <p class="sideitembody">・現在の日付と、登録した予定を確認できる。</p>
                            </div>
                            <div class="helpbodyarea">
                                <h3 class="sideitemhead">◆ 就職活動</h3>
                                <p class="sideitembody">・就職活動についての案内を項目ごとに確認できる。<br>
                                ・詳細ボタンを押すと内容を確認でき、登録ボタンを押すとホーム画面に追加できる。</p>
                            </div>
                            <div class="helpbodyarea">
                                <h3 class="sideitemhead">◆ 学内イベント</h3>    
                                <p class="sideitembody">・学校内にて開催されるイベントについての案内を項目ごとに確認できる。<br>
                                ・就職活動と同様に、詳細ボタンを押すと内容を確認でき、登録ボタンを押すとホーム画面に追加できる。</p>
                            </div>
                            <div class="helpbodyarea">
                                <h3 class="sideitemhead">◆ ヘルプ</h3>
                                <p class="sideitembody">・このアプリケーションの機能および役割を確認することができる。</p>
                            </div>
                        </div>
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