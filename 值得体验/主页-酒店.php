<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="../useForScenery-detail.js"></script>
    <link rel="stylesheet" href="../css1.css" type="text/css" />
    <link rel="stylesheet" href="../css2.css" type="text/css" />
    <title>主页-酒店</title>
    <style>
        .div231 p{
            font-size:25px;
        }
        .div231{
            height:450px;
            cursor:pointer;
            text-shadow:2px 2px  rgba(0, 0, 0, 0.2);
            box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);
        }
        .div231:active{
            box-shadow: 0px 0px 0px 0px white;
            text-shadow:0px 0px  white;
        }
        .div5{
            padding:50px 200px 50px 200px;
            margin:0 0px 50px 0px;
            background-color:rgb(207 207 207 / 20%);
        }
    </style>
</head>
<body>
    <?php include "../导航栏.php" ?>
    <div class="div1">
        <div class="guide"><p>澳门酒店</p></div>
        <img src="photo/酒店/巴黎人酒店1.jpg" style="widtH:1520px;height:600px;">     <!--div1图片600*1520-->
    </div>
    <div class="text" style="padding-bottom:50px;">
        澳门有许多豪华舒适，地理位置便利且极具特色的酒店，让旅客在一日行程后也能享受到优质的服务。
    </div>
    <div class="div5">
        <div class="div21">
            <img src="photo/酒店/酒店.png">
            <div class="title">酒店介绍</div>
        </div>
        <div class="div23" style="padding-top:30px;padding-bottom:20px;text-align:center;">     <!--div231图片350*300-->
            <div class="div231" onclick='movetodetail("详情-酒店-巴黎人酒店.php")'><img src="photo/酒店/巴黎人酒店2.jpg"><br><p>巴黎人酒店</p></div>
            <div class="div231" onclick='movetodetail("详情-酒店-威尼斯人.php")'><img src="photo/酒店/威尼斯人酒店.jpg"><br><p>威尼斯人酒店</p></div>
            <div class="div231" onclick='movetodetail("详情-酒店-伦敦人酒店.php")'><img src="photo/酒店/伦敦人酒店.png"><br><p>伦敦人酒店</p></div>
        </div>
        <div class="div23" style="padding-top:50px;padding-bottom:20px;text-align:center;">     <!--div231图片350*300-->
            <div class="div231" onclick='movetodetail("详情-酒店-康莱德酒店.php")'><img src="photo/酒店/康莱德酒店.png"><br><p>康莱德酒店</p></div>
            <div class="div231" onclick='movetodetail("详情-酒店-四季酒店.php")'><img src="photo/酒店/四季酒店.jpg"><br><p>四季酒店</p></div>
            <div class="div231" onclick='movetodetail("详情-酒店-新葡京酒店.php")'><img src="photo/酒店/新葡京酒店.jpg"><br><p>新葡京酒店</p></div>
        </div>
    </div>
    <?php include "../页脚.php" ?>
</body>
</html>