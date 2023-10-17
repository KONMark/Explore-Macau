<?php       //退出登录
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if(isset($_SESSION['state']))
    {
        // echo "删除";
        unset($_SESSION['state']);
        unset($_SESSION['account']);
        unset($_SESSION['name']);
        unset($_SESSION['avatar']);
    }
    Header("Location:http://localhost:8081/Project/主页.php"); 
?>