<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if(isset($_SESSION['state']) && $_SESSION['state']==1){
        $_SESSION['account'];
        $_SESSION['name'];
        $_SESSION['avatar'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>主页</title>
    <style>
        body{
            margin:0;
            overflow-x: hidden;
        }
        iframe{
            height:100px;
        }
        .div1{
            position:relative;
            height:600px;
            width:100%;
        }
        /* .div1 img{
            margin-top:100px; 
        } */
        .div2{
            padding:50px 200px 50px 200px;
            /* width:100%; */
        }
        .div21{
            padding-bottom:20px;
            height:50px;
        }
        .div21 img{
            float: left;
            height:40px;
            width:40px;
        }
        .div22{
            padding-bottom:20px;
            font-size:20px;
            line-height: 60px;
        }
        .div23{
            /* border:1px solid black; */
            height:400px;
            display:flex;
            flex-direction: row;
            justify-content: space-between;
            text-align:right;
        }
        .div231 img{
            height:350px;
            width:300px;
            /* border:1px solid black; */
        }

        .div24{
            text-align: right;
        }

        /* 文本类别：1.guide 2.text 3.title 4.link */
        .guide{
            position: absolute;
            margin-top: 200px;
            margin-left: 200px;
            height:200px;
            font-size:50px;
            color:white;
            font-weight: bold;
            line-height: 70px;
            letter-spacing:5px;
        }
        .text{
            /* height:300px; */
            padding:100px 200px 50px 200px;
            font-size:25px;
            line-height: 50px;
        }
        .title{
            float:left;
            margin-left: 10px;
            font-size:25px;
            font-weight: bold;
            color:#0F7462;
        }
        .link{
            font-size:20px;
            color:#0F7462
        }
    </style>
</head>
<body>

    <?php include "导航栏.php" ?>
    <div class="div1">
        <div class="guide"><p>探索澳门<br>从此刻开始</p></div>
        <img src="photo/主页/封面.png">     <!--div1图片600*1520-->
    </div>
    <div class="text">
        现在，是探索澳门的最佳时节，电子签注已重新上线，出入境人员仅需持48小时内核酸检测阴性证明即可通关。<br>
        宏伟的葡式建筑、可口的美食、性价比极高的星级酒店，正在等你探索......
    </div>
    <div class="div2">
        <div class="div21">
            <img src="photo/主页/icon.png">
            <div class="title">先探索令人心动的景点</div>
        </div>
        <div class="div22">
            是想与宏伟辉煌的建筑合影？<br>
            还是想体验独特的人文艺术氛围？<br>
            亦或是感受葡国的异域魅力？<br>
            当然是统统都要！
        </div>
        <div class="div23">     <!--div231图片350*300-->
            <div class="div231"><img src="photo/主页/img1.jpg"><br><br><a href="旅游景点/中区建筑游.php" class="link">点击探索建筑之旅></a></div>
            <div class="div231"><img src="photo/主页/img2.jpg"><br><br><a href="旅游景点/望德堂文艺游.php" class="link">点击探索文艺之旅></a></div>
            <div class="div231"><img src="photo/主页/img3.jpg"><br><br><a href="旅游景点/氹仔葡韵游.php" class="link">点击探索葡韵之旅></a></div>
        </div>
    </div>
    <div class="div2" style="background-color:rgb(207 207 207 / 20%);padding-top">
        <div class="div21">
            <img src="photo/主页/icon.png">
            <div class="title">再寻找不可错过的体验</div>
        </div>
        <div class="div22">
            品尝经典美食、<br>血拼免税购物场、<br>入住豪华酒店、<br>在赌场赚个盆满钵满，<br>再去感受澳门独特的风土人情。
        </div>
        <div class="div23">
            <div class="div232"><img src="photo/主页/img4.jpg"><br><br><a href="值得体验/主页-值得体验.php" class="link">点击探索值得体验></a></div>  <!--div232图片 1120*350-->
        </div>
    </div>
    <div class="div2" style="padding-bottom:100px;">
        <div class="div21">
            <img src="photo/主页/icon2.png">
            <div class="title">实用信息！全都收集好啦</div>
        </div>
        <div class="div22">
            交通、出行、防疫信息、医院、签证等问题，不必担心！万事俱备，放心探索。
        </div>
        <div class="div24">
            <a href="实用信息/实用信息.php" class="link">点击查看实用信息></a>
        </div>
    </div>
    <?php include "页脚.php" ?>
</body>
</html>