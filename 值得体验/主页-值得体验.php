<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="../useForScenery-detail.js"></script>
    <link rel="stylesheet" href="../css1.css" type="text/css" />
    <!-- <link rel="stylesheet" href="../css2.css" type="text/css" /> -->
    <title>值得体验主页</title>
    <style>
        body{
            margin:0;
            overflow-x: hidden;
        }

        .div4:nth-child(odd){
            padding:50px 200px 50px 200px;
            background-color:rgb(207 207 207 / 20%);
        }
        .div4:nth-child(even){
            padding:50px 200px 50px 200px;
        }
        .text2{
            font-size:20px;
            margin:0;
        }
        .link2{
            font-size:20px;
            color:#0F7462;
            margin:0;
        }
        .link2:active{
            font-size:20px;
            color: red;
        }
        .div41{
            margin:20px 0 0 0;
        }
        .div42{
            margin:20px 0 0 0;
            display: flex;
            justify-content: space-between;
        }
        .div421{
            height:450px;
            width:350px;
        }
    </style>
</head>
<body>  
    <?php include "../导航栏.php" ?>
    <div class="div1">
        <div class="guide"><p>值得体验</p></div>
        <img src="photo/值得体验主页/封面.jpg">       <!--div1图片600*1520-->
    </div>
    <div class="text" style="padding-bottom:50px;">
        现在是感受澳门魅力的最佳时机，<br>
        尽情享受各种各样的澳门美食，<br>
        前往充满特色的购物中心或娱乐场所。<br>
        在这里可以领略中国文化和西方文化的交融，<br>
        有充满中国传统特色的节日，<br>
        也有属于西方文化的纪念活动。<br>
        另外，每年澳门都会举办精彩的活动。<br>
        只需选择下面一个类别，<br>
        就可以开始领略澳门的精彩！
    </div>
    <div class="div4">
        <div class="div21">
            <img src="photo/值得体验主页/美食.png">
            <div class="title">不可错过的美食</div>
        </div>
        <p class="text2">酥碎滋香的蛋挞、岭南广式牛杂......等着你去探索！</p><br>
        <p class="link2"><a href="主页-美食.php" class="link2">美味一触即达></a></p>
        <div class="div41">
            <img src="photo/值得体验主页/美食主页.jpg">
        </div>
    </div>
    <div class="div4">
        <div class="div21">
            <img src="photo/值得体验主页/购物.png">
            <div class="title">购物狂！看这里</div>
        </div>
        <p class="text2">大牌免税，一站式购齐，时尚潮奢、数码家电......尽享美好价格！</p><br>
        <p class="link2"><a href="主页-购物.php" class="link2">血拼场地一键探索></a></p>
        <div class="div41">
            <img src="photo/值得体验主页/购物主页.jpg">
        </div>
    </div>
        <div class="div4">
        <div class="div21">
            <img src="photo/值得体验主页/庆祝.png">
            <div class="title">节日文化 东西碰撞</div>
        </div>
        <p class="text2">感受澳门的特色本土文化</p><br>
        <p class="link2"><a href="主页-节日.php" class="link2">了解更多节日文化></a></p>
        <div class="div41">
            <img src="photo/值得体验主页/节日主页.jpg">
        </div>
    </div>
    <div class="div4" style="margin-bottom:100px;">
        <div class="div21">
            <img src="photo/值得体验主页/酒店.png">
            <div class="title">低价五星酒店、不夜赌场等你探索</div>
        </div>
        <div class="div42">
            <div class="div421" style="cursor:default"><img src="photo/值得体验主页/酒店主页.jpg"><br><br><p class="text2">体验极具特色的酒店优质服务</p><br><a href="主页-酒店.php" class="link2">进一步了解折扣酒店></a></div>
            <div class="div421" style="cursor:default"><img src="photo/值得体验主页/赌场主页.jpg"><br><br><p class="text2">世界三大赌城之一的魅力</p><br><a href="主页-娱乐.php" class="link2">查看推荐赌场></a></div>
            <div class="div421" style="cursor:default"><img src="photo/值得体验主页/其它主页.jpg"><br><br><p class="text2">了解澳门更多的信息</p><br><a href="主页-其它.php" class="link2">探索更多精彩></a></div>
        </div>
    </div>
    <?php include "../页脚.php" ?>
</body>
</html>