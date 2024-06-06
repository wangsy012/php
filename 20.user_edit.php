<?php

    error_reporting(0);//關閉錯誤
    session_start(); //開啟Session
    if (!$_SESSION["id"]) {//如Session沒id
        echo "請登入帳號";//網頁印出請登入帳號
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";// 三秒後跳到網頁2.login.html
    }
    else{   //有id
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");//資料庫連線
        if (!mysqli_query($conn, "update user set pwd='{$_POST['pwd']}' where id='{$_POST['id']}'")){ //資料庫指令有錯誤
            echo "修改錯誤"; //印出字元
            echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";//跳轉網頁
        }else{
            echo "修改成功，三秒鐘後回到網頁"; //印出字元
            echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";//跳轉網頁
        }
    }

?>
