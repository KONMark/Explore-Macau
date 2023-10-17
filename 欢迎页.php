<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        .div1{
            margin:80px 0px 20px 100px;
            padding-left:65px;
            /* border-style:solid;
            border-width:1px; */
            line-height: 70px;
            font-size: 30px;
            
        }
        .div2{
            margin:20px 0px 0px 100px;
            /* border-style:solid; */
            /* border-width:1px; */
            position: relative;
        }
        #div2img{
            height:200px;
            width:300px;
            margin-left:0px;
            /* animation-name:moveright; */
	        animation-duration:1.5s;	/*动画持续时间*/
            animation-iteration-count: 1; 
            animation-timing-function:ease;
            animation-fill-mode:forwards;
            cursor:pointer;
        }
        .div2 .dashed{
            border-style:dashed;
            border-top-width: 3px;
            border-left-width:0px;
            border-right-width:0px;
            border-bottom-width:0px;
            border-top-color:#0F7462;
            height:0px;
            width:600px;
            margin:-80px 200px 0px 70px;
            position: absolute;
        }
        .div3{
            /* border:1px solid black; */
            margin: 0px 0px 0px 100px;
            padding-left: 100px;
            float: left;
        }
        .div3 img{
            height:100px;
            width:150px;
        }
        .div4{
            height:100px;
            width:250px;
            /* border:1px solid black; */
            float: left;
            padding:30px 0px 30px 0px;
            line-height: 30px;
            font-size: 20px;
            font-weight:bold;
            color:#0F7462;
            box-sizing:border-box;
        }
        @keyframes moveright {
            from {margin-left:0px;}	
            to {margin-left:500px;}		
        }

    </style>
</head>
<body>
    <div class="div1">
        <p>
        日夜轮换间，<br>
        纸醉金迷时。<br>
        澳门已恭候阁下多时了,<br>
        现在，澳门探索之旅，即将开始。
        </p>
    </div>
    <div class='div2'>
        <img src="photo/欢迎页/大三巴图标.png" id="div2img">
        <div class="dashed">&nbsp;</div>
    </div>
    <div class="div3">
        <img src='photo/欢迎页/点击.gif'>
    </div>
    <div class="div4">
        点击大三巴牌坊<br>
        开启您的澳门之旅
    </div>
    <script>
        document.getElementById("div2img").onclick=moverightfunc;
        function moverightfunc(){
            document.getElementById("div2img").style.animationName="moveright";
            setTimeout(toindex,2000);
        }
        function toindex(){
            window.location.replace('主页.php');
        }
        
    </script>
</body>
</html>