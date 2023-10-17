<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if(isset($_SESSION['state']) && $_SESSION['state']==1){
        $_SESSION['account'];
        $_SESSION['name'];
        $_SESSION['avatar'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://localhost:8081/Project/jQuery.js"></script>
    <script src="http://localhost:8081/Project/jQuery-form.js"></script>
    <title>导航栏</title>
    <script>
    $(document).ready(function(){
        $("#user").click(function(){
            $("#registerclass").fadeToggle(200);
        });
    });
    $(document).ready(function(){
        $("#spot").click(function(){
            $("#spotdiv").fadeToggle(200);
            $("#spotdiv").css("display","flex");
        });
    });
    // $(document).ready(function(){
    //     $("#spotdiv").mouseleave(function(){
    //         $("#spotdiv").fadeOut(200);
    //     });
    // });
    $(document).ready(function(){
        $("#register").click(function(){
            $(".black").fadeIn(200);
            $(".white").fadeIn(200);
            $("#registerclass").fadeOut(200);
            $("#registerbox1").fadeIn(200);
        });
    });
    $(document).ready(function(){
        $(".close").click(function(){
            $(".black").fadeOut(200);
            $(".white").fadeOut(200);
            $("#registerbox1").fadeOut(200);
            $("#registerbox2").fadeOut(200);
        });
    });
    $(document).ready(function(){
        $("#exit").click(function(){
            alert("退出登录！");
        });
    });
    </script>
    <style>
        body{
            margin:0;
        }
        #Navigator{
            height:100%;
            width:100%;
            margin: 0;
            /* background-color: aliceblue; */
            /* border-bottom:0.5px solid gray; */
        }
        #flag{
            height:90px;
            width:150px;
            margin-top:5px;
            margin-left:10px;
            cursor:pointer;
        }
        .column{
            height:100px;
            width:12%;
            /* border:1px solid black; */
            float: right;
            line-height: 100px;
            text-align: center;
            font-size:25px;
            font-weight:bold;
            color:#0F7462;
            cursor:pointer;
        }
        .column:hover{
            background-color: #CFCFCF;
        }
        .column:active{
            color:white;
        }
        #user{
            height:50px;
            width:50px;
            float:right;
            margin:25px;
            margin-right:50px;
            border:1px solid white;
            border-radius: 50%;
            cursor:pointer;
        }
        .close{
            position: absolute;
            right:0;
            top:0;
            cursor:pointer;
        }
        .close:hover{
            background-color: #CFCFCF;
        }
        .close:active{
            background-color: red;
        }
        #registerclass{
            position: absolute;
            right:25px;
            width:100px;
            height:100px;
            border-top:0px;
            background-color: white;
            display:none;
            z-index:1;
            color:#0F7462;
        }
        #registerclass div{
            height:50%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor:pointer;
        }
        #registerclass div:hover{
            background-color:#CFCFCF ;
        }
        #registerclass div:active{
            font-weight: bold;
        }
        .black{
            height:100%;
            width:100%;
            margin-top:-100px;
            background-color:black;
            opacity:0.6;
            position: fixed;
            z-index:2;
            display:none;
        }
        .white{
            height:100%;
            width:100%;
            margin-top:-100px;
            position: fixed;
            z-index:2;
            display:none;
        }
        .registerbox{
            position:fixed;
            top:25%;
            left:25%;
            height:50%;
            width:50%;
            padding:2% 5% 1% 5%;
            background-color: white;
            box-sizing:border-box;
            font-weight: bold;
        }
        .registeritem{
            color:#0F7462;
            margin-bottom:12%;
            font-size:20px;
            text-align:center;
        }
        .registeritem2{
            color:#0F7462;
            margin-bottom:10%;
            font-size:20px;
            text-align:center;
        }
        input[type="text"],input[type="password"]{
            width:40%;
        }
        input[type="button"],input[type="submit"]{
            height:30px;
            width:50px;
            background-color:white;
            border: 1px solid black;
            color:#0F7462;
            font-size:20px;
            font-weight: bold;
            cursor:pointer;
        }
        input[type="button"]:hover,input[type="submit"]:hover{
            background-color:#CFCFCF;
        }
        input[type="button"]:active,input[type="submit"]:active{
            background-color:#0F7462;
            color:white;
        }
        .registersubbox{
            padding-top:5%;
            padding-bottom:3%;
            width:50%;
        }
        #spotdiv{
            height:400px;
            width:800px;
            position:absolute;
            right:200px;
            display: none;
            justify-content: space-evenly;
            background-color:white;
            z-index:1;
        }
        .spotdiv1{
            margin-top:4%;
            height:85%;
            width:30%;
            text-align:center;
            font-weight:bold;
            cursor: pointer;
            display:flex;
            justify-content: center;
            position:relative;
        }
        .spotdiv1:hover .spotdiv1title{
            font-size:25px;
        }
        .spotdiv1:active .spotdiv1title{
            font-size:25px;
            color:#0F7462;  
        }
        .spotdiv1title{
            position:absolute;
            top:50%;
            color:white;
            font-size:20px;
        }
    </style>
</head>
<body>
    <div id="Navigator">
        <img id="flag" src="photo/欢迎页/导航栏.png" onclick="showlocation('主页.php','_self')">
        <?php if(isset($_SESSION['avatar'])){
            echo "<img id='user' src='{$_SESSION['avatar']}'>";
        }else{
            echo "<img id='user' src='photo/欢迎页/用户头像.png'>";
        }
        ?>
        <div class="column" onclick="showlocation('实用信息/实用信息.php','_self')">实用信息</div>
        <div class="column" onclick="showlocation('值得体验/主页-值得体验.php','_self')">值得体验</div>
        <div id="spot" class="column">旅游景点</div>
        <div class="column" onclick="showlocation('主页.php','_self')">主页</div>
    </div>
    <!--显示旅游景点的下划框-->
    <div id="spotdiv">
        <div class="spotdiv1" onclick="showlocation('旅游景点/中区建筑游.php','_self')" style="background-image:url('photo/导航栏/img1.jpg')"><div class="spotdiv1title">中区建筑游</div></div>
        <div class="spotdiv1" onclick="showlocation('旅游景点/望德堂文艺游.php','_self')" style="background-image:url('photo/导航栏/img2.jpg')"><div class="spotdiv1title">望德堂文艺游</div></div>
        <div class="spotdiv1" onclick="showlocation('旅游景点/氹仔葡韵游.php','_self')" style="background-image:url('photo/导航栏/img3.jpg')"><div class="spotdiv1title">氹仔葡韵游</div></div>
    </div>


    <!--显示用户登录和退出登录的下滑栏-->
    <div id="registerclass">
        <div id="register" style="border-bottom:1px solid gray;">用户登录</div>
        <div id="exit">退出登录</div>
    </div>

    <!--黑色背景-->
    <div class="black">
    </div>

    <div class="white">
    <!--登录弹窗-->
    <div id="registerbox1" class="registerbox">
                <img class="close" src="photo/欢迎页/关闭.png">
                <?php if(!isset($_SESSION['state'])){
                ?>
                <form action='http://localhost:8081/Project/login.php' method="post">
                    <div class="registeritem" style="text-align:center;">用户登录</div>
                    <div class="registeritem">账号：&nbsp;<input type="text" name="ID"></div>
                    <div class="registeritem">密码：&nbsp;<input type="password" name="password"></div>
                    <div class="registeritem" style="display:flex;justify-content:center;"><input id="toregister" type="button" value="注册"><div style="width:15%;height:20%;"></div><input type="submit" value="登录" onclick="alert('登录成功!')"></div>
                </form>
                <?php   }else{
                ?>
                    <form action='http://localhost:8081/Project/exit.php' method="post">
                    <div class="registeritem" style="text-align:center;padding-top:25%;font-size:25px;">欢迎您，<?php echo $_SESSION['name'] ?></div>
                    <div class="registeritem" style="display:flex;justify-content:center;padding-top:6.5%"><input id="toregister" type="button" value="注册"><div style="width:15%;height:20%;"></div><input type="submit" value="退出" onclick="alert('退出登录!')"></div>
                    </form>
                <?php }?>
    </div>

        <!--注册弹窗-->
        <div id="registerbox2" class="registerbox" style="display: none;">
            <img class="close" src="photo/欢迎页/关闭.png">
            <div class="registeritem" style="text-align:center;margin-bottom:4%;">用户注册</div>
            <form id="registerform" enctype="multipart/form-data" action='http://localhost:8081/Project/register.php' method="post">
                <div style="display: flex;justify-content: space-between;">  <!--分割头像和注册信息的-->

                    <div class="registersubbox">
                        <div style="height:80%;width:50%;padding:0 10% 0 25%;"><img id="head" style="height:140px;width:200px;"src=""></div>
                        <div class="registeritem2" style="padding:0 10% 0 25%;"><input id="onloadimg" type="file" accept="image/*" onchange="changepic(this)"></div>
                        <input type="hidden" id="avatar" name="register_header" value="">
                    </div>

                    <div class="registersubbox">
                    <div class="registeritem2">账号：&nbsp;<input type="text" name="register_ID"></div>
                    <div class="registeritem2">密码：&nbsp;<input type="password" name="register_password"></div>
                    <div class="registeritem2">昵称：&nbsp;<input type="text" name="register_name"></div>
                    </div>

                </div>
                <div class="registeritem2" style="display:flex;justify-content:center;clear:both;"><input id="returnregister" type="button" value="返回"><div style="width:15%;height:20%;"></div><input id="tosubmit" type="submit" value="注册"></div>
            </form>
        </div>
    </div>
    <script>
        function showlocation(path){
            //获取当前网址，如： http://localhost:8080/ems/Pages/Basic/Person.jsp
            var curWwwPath = window.document.location.href;
            //获取主机地址之后的目录，如： /ems/Pages/Basic/Person.jsp
            var pathName = window.document.location.pathname;
            var pos = curWwwPath.indexOf(pathName);
            //获取主机地址，如： http://localhost:8080
            var localhostPath = curWwwPath.substring(0, pos);
            //获取带"/"的项目名，如：/ems
            var projectName = pathName.substring(0, pathName.substr(1).indexOf('/') + 1);
            //完整根目录
            var menu = localhostPath+projectName+"/"+path;
            window.open(menu,'_self');
        }
        function showimage(path){
            //获取当前网址，如： http://localhost:8080/ems/Pages/Basic/Person.jsp
            var curWwwPath = window.document.location.href;
            //获取主机地址之后的目录，如： /ems/Pages/Basic/Person.jsp
            var pathName = window.document.location.pathname;
            var pos = curWwwPath.indexOf(pathName);
            //获取主机地址，如： http://localhost:8080
            var localhostPath = curWwwPath.substring(0, pos);
            //获取带"/"的项目名，如：/ems
            var projectName = pathName.substring(0, pathName.substr(1).indexOf('/') + 1);
            //完整根目录
            var menu = localhostPath+projectName+"/"+path;
            return menu;
        }
    </script>

    <script>
        document.getElementById("toregister").onclick=toregister;
        document.getElementById("returnregister").onclick=returnregister;
        document.getElementById("tosubmit").onclick=tosubmit;
        document.getElementById("exit").onclick=exit;
        function toregister(){
            document.getElementById("registerbox1").style.display="none";
            document.getElementById("registerbox2").style.display="block";
        }
        function returnregister(){
            document.getElementById("registerbox1").style.display="block";
            document.getElementById("registerbox2").style.display="none";
        }
        function tosubmit(){
            alert("注册成功!");
        }
        function exit(){
            alert("退出登录!")
            window.open("http://localhost:8081/Project/exit.php");
        }
    </script>
    <script>
        function changepic() {  //上传图片
            var reads= new FileReader();
            f=document.getElementById('onloadimg').files[0];
            var imglocation=showimage("photo/头像/"+f['name']);
            console.log(imglocation);       //头像完整路径
            reads.readAsDataURL(f);
            reads.onload=function (e) {
                document.getElementById('head').src=this.result;
            };

            var avater=document.getElementById('avater');
            avatar.value=imglocation;
        }
    </script>
</body>
</html>