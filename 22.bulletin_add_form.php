<?php
    error_reporting(0);// 關閉錯誤
    session_start(); // 開啟Session
    if (!$_SESSION["id"]) {//如Session沒id
        echo "please login first";//網頁印出登入帳號
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";// 三秒後跳到網頁2.login.html
    }
    else{//有id
        echo "
        <html>//html語法
            <head><title>新增佈告</title></head>//網頁標題
            <body>
                <form method=post action=23.bulletin_add.php>//創建表格
                    標    題：<input type=text name=title><br>
                    內    容：<br><textarea name=content rows=20 cols=20></textarea><br>
                    佈告類型：<input type=radio name=type value=1>系上公告 
                            <input type=radio name=type value=2>獲獎資訊
                            <input type=radio name=type value=3>徵才資訊<br>
                    發布時間：<input type=date name=time><p></p>
                    <input type=submit value=新增佈告> <input type=reset value=清除>
                </form>//結尾
            </body>
        </html>
        ";
    }
?>
