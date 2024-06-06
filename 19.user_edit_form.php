<html>
    <head><title>修改使用者</title></head>//網頁標題
    <body>
    <?php
    error_reporting(0);//關閉錯誤
    session_start();//開啟 Session
    if (!$_SESSION["id"]) {//如Session沒id 
        echo "請登入帳號";//網頁出現請登入帳號
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";// 三秒後跳網頁2.login.html
    }
    else{   
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");//資料庫連線 
        $result=mysqli_query($conn, "select * from user where id='{$_GET['id']}'");//資料庫查詢
        $row=mysqli_fetch_array($result);
        echo "
        <form method=post action=20.user_edit.php>//創立一個form
            <input type=hidden name=id value={$row['id']}>
            帳號：{$row['id']}<br> //帳號文字
            密碼：<input type=text name=pwd value={$row['pwd']}><p></p>//密碼輸入
            <input type=submit value=修改>//修改按鈕
        </form>//結尾
        ";
    }
    ?>
    </body>
</html>
