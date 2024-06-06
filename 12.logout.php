<?php
    session_start();//開啟Session
    unset($_SESSION["id"]);//刪除Session
    echo "登出成功....";//網頁印出成功登出....
    echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";三秒後跳到2.login.html

?>
