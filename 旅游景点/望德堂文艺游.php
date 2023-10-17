<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="../useForScenery-detail.js"></script>
    <link rel="stylesheet" href="../css1.css" type="text/css" />
    <title>望德堂文艺游</title>
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
        <div class="guide"><p>望德堂文艺游</p></div>
        <img src="photo/望德堂文艺游/封面.jpg">       <!--div1图片600*1520-->
    </div>
    <div class="text">
        乘坐缆车登上澳门半岛最高的东望洋山，<br>
        轻松漫步本澳的城市绿地。<br>
        山下的望德堂区是一个街道纵横、<br>
        建筑群充满古典风格的街区，<br>
        亦是许多文创艺术团体进驻之地，<br>
        感受这悠然惬意氛围和富有文化保育气息的创意园区。
    </div>
    <div id="div3">
        <div class="div21 div21p" >
            <img src="../photo/主页/icon.png">
            <div class="title">最值得浏览的景点</div>
        </div>
        <div id="div31p">
            <div class="div311"  onclick='movetodetail("景点-东望洋炮台.php?scenery=5")'>
                <img src="photo/望德堂文艺游/东望洋炮台.jpg"><br>     <!--div311图片350*300-->
                <p class="title1">东望洋炮台</p>
                <p class="text1">
                    位于澳门之巅，俯瞰整个澳门半<br>
                    岛，同时也是新葡京酒店的极佳<br>观赏点。
                </p>
            </div>
            <div class="div311" onclick='movetodetail("景点-疯堂十号创意园.php?scenery=6")'>
                <img src="photo/望德堂文艺游/疯堂十号创意园.jpg"><br>       <!--div311图片350*300-->
                <p class="title1">疯堂十号创意园</p>
                <p class="text1">
                如果你想感受澳门的艺术氛围，一定不可以错过。
                </p>
            </div>
            <div class="div311" onclick='movetodetail("景点-卢廉若公园.php?scenery=7")'>
                <img src="photo/望德堂文艺游/卢廉若公园.jpg"><br>     <!--div311图片350*300-->
                <p class="title1">卢廉若公园</p>
                <p class="text1">
                最具中国苏州园林风韵的名园，经常举办画展和音乐会。文艺之旅必经站点。
                </p>
            </div>
        </div>
    </div>
    <?php include "../页脚.php" ?>
</body>
</html>