<?php
    include "../sqlconnect.php";

    //计算景区评分
    function user_num($conn,$scenery){
        $sql = "select user_num from talk where scenery = '$scenery'";
        $retval =  mysqli_query($conn,$sql);
        $user_num = 0;
        $length = 0;
        if(!$retval){
            die('搜索评分失败：' . mysqli_error($conn));
        }else{
            while($row = mysqli_fetch_array($retval,MYSQLI_ASSOC)){
                $user_num += $row['user_num'];
                $length += 1;
            }
            $user_num = round($user_num/$length,0);
            return $user_num;
        }
        
    }

    //插入评论
    function insertTalk($conn,$content,$account,$photo,$user_num,$scenery,$avatar,$name){
        $time=date('Y-m-d');
        $sql = "INSERT INTO talk ".
            "(content,account,photo,scenery,user_num,time,avatar,name)".
            "VALUES".
            "('$content','$account','$photo','$scenery','$user_num','$time','$avatar','$name')";
            $retval = mysqli_query($conn,$sql);
            if(!$retval)
            {
                die('无法插入评论数据：' . mysqli_error($conn));
            }else{
                echo '插入评论成功！';
                $user_num1 = user_num($conn,$scenery);  //计算景区评分
                $sql1 = "UPDATE scenery SET scenery_num = '$user_num1' WHERE id = '$scenery'";      //修改景区评分
                $retval1 = mysqli_query($conn,$sql1);
                if(!$retval1){
                    die('无法插入评论数据：' . mysqli_error($conn));
                }else{
                    echo "数据插入成功";
                }
                
            }
    }

    $account = $_SESSION['account'];       
    $scenery=$_POST['scenery'];
    $photo=$_POST['photo'];
    $content=$_POST['content'];
    $name=$_SESSION['name'];
    $user_num=$_POST['user_num'];
    $time=date('Y-m-d');
    $avatar=$_SESSION['avatar'];

    insertTalk($conn,$content,$account,$photo,$user_num,$scenery,$avatar,$name);
    
    switch($scenery){
        case 1: Header("Location:http://localhost:8081/Project/旅游景点/景点-大三巴牌坊.php?scenery=1");break;
        case 2: Header("Location:http://localhost:8081/Project/旅游景点/景点-新葡京酒店.php?scenery=2");break;
        case 3: Header("Location:http://localhost:8081/Project/旅游景点/景点-威尼斯人酒店.php?scenery=3");break;
        case 4: Header("Location:http://localhost:8081/Project/旅游景点/景点-圣老楞佐教堂.php?scenery=4");break;
        case 5: Header("Location:http://localhost:8081/Project/旅游景点/景点-东望洋炮台.php?scenery=5");break;
        case 6: Header("Location:http://localhost:8081/Project/旅游景点/景点-疯堂十号创意园.php?scenery=6");break;
        case 7: Header("Location:http://localhost:8081/Project/旅游景点/景点-卢廉若公园.php?scenery=7");break;
        case 8: Header("Location:http://localhost:8081/Project/旅游景点/景点-官也街.php?scenery=8");break;
        case 9: Header("Location:http://localhost:8081/Project/旅游景点/景点-龙环葡韵.php?scenery=9");break;
        case 10: Header("Location:http://localhost:8081/Project/旅游景点/景点-大潭山眺望台.php?scenery=10");break;
    }
?>

