<?php
    error_reporting(0);//不顯示錯誤
    session_start();//開始SESSION
    if (!$_SESSION["id"]) {//如沒有SESSION id
        echo "請先登入"; // 請先登入
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";//3秒後回到2.login.html
    }
    else{
                                //點選登出超連結會進入 12.logout.php     點選管理使用者的超連結會進入 18.user.php     點選新增佈告的超連結會進入 22.bulletin_add_form.php
        echo "歡迎, ".$_SESSION["id"]."[<a href=12.logout.php>登出</a>] [<a href=18.user.php>管理使用者</a>] [<a href=22.bulletin_add_form.php>新增佈告</a>]<br>";                   
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");//創一個資料庫連結的變數$conn
        $result=mysqli_query($conn, "select * from bulletin"); //創一個查詢指令 select * from bulletin的變數$result
        echo "<table border=2><tr><td></td><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";//顯示表格邊框為2，表格每格顯示佈告編號到發佈時間
        while ($row=mysqli_fetch_array($result)){ //創一個while迴圈抓不到資料後就會停止
            echo "<tr><td><a href=26.bulletin_edit_form.php?bid={$row["bid"]}>修改</a> 
            <a href=28.bulletin_delete.php?bid={$row["bid"]}>刪除</a></td><td>";//創一個修改跟刪除的超連結會進入26.bulletin_edit_form.php?bid={$row["bid"]} 、28.bulletin_delete.php?bid={$row["bid"]}。 {$row["bid"]}
            echo $row["bid"];
            echo "</td><td>";
            echo $row["type"];
            echo "</td><td>"; 
            echo $row["title"];
            echo "</td><td>";
            echo $row["content"]; 
            echo "</td><td>";
            echo $row["time"];
            echo "</td></tr>";
        }
        echo "</table>";//結尾
    
    }

?>
