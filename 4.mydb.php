<?php
    #mysqli_connect() 建立資料庫連結
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");//這行代碼用於建立與資料庫的連結的變數 $conn 
    #mysqli_query() 從資料庫查詢資料
    $result=mysqli_query($conn, "select * from user");//創建一個查詢指令select * from user的變數$result
    #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
    $row=mysqli_fetch_array($result);//創建一個從查詢出來的資料一筆一筆抓出來的變數$row
    echo $row["id"] . " " . $row["pwd"]."<br>"; //顯示immust資料庫中的id pwd
    $row=mysqli_fetch_array($result);
    echo $row["id"] . " " . $row["pwd"];
?>
