<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="../useForScenery-detail.js"></script>
    <link rel="stylesheet" href="../css1.css" type="text/css" />
    <link rel="stylesheet" href="../css2.css" type="text/css" />
    <title>主页-娱乐</title>
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
        <div class="guide"><p>娱乐场所</p></div>
        <img src="photo/娱乐/赌场封面.jpg" style="widtH:1520px;height:600px;">     <!--div1图片600*1520-->
    </div>
    <div class="text" style="padding-bottom:50px;">
    澳门的博彩业在其经济中产生举足轻重的影响，与蒙特卡洛、拉斯维加斯并称为世界三大赌城。<br>
    1847年澳门已有赌博合法化的法令，赌业专营，由政府开设。1961年2月，葡萄牙海外省颁布法令，准许澳门以博彩作为一种“特殊的娱乐”。<br>
    澳门为国内仅有的合法赌博之地，在国家“十二五”规划中，正式写入要将澳门建设成世界旅游休闲中心。截至2016年年底，澳门共有38个幸运博彩娱乐场营运。
    </div>
    <div class="div5">
        <div class="div21">
            <img src="photo/娱乐/扑克.png">
            <div class="title">娱乐场所介绍</div>
        </div>
        <div class="div23" style="padding-top:30px;padding-bottom:20px;text-align:center;">     <!--div231图片350*300-->
            <div class="div231" onclick='movetodetail("详情-娱乐-葡京娱乐场.php")'><img src="photo/娱乐/葡京娱乐场.jpg"><br><p>葡京娱乐场</p></div>
            <div class="div231" onclick='movetodetail("详情-娱乐-威尼斯人娱乐场.php")'><img src="photo/娱乐/威尼斯人娱乐场.jpg"><br><p>威尼斯人娱乐场</p></div>
            <div class="div231" onclick='movetodetail("详情-娱乐-永利娱乐场.php")'><img src="photo/娱乐/永利娱乐场.jpg"><br><p>永利娱乐场</p></div>
        </div>
        <div class="div23" style="padding-top:50px;padding-bottom:20px;text-align:center;">     <!--div231图片350*300-->
            <div class="div231" onclick='movetodetail("详情-娱乐-美高梅金殿娱乐场.php")'><img src="photo/娱乐/美高梅金殿娱乐场.jpg"><br><p>美高梅金殿</p></div>
            <div class="div231" onclick='movetodetail("详情-娱乐-新濠天地.php")'><img src="photo/娱乐/新濠天地娱乐场.jpg"><br><p>新濠天地</p></div>
            <div class="div231" onclick='movetodetail("详情-娱乐-银河娱乐场.php")'><img src="photo/娱乐/澳门银河.jpg"><br><p>澳门银河</p></div>
        </div>
    </div>
    <?php include "../页脚.php" ?>
</body>
</html>