<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="../useForScenery-detail.js"></script>
    <link rel="stylesheet" href="../css1.css" type="text/css" />
    <title>氹仔葡韵游</title>
    <style>
        body{
            margin:0;
            overflow-x: hidden;
        }
        #div3{
            padding:0px 0px 100px 0px;
        }
        .div21p{
            padding-left: 200px;
        }
        #div31p{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            padding-top:30px;
            margin-right:200px;
            margin-left:200px;  /*200~-250*/
            overflow:hidden;
        }
        .div311{
            float:left;
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
            opacity: 1;
        }
        #rightimg{
            opacity: 0.5;
        }

    </style>
</head>
<body>
    <?php include "../导航栏.php" ?>
<div class="div1">
  <div class="guide"><p>氹仔葡韵游</p></div>
    <img src="photo/凼仔葡韵游/封面图片.jpg">       <!--div1图片600*1520-->
  </div>
    <div class="text">
        游走氹仔旧城小巷，<br>
        除可欣赏中西历史建筑和名胜古迹，<br>
        寻找隐世地道美食外，<br>
        更可玩转热门的打卡热点，<br>
        体验璀璨夺目的大型综合度假村休闲娱乐，<br>
        来一趟非一般的旅程。
    </div>
    <div id="div3">
        <div class="div21 div21p" >
            <img src="../photo/主页/icon.png">
            <div class="title">最值得浏览的景点</div>
        </div>
        <div id="div31p">
            <div class="div311" onclick='movetodetail("景点-官也街.php?scenery=8")'>
                <img src="photo/凼仔葡韵游/官也街.jpg"><br>     <!--div311图片350*300-->
                <p class="title1">官也街</p>
                <p class="text1">
                    澳门美食集合地，<br>
                    吃货人士的福音！<br>
                    澳门打卡必去
                </p>
            </div>
            <div class="div311" onclick='movetodetail("景点-龙环葡韵.php?scenery=9")'>
                <img src="photo/凼仔葡韵游/龙环葡韵.jpg"><br>       <!--div311图片350*300-->
                <p class="title1">龙环葡韵</p>
                <p class="text1">
                    碧翠凝绿的小型建筑，<br>
                    小清新与葡国风情同具，<br>
                    打卡超出片。
                </p>
            </div>
            <div class="div311" onclick='movetodetail("景点-大潭山眺望台.php?scenery=10")'>
                <img src="photo/凼仔葡韵游/眺望台.jpg"><br>     <!--div311图片350*300-->
                <p class="title1">大潭山眺望台</p>
                <p class="text1">
                    眺望到路氹城区的旅游娱乐酒店，<br>
                    感受金碧辉煌的酒店群。<br>
                    也是观赏日落好地点
                </p>
          </div>
      </div>
    </div>
    <?php include "../页脚.php" ?>
</body>
</html>