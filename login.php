<?php
    include "sqlconnect.php";

    //登录函数
    function login($conn,$account,$password){
        $sql = "SELECT * FROM user where account = '$account'";
        $retval2 = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($retval2,MYSQLI_ASSOC);
        if($row == NULL)
        {
            die('用户名不存在：' . mysqli_error($conn));
        }else{
            if($password==$row['password']){    //登录成功
                $_SESSION['account']=$row['account'];
                $_SESSION['name']=$row['name'];
                $_SESSION['avatar']=$row['avatar'];
                $_SESSION['state']=1;  //state代表已经进入登陆状态
                Header("Location: http://localhost:8081/Project/主页.php"); 
            }else{
                Header("Location: http://localhost:8081/Project/主页.php"); 	
            }
            
        }
    }

    $account=$_POST['ID'];
    $password=$_POST['password'];
    login($conn,$account,$password);

?>