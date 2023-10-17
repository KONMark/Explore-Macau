<?php
		include "sqlconnect.php";

		//注册函数
		function registration($conn,$account,$password,$name,$avatar){
			$sql = "SELECT * FROM user where account = '$account'";
			$retval = mysqli_query($conn,$sql);
			$row = mysqli_fetch_array($retval,MYSQLI_ASSOC);
			if($row == NULL)
			{
				$sql1 = "INSERT INTO user ".
					"(account,password,name,avatar)".
					"VALUES ".
					"('$account','$password','$name','$avatar')";
				$retval1 = mysqli_query($conn,$sql1);
				if(!$retval1)
				{	
					Header('Location:http://localhost:8081/Project/主页.php');
				}else{
					Header('Location:http://localhost:8081/Project/主页.php');		//注册成功
				}
			}else{
				Header('Location:http://localhost:8081/Project/主页.php');
			}
		
        }        
        $avatar = $_POST['register_header'];       
        $account=$_POST['register_ID'];
        $password=$_POST['register_password'];
        $name=$_POST['register_name'];

        registration($conn,$account,$password,$name,$avatar);
		// $account=$_POST['ID'];
?>