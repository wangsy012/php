<?php
   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");//這行代碼用於建立與資料庫的連結的變數 $conn
   #mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user");//創建一個查詢指令select * from user的變數$result
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   $login=FALSE;
   while ($row=mysqli_fetch_array($result)) {//一個 while 迴圈無法抓取資料就會停止
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {
       $login=TRUE;//如果結果為TURE會將 $login的Bool設為TRUE
     }
   } 
   if ($login==TRUE)
     echo "登入成功";//$login的變數是TRUE會在網頁上顯示登入成功
  else
     echo "帳號/密碼 錯誤";//反之會顯示帳號/密碼 錯誤
?>
