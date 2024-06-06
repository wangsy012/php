<?php

    error_reporting(0);// 關閉錯誤報告
    session_start();// 開啟Session
    if (!$_SESSION["id"]) {//如Session沒id
        echo "請登入帳號";//網頁印出登入帳號
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";// 三秒後跳到網頁2.login.html
    }
    else{   
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");//資料庫連線
        if (!mysqli_query($conn, "update bulletin set title='{$_POST['title']}',content='{$_POST['content']}',time='{$_POST['time']}',type={$_POST['type']} where bid='{$_POST['bid']}'")){
            echo "修改錯誤"; //如資料庫指令有錯 印出字串
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";//三秒後跳到網頁11.bulletin.php
        }else{
            echo "修改成功，三秒鐘後回到佈告欄列表";//如資料庫指令正確
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";//三秒後跳到網頁11.bulletin.php
        }
    }

?>
