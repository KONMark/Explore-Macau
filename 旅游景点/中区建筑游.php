<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="../useForScenery-detail.js"></script>
    <link rel="stylesheet" href="../css1.css" type="text/css" />
    <title>中区建筑游</title>
    <style>
        body{
            margin:0;
            overflow-x: hidden;
        }
        .div3{
            padding:0px 0px 100px 0px;
        }
        .div21p{
            padding-left: 200px;
        }
        #div31p{
            padding-top:30px;
            margin-right:200px;
            margin-left:200px;  /*200~-250*/
            width:1900px;
            overflow:hidden;
            /* animation-name:moveright; */
	        animation-duration:0.5s;	/*动画持续时间*/
            animation-iteration-count: 1; 
            animation-timing-function:ease;
            animation-fill-mode:forwards;
        }
        .div311{
            float:left;
            margin-right:150px;
            height:550px;
            width:300px;
            cursor:pointer;
            /* border:1px solid black; */
        }
        .div311:hover{
            background-color:rgb(207 207 207 / 20%);
        }
        .div311:active{
            background-color:rgb(207 207 207 / 50%);
        }
        .arrow{
            padding-top:50px;
            padding-left:200px;
        }
        .arrow img{
            height:80px;
            width:80px;
        }
        .title1{
            font-size: 25px;
            font-weight: bold;
        }
        .text1{
            font-size: 20px;
        }
        #leftimg{
            opacity: 0.5;
            cursor:pointer;
        }
        #rightimg{
            opacity: 1;
            cursor:pointer;
        }
        @keyframes moveleft {
            from {margin-left:-250px;}	
            to {margin-left:200px;}	
        }
        @keyframes moveright {
            from {margin-left:200px;}	
            to {margin-left:-250px;}			
        }
    </style>
</head>
<body>
    
    <?php include "../导航栏.php" ?>
    <div class="div1">
        <div class="guide"><p>中区建筑游</p></div>
        <img src="photo/中区建筑游/图片.jpg">   <!--div1图片600*1520-->
    </div>
    <div class="text">
        体验中葡文化交融的建筑景点，<br>
        感受昔日葡萄牙人聚居澳门的历史文化与内港一带旧式社区情怀，<br>
        探索社区特色商户和怀旧老店，在老建筑物打卡拍照，<br>
        来一趟知性十足的旅程。
    </div>
    <div class="div3">
        <div class="div21 div21p" >
            <img src="../photo/主页/icon.png">
            <div class="title">最值得浏览的景点</div>
        </div>
        <div id="div31p">
            <div class="div311" onclick='movetodetail("景点-大三巴牌坊.php?scenery=1")'>
                <img src="photo/中区建筑游/大三巴.jpg"><br>     <!--div311图片350*300-->
                <p class="title1">大三八牌坊</p>
                <p class="text1">
                    独一无二的东西结合天主教堂石壁<br>
                    已成为澳门的标志之一<br>
                    澳门必打卡景点
                </p>
            </div>
            <div class="div311" onclick='movetodetail("景点-新葡京酒店.php?scenery=2")'>
                <img src="photo/中区建筑游/葡京.jpg"><br>       <!--div311图片350*300-->
                <p class="title1">新葡京酒店</p>
                <p class="text1">
                    金碧辉煌的七星酒店<br>
                    象征澳门蓬勃博彩业<br>
                    澳门地标性建筑
                </p>
            </div>
            <div class="div311" onclick='movetodetail("景点-威尼斯人酒店.php?scenery=3")'>
                <img src="photo/中区建筑游/威尼斯.jpg"><br>     <!--div311图片350*300-->
                <p class="title1">威尼斯人酒店</p>
                <p class="text1">
                    充满特色的威尼斯水乡风格，<br>
                    乘坐小舟，欣赏风景<br>
                    购物餐饮娱乐一站解决
                </p>
            </div>
            <div class="div311" onclick='movetodetail("景点-圣老楞佐教堂.php?scenery=4")'>
                <img src="photo/中区建筑游/教堂.jpg"><br>
                <p class="title1">圣老楞佐教堂</p>
                <p class="text1">
                    巴洛克风格的古典教堂<br>
                    澳门三大古教堂之一</p>
            </div>
        </div>
        <div class="arrow">
            <img id="leftimg" src="photo/中区建筑游/left.png">&nbsp;&nbsp;
            <img id="rightimg" src="photo/中区建筑游/right.png">
        </div>
    </div>
    <?php include "../页脚.php" ?>
    <script>
        document.getElementById("leftimg").onclick=moveleft;
        document.getElementById("rightimg").onclick=moveright;
        var num=1;
        function moveleft(){  //往左移动
            if(num==2){
                num-=1;
                document.getElementById("rightimg").style.opacity=1;
                document.getElementById("leftimg").style.opacity=0.5;
                document.getElementById("div31p").style.animationName="moveleft";
            }
        }
        function moveright(){  //往右移动
            if(num==1){
                num+=1;
                document.getElementById("leftimg").style.opacity=1;
                document.getElementById("rightimg").style.opacity=0.5;
                document.getElementById("div31p").style.animationName="moveright";
            }
        }
    </script>
</body>
</html>