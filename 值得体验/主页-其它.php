<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="../useForScenery-detail.js"></script>
    <link rel="stylesheet" href="../css1.css" type="text/css" />
    <link rel="stylesheet" href="../css2.css" type="text/css" />
    <title>主页其它精彩</title>
    <style>
        .div6{
            padding:100px 200px 100px 200px;
            font-size:40px;
            color:#0F7462;
            text-align: center;
        }
        .div61{
            height:500px;
            margin-bottom:100px;
            position:relative;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
        }
        .div61:hover .div61title{
            font-size:60px;
        }
        .div61:active .div61title{
            color:#0F7462;
            font-size:60px;
        }
        .div61title{
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
    <div class="div6">探索澳门更多精彩</div>
    <div class="div61"  onclick='movetodetail("详情-其它-教育.php")'>
        <div class="div61title">教育</div>
        <img src="photo/其它/教育.jpg">
    </div>
    <div class="div61"  onclick='movetodetail("详情-其它-文化遗产.php")'>
        <div class="div61title">文化遗产</div>
        <img src="photo/其它/文化遗产2.jpg">
    </div>
    <div class="div61"  onclick='movetodetail("详情-其它-体育.php")'>
        <div class="div61title">体育</div>
        <img src="photo/其它/体育.jpg">
    </div>
    <?php include "../页脚.php" ?>
</body>
</html>