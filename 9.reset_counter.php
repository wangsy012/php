<?php
    session_start();//開始SESSION
    unset($_SESSION["counter"]);//刪除叫做counter的SESSION
    echo "counter重置成功....";//網頁顯示 counter重置成功
    echo "<meta http-equiv=REFRESH content='2; url=8.counter.php'>";//2秒後進入 8.counter.php

?>
