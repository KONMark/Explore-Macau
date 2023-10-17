<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="../useForScenery-detail.js"></script>
    <link rel="stylesheet" href="../css1.css" type="text/css" />
    <link rel="stylesheet" href="../css2.css" type="text/css" />
    <title>美食主页</title>
    <style>
        .div422{
            height:450px;
            width:250px;
        }
        .div42{
            margin:30px 0 0 0;
            display: flex;
            justify-content: space-between;
        }
        .div421{
            cursor:pointer;
            text-shadow:2px 2px  rgba(0, 0, 0, 0.2);
            box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);
        }
        .div421:active{
            box-shadow: 0px 0px 0px 0px white;
            text-shadow:0px 0px  white;
        }
    </style>
</head>
<body>
    <?php include "../导航栏.php" ?>
    <div class="div1">
        <div class="guide"><p>澳门美食</p></div>
        <img src="photo/美食/美食封面.jpg">       <!--div1图片600*1520-->
    </div>
    <div class="text" style="padding-bottom:50px;">
        澳门饮食文化源远流长、内涵独特，充分体现了中葡文化的融合及和谐发展。<br>
        葡式澳餐是澳门最具特色的菜系，是经过改良的葡国菜，将葡国的烹饪方法和原料渐渐地融入了非洲、印度、泰国、马来西亚及中国广东菜肴烹调技术中的精华，创造性地制作出独特的菜系。<br>
        除此之外，由于澳门毗邻广东省，且大多数居民来往于两地，因此澳门美食也有大量的粤式美食。
        传统粤菜融合西式烹饪技巧，也形成了澳门的一种特色美食风格。
    </div>
    <div class="div4">
        <div class="div21">
            <img src="photo/美食/葡国菜.png">
            <div class="title">葡国菜</div>
        </div>
        <div class="div42">
            <div class="div421" onclick='movetodetail("详情-美食-葡国鸡.php")'><img src="photo/美食/葡国鸡1.jpg"><br><p class="text3">葡国鸡</p></div>
            <div class="div421" onclick='movetodetail("详情-美食-非洲鸡.php")'><img src="photo/美食/非洲鸡.jpg"><br><p class="text3">非洲鸡</p></div>
            <div class="div421" onclick='movetodetail("详情-美食-澳门肉干.php")'><img src="photo/美食/澳门肉干.jpg"><br><p class="text3">澳门肉干</p></div>
        </div>
        <div class="div42">
            <div class="div421" onclick='movetodetail("详情-美食-水蟹粥.php")'><img src="photo/美食/水蟹粥.jpg"><br><p class="text3">水蟹粥</p></div>
            <div class="div421" onclick='movetodetail("详情-美食-马介休.php")'><img src="photo/美食/马介休.jpg"><br><p class="text3">马介休</p></div>
            <div class="div421" onclick='movetodetail("详情-美食-葡式焗饭.php")'><img src="photo/美食/葡式焗饭.jpg"><br><p class="text3">葡式焗饭</p></div>
        </div>
    </div>
    <div class="div4" style="margin-bottom:100px;">
        <div class="div21">
            <img src="photo/美食/澳门小吃.png">
            <div class="title">澳门小吃</div>
        </div>
        <div class="div42">
            <div class="div421" onclick='movetodetail("详情-美食-蛋挞.php")'><img src="photo/美食/葡式蛋挞.png"><br><p class="text3">葡式蛋挞</p></div>
            <div class="div421" onclick='movetodetail("详情-美食-木糠布甸.php")'><img src="photo/美食/木糠布甸.jpg"><br><p class="text3">木糠布甸</p></div>
            <div class="div421" onclick='movetodetail("详情-美食-澳门杏仁饼.php")'><img src="photo/美食/澳门杏仁饼.jpg"><br><p class="text3">澳门杏仁饼</p></div>
        </div>
        <div class="div42">
            <div class="div421" onclick='movetodetail("详情-美食-澳门猪扒包.php")'><img src="photo/美食/澳门猪扒包.jpg"><br><p class="text3">澳门猪扒包</p></div>
            <div class="div421" onclick='movetodetail("详情-美食-澳门凤凰卷.php")'><img src="photo/美食/澳门凤凰卷.jpg"><br><p class="text3">澳门凤凰卷</p></div>
            <div class="div421" onclick='movetodetail("详情-美食-咖喱牛杂.php")'><img src="photo/美食/咖喱牛杂.jpg"><br><p class="text3">咖喱牛杂</p></div>
        </div>
    </div>
    <?php include "../页脚.php" ?>
</body>
</html>