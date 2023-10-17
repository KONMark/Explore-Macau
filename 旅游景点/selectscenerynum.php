<?php
	include "../sqlconnect.php";


    //查看景区评分
    function scenery_num($conn,$scenery){
        $sql = "select scenery_num from scenery where id = '$scenery'";
        $retval =  mysqli_query($conn,$sql);
        if(!$retval)
            {
                die('查看评分失败：' . mysqli_error($conn));
            }else{
                $row = mysqli_fetch_array($retval,MYSQLI_ASSOC);
                return $row['scenery_num'];
            }
    }
    $scenery_num=scenery_num($conn,$scenery);
?>