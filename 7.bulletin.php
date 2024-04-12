<?php
    error_reporting(0);
    $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");//這行代碼用於建立與資料庫的連結的變數 $conn
    $result=mysqli_query($conn, "select * from bulletin");//創建一個查詢指令select * from user的變數$result
    echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";
    while ($row=mysqli_fetch_array($result)){
        echo "<tr><td>";
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
    echo "</table>"
?>
