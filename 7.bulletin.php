<?php
    error_reporting(0);
    $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");//這行代碼用於建立與資料庫的連結的變數 $conn
    $result=mysqli_query($conn, "select * from bulletin");//創建一個查詢指令select * from user的變數$result
    echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";//表格的邊框大小為2，依序顯示佈告編號到發佈時間
    while ($row=mysqli_fetch_array($result)){//一個 while 迴圈無法抓取資料就會停止
        echo "<tr><td>";//定義一個表格行，一個表格單元
        echo $row["bid"];//顯示資料庫裡bid的資料
        echo "</td><td>";//</td>前一個表格結束<td>下一個表格開始
        echo $row["type"];//顯示資料庫裡type的資料
        echo "</td><td>"; 
        echo $row["title"];//顯示資料庫裡title的資料
        echo "</td><td>";
        echo $row["content"];//顯示資料庫裡content的資料 
        echo "</td><td>";
        echo $row["time"];//顯示資料庫裡time的資料 
        echo "</td></tr>";
    }
    echo "</table>"//結尾
?>
