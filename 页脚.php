<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <style>
        .body{
            margin:0;
            overflow-y: hidden;
        }
        .footerdiv{
            padding:50px 200px 100px 200px;
            background-color:rgb(207 207 207 / 20%);
            height:100%;
            margin: 0;
            display: flex;
            justify-content: space-between;
        }
        .footerclass .footertitle{
            font-size:20px;
            font-weight: bold;
        }
        .footertitle{
            margin-bottom:35px;
        }
        .footertitle a{
            color:black;
            cursor:pointer;
        }
        .footerclass .footertext{
            font-size:15px;
        }
        .footerclass a{
            color:black;
            cursor:pointer;
        }
        .footerclass a:active{
            color:red;
        }
    </style>
</head>
<body>
    <div class="footerdiv">
        <div class="footerclass">
            <p class="footertitle">旅游景点</p>
            <p class="footertext"><a onclick='showlocation("旅游景点/中区建筑游.php")'>中区建筑游</a></p>
            <p class="footertext"><a onclick='showlocation("旅游景点/望德堂文艺游.php")'>望德堂文艺游</a></p>
            <p class="footertext"><a onclick='showlocation("旅游景点/氹仔葡韵游.php")'>氹仔葡韵游</a></p>
        </div>
        <div class="footerclass">
            <p class="footertitle"><a onclick='showlocation("值得体验/主页-值得体验.php")'>值得体验</a></p>
            <p class="footertext"><a onclick='showlocation("值得体验/主页-美食.php")'>美食</a></p>
            <p class="footertext"><a onclick='showlocation("值得体验/主页-酒店.php")'>酒店</a></p>
            <p class="footertext"><a onclick='showlocation("值得体验/主页-购物.php")'>购物</a></p>
            <p class="footertext"><a onclick='showlocation("值得体验/主页-节日.php")'>节日活动</a></p>
            <p class="footertext"><a onclick='showlocation("值得体验/主页-娱乐.php")'>娱乐场所</a></p>
            <p class="footertext"><a onclick='showlocation("值得体验/主页-其它.php")'>其它精彩</a></p>
        </div>
        <div class="footerclass">
            <p class="footertitle"><a onclick='showlocation("实用信息/实用信息.php")'>实用信息</a></p>
            <p class="footertext">交通</p>
            <p class="footertext">住宿</p>
            <p class="footertext">防疫</p>
            <p class="footertext">签证</p>
            <p class="footertext">医院</p>
        </div>
        <div class="footerclass">
            <p class="footertitle">用户信息</p>
            <p class="footertext">用户登录</p>
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
    </script>
    </script>
</body>
</html>