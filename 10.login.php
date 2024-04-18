<?php
   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");//創一個資料庫連結變數$conn
   #mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user"); //創一個查詢指令select * from user的變數$result
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   $login=FALSE;//將$login設定為Bool FALSE
   while ($row=mysqli_fetch_array($result)) {//創一個while迴圈抓不到資料後就會停止
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {//如輸的id和資料庫裏面的id一樣 and 輸入的pwd也和資料庫的pwd一樣
       $login=TRUE;//將$login設定為Bool TRUE
     }
   } 
   if ($login==TRUE) {//如login為TURE
    session_start();//開啟一個SESSION
    $_SESSION["id"]=$_POST["id"];//如果SESSION id = 輸入的id
    echo "登入成功";//網頁顯示 登入成功
    echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";//3秒後跳回 11.bulletin.php
   }

  else{
    echo "帳號/密碼 錯誤";//反之 帳號/密碼 錯誤
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";//3秒後跳回 2.login.html
  }
?>
