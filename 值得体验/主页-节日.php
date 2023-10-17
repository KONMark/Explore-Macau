<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="../useForScenery-detail.js"></script>
    <link rel="stylesheet" href="../css1.css" type="text/css" />
    <link rel="stylesheet" href="../css2.css" type="text/css" />
    <title>主页-节日</title>
    <style>
        .div43{
            height:400px;
            display:flex;
            flex-direction: row;
            justify-content:space-between;
            padding-top:30px;
            padding-bottom:20px;
            text-align:center;
            
        }
        .div431 img{
            width:450px;
            height:300px;
        }
        .div431 p{
            font-size:25px;
        }
        .div431{
            cursor: pointer;
            text-shadow:2px 2px  rgba(0, 0, 0, 0.2);
            box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);
        }

        .div231 p{
            font-size:25px;
        }
        .div431:active{
            box-shadow: 0px 0px 0px 0px white;
            text-shadow:0px 0px  white;
        }
    </style>
</head>
<body>
    <?php include "../导航栏.php" ?>
    <div class="div1">
        <div class="guide"><p>节日活动</p></div>
        <img src="photo/节日/节日封面.jpg" style="widtH:1520px;height:600px;">     <!--div1图片600*1520-->
    </div>
    <div class="text" style="padding-bottom:50px;">
        澳门特区无论中西节日都有庆祝活动。对于传统民间节日，如农历新年，清明节，端午节等，都有热闹的节日仪式和活动。<br>
        除此之外，澳门也有自己特别的节日活动，将中国传统文化与西方的文化特色相融合，充分体现澳门中西文化结合的特色。<br>
        另外，每年都有一些大型的赛事活动在澳门举办，吸引了大量游客前来参与观赏。
    </div>
    <div class="div5">
        <div class="div21">
            <img src="photo/节日/庆祝.png">
            <div class="title">传统节日</div>
        </div>
        <div class="div43">     <!--div231图片350*300-->
            <div class="div431" onclick='movetodetail("详情-节日-娘妈诞.php")'><img src="photo/节日/妈祖诞.jpg"><br><p>娘妈诞</p></div>
            <div class="div431" onclick='movetodetail("详情-节日-土地诞.php")'><img src="photo/节日/土地诞.jpg"><br><p>土地诞</p></div>
        </div>
        <div class="div43">     <!--div231图片350*300-->
            <div class="div431" onclick='movetodetail("详情-节日-醉龙节.php")'><img src="photo/节日/醉龙节.jpg"><br><p>醉龙节</p></div>
            <div class="div431" onclick='movetodetail("详情-节日-圣像巡游.php")'><img src="photo/节日/圣像巡游.jpg"><br><p>圣像巡游</p></div>
        </div>
    </div>
    <div class="div5" style="padding-top:0;margin-bottom:50px;background-color:white;">
        <div class="div21">
            <img src="photo/节日/庆祝.png">
            <div class="title">精彩活动</div>
        </div>
        <div class="div43">     <!--div231图片350*300-->
            <div class="div431" onclick='movetodetail("详情-节日-澳门烟花.php")'><img src="photo/节日/澳门烟花.jpg"><br><p>澳门国际烟花比赛</p></div>
            <div class="div431" onclick='movetodetail("详情-节日-澳门格兰披治大赛车.php")'><img src="photo/节日/澳门赛车.jpg"><br><p>格兰披治大赛车</p></div>
        </div>
        <div class="div43" style="padding-bottom:0px;">     <!--div231图片350*300-->
            <div class="div431" onclick='movetodetail("详情-节日-澳门美食节.php")'><img src="photo/节日/澳门美食节.jpg"><br><p>澳门美食节</p></div>
            <div class="div431" onclick='movetodetail("详情-节日-澳门音乐节.php")'><img src="photo/节日/澳门国际音乐节.jpg"><br><p>澳门国际音乐节</p></div>
        </div>
    </div>
    <?php include "../页脚.php" ?>
</body>
</html>