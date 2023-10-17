<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css1.css" type="text/css" />
    <script type="text/javascript" src="../useForScenery-detail.js"></script>
    <script src="http://localhost:8081/Project/jQuery.js"></script>
    <title>景点-卢廉若公园</title>
    <script>
    $(document).ready(function(){
        $("#commentimg").click(function(){
            $(".showimg").fadeToggle(200);
        });
    });
    </script>
    <style>
        body{
            margin:0;
            overflow-x: hidden;
        }
        /* .title1{
            float:left;
            width:60%;
            font-size:40px;
            font-weight: bold;
            color:#0F7462;
        } */
        .snum{
            float:left;
            text-align: right;
            font-size:25px;
            font-weight: bold;
            color:#0F7462;
        }
        .snum img{
            height:25px;
            width:25px;
        }
        .info{
            padding:0px 200px 20px 200px;
            color:#0F7462;
            font-weight: bold;
            font-size:20px;
            line-height: 30px;
        }
        .info img{
            float:left;
            height:25px;
            width:25px;
        }
        .info p{
            color:black;
            font-weight:normal;
        }
        .div3{
            padding:50px 200px 50px 200px;
        }
        .arrow{
            padding-top:50px;
        }
        .arrow img{
            height:80px;
            width:80px;
        }
        #leftimg{
            opacity: 0.5;
        }
        #rightimg{
            opacity: 1;
        }
        .input{
            position:relative;
            padding:50px 0px 50px 20px;
            background-color: #EFEFEF;
            border-radius:50px;
            height:50px;
        }
        textarea{
            position:absolute;
            top:10%;
            background-color: #EFEFEF;
            border:transparent;
            outline: none;
            height:70px;
            width:95%;
            font-size: 20px;
        }
        .unum{
            margin-left:10px;
            margin-right:5px;
            height:30px;
            width:30px;
            background-color: #0F7462;
            border-radius:50%;
            color:white;
            font-size:10px;
            float:left;
            line-height:30px;  
            text-align: center;
        }
        #issue{
            position:absolute;
            right:0px;
            height:30px;
            width:60px;
            background-color: #0F7462;
            border-radius:25px;
            font-size:10px;
            color:white;
            font-size:10px;
            line-height:30px;  
            text-align:center;
        }
        .comment{
            margin:50px 0 50px 0;
            padding:0px 20px 0px 20px;
            background-color: #EFEFEF;
            border-radius:50px;
            font-size:20px;
        }
        .commentdetail{
            font-size: 20px;
            padding:5px 70px 5px 70px;
        }
        .commentdetail1{
            /* border:1px solid black; */
            display: flex;
            justify-content:space-between;
        }
        .commentdetail2{
            /* border:1px solid black; */
            font-size:15px;
            line-height: 40px;
            padding:0 0 20px 0;
        }
        .commentdetail3{
            padding-bottom:20px;
        }
        #leftimg{
            opacity:0.5;
            cursor:pointer;
        }
        #rightimg{
            opacity:1;
            cursor:pointer;
        }

        .showimg{
            border:1px solid black;
            height:50px;
            background-color:white;
            width:150px;
            position:absolute;
            top:30px;
            padding-top:10px;
            box-sizing:border-box;
            display:none;
            border-radius:5px;
        }
    </style>
</head>
<body>
   
    <?php include "../导航栏.php" ?>
    <?php $scenery=$_SERVER['QUERY_STRING'][-1];        //获取URL带来的景区ID
          $_SESSION['scenery']=$scenery;
      include "selectscenerynum.php";
      echo "<input id='scenery_num' type='hidden' value='{$scenery_num}'>";
?>   
<div class="div1">
  <div class="guide"><p>卢廉若公园</p></div>
    <img src="photo/景点-卢廉若公园/封面.jpg">       <!--div1图片600*1520-->
  </div>
    <div style="padding:100px 200px 0px 200px;display:flex;justify-content: space-between;">
        <div class="title">澳门最美<br>中西结合苏式园林</div>
        <div class="snum">
        <img id="num_1" src="photo/景点-大三巴牌坊/评分.png">
            <img id="num_2" src="photo/景点-大三巴牌坊/评分.png">
            <img id="num_3" src="photo/景点-大三巴牌坊/评分.png">
            <img id="num_4" src="photo/景点-大三巴牌坊/评分.png">
            <img id="num_5" src="photo/景点-大三巴牌坊/评分.png">
            <br>
            推荐值: <?php echo $scenery_num;?>分</div>
    </div>
    <div class="text" style="font-size:20px;">
        卢廉若公园位于澳门半岛的中部，东望洋山的北麓，罗利老马路与荷兰园马路的交界处，总面积1.78公顷。<br>
园内景色如诗如画，俨然一幽雅、秀丽、恬静的江南风光，颇具苏州狮子林的格局，给人一种“小中见大”的感觉，是港澳地区唯一具有苏州园林风韵的公园。<br>
圆内的外墙却采用了葡萄牙人喜用的米黄色，并配以白色线条，12根廊柱也采取哥特式建筑形式，柱顶上修饰的是白色欧式花纹，而濒临水塘的平台上坐椅式栏栅则是中国人喜欢用的鲜艳的大红色，使人体会到这座中国建筑物上反映出来的中西方文化交融的痕迹。
    </div>
    <div class="info">
        <img src="photo/景点-大三巴牌坊/地理位置.png"> 
        <div>&nbsp;地理位置</div>
        <p>澳门罗利老马路10号</p>
    </div>
    <div class="info">
        <img src="photo/景点-大三巴牌坊//开放时间.png"> 
        <div>&nbsp;开放时间</div>
        <p>每日上午6时至晚上12时</p>
    </div>
    <div class="div3">
        <div style="height:150px;">
            <img src="photo/景点-大三巴牌坊/拍照姿势.png" style="height:80px;width:80px;float:left;">
            <div class="title">达人推荐<br>打卡姿势</div>
        </div>
        <div>
            <img id="img1" src="photo/景点-卢廉若公园/推荐1.jpg">      <!--div3下图片初始2张700*525；记得在底下imgarray补充全部图片-->
            <img id="img2" src="photo/景点-卢廉若公园/推荐2.jpg">
            <div class="arrow">
                <img id="leftimg" src="photo/中区建筑游/left.png">&nbsp;&nbsp;
                <img id="rightimg" src="photo/中区建筑游/right.png">
          </div>
      </div>
    </div>
    <div class="div3" style="padding-bottom:100px;">
        <div style="height:150px;">
            <div class="title">好玩！<br>好评如潮&nbsp;</div>
            <img src="photo/景点-大三巴牌坊/评论.png" style="height:100px;width:100px;float:left;">
        </div>
        <!--填写评论-->
        <div class="input">
            <form method="post" action="addcomment.php" enctype="multipart/form-data">        <!--修改1-->
                <textarea rows='3' placeholder="已经探索了么？有什么评论想分享给大家？" name="content"></textarea>
            <div style="position: absolute;bottom:10px;width:90%;">
                <img id="commentimg" src="photo/景点-大三巴牌坊/图片 6.png" style="height:30px;width:30px;float:left;">
                <div class="showimg"><input id="addimg" type="file" accept="image/*" onchange="changepic(this)"></div>     <!--修改2-->
                <input type="hidden" id="photo" name="photo" value="">  <!--上传图片路径-->
                <?php echo "<input name='scenery' type='hidden' value='{$scenery}'>" ?>  <!--景点id上传路径-->
                <div class="unum">评分</div>
                <input id="num" type="hidden" value="" name="user_num">  <!--上传用户评分-->
                <img id="n1" src="photo/景点-大三巴牌坊/icon_评分.png" style=" height:30px;width:30px;">
                <img id="n2" src="photo/景点-大三巴牌坊/icon_评分.png" style=" height:30px;width:30px;">
                <img id="n3" src="photo/景点-大三巴牌坊/icon_评分.png" style=" height:30px;width:30px;">
                <img id="n4" src="photo/景点-大三巴牌坊/icon_评分.png" style=" height:30px;width:30px;">
                <img id="n5" src="photo/景点-大三巴牌坊/icon_评分.png" style=" height:30px;width:30px;">
                <input id="issue" type="submit" value="发布评价" onclick="alert('评论成功!')">
            </div>
            </form>
        </div>

        <!--展示评论-->
        <?php
            include "selecttalk.php";
        ?>
    </div>
    <script>
        var num=0;
        var n1=document.getElementById("n1");
        var n2=document.getElementById("n2");
        var n3=document.getElementById("n3");
        var n4=document.getElementById("n4");
        var n5=document.getElementById("n5");
        n1.onclick=num1;
        n2.onclick=num2;
        n3.onclick=num3;
        n4.onclick=num4;
        n5.onclick=num5;
    </script>
    <script>
        var leftimg=document.getElementById("leftimg");
        var rightimg=document.getElementById("rightimg");
        var img1=document.getElementById("img1");
        var img2=document.getElementById("img2");       //下边imgarray补充全部图片 700*525
        var imgarray=["photo/景点-卢廉若公园/推荐1.jpg","photo/景点-卢廉若公园/推荐2.jpg","photo/景点-卢廉若公园/推荐3.jpg","photo/景点-卢廉若公园/推荐4.jpg","photo/景点-卢廉若公园/推荐5.jpg"]
        var sum=imgarray.length-1;
        var num=0;
        leftimg.onclick=moveleft;
        rightimg.onclick=moveright;
    </script>
    <script>
        getscenery_num();
    </script>
    <script>  
        //修改3
        function changepic() {  //上传图片
            var reads= new FileReader();
            f=document.getElementById('addimg').files[0];
            var imglocation=showimage("旅游景点/photo/景点-卢廉若公园/"+f['name']);
            console.log(imglocation);       //头像完整路径
            reads.readAsDataURL(f);
            var photo=document.getElementById('photo');
            photo.value=imglocation;
        }

    </script>
    <?php include "../页脚.php" ?>
</body>
</html>
