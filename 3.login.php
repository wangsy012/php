<?php 
    if (($_POST["id"] == "john") && ($_POST["pwd"]=="john1234"))
        echo "登入成功";/如果id是john pwd是john1234會顯示登入成功
    else
        echo "登入失敗";//反之失敗
?>
