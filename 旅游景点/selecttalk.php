<?php
            include "../sqlconnect.php";

    		//展示评论
            function talk($conn,$scenery){
                $sql = "SELECT * FROM talk where scenery = '$scenery' order by id desc";
                $retval = mysqli_query($conn,$sql);
                if(!$retval){
                    die('搜索评论失败：' . mysqli_error($conn));
                }else{
                    while($row = mysqli_fetch_array($retval,MYSQLI_ASSOC)){
                        echo "<div class='comment'>";
                        echo "<img src='{$row['avatar']}' style='float:left;height:50px;width:50px;padding:20px 0 0 5px;'>";
                        echo '<div class="commentdetail"> ';
                        echo '<div class="commentdetail1">';
                        echo "<div><p style='color:#4095E5'>{$row['name']}</p><p style='color:gray;font-size:15px;'>发布于{$row['time']}</p></div>";
                        echo '<div style="padding-top:10px;"> ';
                        echo "<p style='color:#0F7462;font-weight:bold'>推荐值：{$row['user_num']}分</p>";
                        echo "</div> ";
                        echo "</div>";
                        echo "<div class='commentdetail2'>{$row['content']}</div>";
                        echo '<div class="commentdetail3">';
                        echo "<img src='{$row['photo']}'> ";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                }
            }
        }
        $scenery=$_SESSION['scenery'];
        talk($conn,$scenery);
        ?>