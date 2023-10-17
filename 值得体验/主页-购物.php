<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="../useForScenery-detail.js"></script>
    <script src="http://localhost:8081/Project/jQuery.js"></script>
    <link rel="stylesheet" href="../css1.css" type="text/css" />
    <link rel="stylesheet" href="../css2.css" type="text/css" />
    <title>主页-购物</title>

    <style>
        .div41{
            margin:30px 0 0 0;
            position:relative;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
        }
        .div41:hover .div41title{
            font-size:50px;
        }
        .div41:active .div41title{
            font-size:50px;
            color:#0F7462;
        }
        .div41title{
            position:absolute;
            font-size:40px;
            color:white;
            font-weight: bold;
            letter-spacing: 6px;
        }
    </style>
</head>
<body>
    <?php include "../导航栏.php" ?>
    <div class="div1">
        <div class="guide"><p>购物中心</p></div>
        <img src="photo/购物/购物封面.jpg">     <!--div1图片600*1520-->
    </div>
    <div class="text" style="padding-bottom:50px;">
        澳门饮食文化源远流长、内涵独特，充分体现了中葡文化的融合及和谐发展。<br>
        葡式澳餐是澳门最具特色的菜系，是经过改良的葡国菜，将葡国的烹饪方法和原料渐渐地融入了非洲、印度、泰国、马来西亚及中国广东菜肴烹调技术中的精华，创造性地制作出独特的菜系。<br>
        除此之外，由于澳门毗邻广东省，且大多数居民来往于两地，因此澳门美食也有大量的粤式美食。
        传统粤菜融合西式烹饪技巧，也形成了澳门的一种特色美食风格。
    </div>
    <div class="div5">
        <div class="div21">
            <img src="photo/购物/购物.png">
            <div class="title">购物中心</div>
        </div>
        <div class="div41" onclick='movetodetail("详情-购物-威尼斯人.php")'>
            <div class="div41title">威尼斯人大运河购物中心</div>
            <img src="photo/购物/威尼斯.jpg">
        </div>
        <div class="div41" onclick='movetodetail("详情-购物-伦敦人.php")'>
            <div class="div41title">伦敦人购物中心</div>
            <img src="photo/购物/伦敦人.jpg">
        </div>
        <div class="div41" onclick='movetodetail("详情-购物-巴黎人.php")'>
            <div class="div41title">巴黎人购物中心</div>
            <img src="photo/购物/巴黎人.jpg">
        </div>
        <div class="div41" onclick='movetodetail("详情-购物-壹号广场.php")'>
            <div class="div41title">壹号广场</div>
            <img src="photo/购物/壹号广场.jpg">
        </div>
        <div class="div41" onclick='movetodetail("详情-购物-新八佰伴.php")'>
            <div class="div41title">新八佰伴</div>
            <img src="photo/购物/新八佰伴.jpg">
        </div>
        <div class="div41" onclick='movetodetail("详情-购物-大三巴街.php")'>
            <div class="div41title">大三巴街</div>
            <img src="photo/购物/大三巴街.jpg">
        </div>
    </div>
    <?php include "../页脚.php" ?>
</body>
</html>