<html>
    <head><title>新增使用者</title></head> //網頁標題為新增使用者
    <body>
<?php        
    error_reporting(0);//關閉錯誤報告
    session_start();// 開啟Session
    if (!$_SESSION["id"]) {//如Session沒id
        echo "請登入帳號";//網頁印出請登入帳號
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";// 三秒後跳到網頁2.login.html
    }
    else{    
        echo "
            <form action=15.user_add.php method=post>//出現表單方法使用post送出後會跳到15.user_add.php
                帳號：<input type=text name=id><br>//帳號欄名稱為id
                密碼：<input type=text name=pwd><p></p> //密碼欄名稱為pwd
                <input type=submit value=新增> <input type=reset value=清除>//新增和清除按鈕
            </form>//
        ";
    }
?>
    </body>
</html>
