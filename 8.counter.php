<?php
    session_start();//開始一個session
    if (!isset($_SESSION["counter"]))//如果session裡沒有設定counter
        $_SESSION["counter"]=1;//將counter設定為1 
    else
        $_SESSION["counter"]++;//反之counter+1 

    echo "counter=".$_SESSION["counter"];
    echo "<br><a href=9.reset_counter.php>重置counter</a>";
?>
