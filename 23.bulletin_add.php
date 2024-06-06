<?php
    error_reporting(0); // 關閉錯誤報告
    session_start(); // 開啟Session
    if (!$_SESSION["id"]) {//如Session沒id
        echo "please login first";//網頁印出登入帳號
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";// 三秒後跳到網頁2.login.html

    }
    else{ //有id
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");//資料庫連線
        $sql="insert into bulletin(title, content, type, time) 
        values('{$_POST['title']}','{$_POST['content']}', {$_POST['type']},'{$_POST['time']}')";//資料庫查詢
        if (!mysqli_query($conn, $sql)){//資料庫查詢出錯
            echo "新增命令錯誤";//印出字元
        }
        else{//查詢成功
            echo "新增佈告成功，三秒鐘後回到網頁";//印出字元
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>"; //三秒後跳到網頁11.bulletin.php
        }
    }
?>
