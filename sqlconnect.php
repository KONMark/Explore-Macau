<?php
    error_reporting(0);
    session_start();
    $mysql_server='localhost';
    $mysql_username='root';
    $mysql_password='';  //这里修改
    $mysql_database='project';
    $conn=mysqli_connect($mysql_server,$mysql_username,$mysql_password);

    if(!$conn)
    {
        die('连接失败：' . mysqli_error($sonn));
    }
    mysqli_select_db($conn,$mysql_database);

?>

