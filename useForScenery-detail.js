function num1(){
    var h=document.getElementById('num');
    n1.src="photo/景点-大三巴牌坊/评分.png";
    n2.src="photo/景点-大三巴牌坊/icon_评分.png";
    n3.src="photo/景点-大三巴牌坊/icon_评分.png";
    n4.src="photo/景点-大三巴牌坊/icon_评分.png";
    n5.src="photo/景点-大三巴牌坊/icon_评分.png";
    num=1;
    h.value=num;
    return num;
}
function num2(){
    var h=document.getElementById('num');
    n1.src="photo/景点-大三巴牌坊/评分.png";
    n2.src="photo/景点-大三巴牌坊/评分.png";
    n3.src="photo/景点-大三巴牌坊/icon_评分.png";
    n4.src="photo/景点-大三巴牌坊/icon_评分.png";
    n5.src="photo/景点-大三巴牌坊/icon_评分.png";
    num=2;
    h.value=num;
    return num;
}
function num3(){
    var h=document.getElementById('num');
    n1.src="photo/景点-大三巴牌坊/评分.png";
    n2.src="photo/景点-大三巴牌坊/评分.png";
    n3.src="photo/景点-大三巴牌坊/评分.png";
    n4.src="photo/景点-大三巴牌坊/icon_评分.png";
    n5.src="photo/景点-大三巴牌坊/icon_评分.png";
    num=3;
    h.value=num;
    return num;
}
function num4(){
    var h=document.getElementById('num');
    n1.src="photo/景点-大三巴牌坊/评分.png";
    n2.src="photo/景点-大三巴牌坊/评分.png";
    n3.src="photo/景点-大三巴牌坊/评分.png";
    n4.src="photo/景点-大三巴牌坊/评分.png";
    n5.src="photo/景点-大三巴牌坊/icon_评分.png";
    num=4;
    h.value=num;
    return num;
}
function num5(){
    var h=document.getElementById('num');
    n1.src="photo/景点-大三巴牌坊/评分.png";
    n2.src="photo/景点-大三巴牌坊/评分.png";
    n3.src="photo/景点-大三巴牌坊/评分.png";
    n4.src="photo/景点-大三巴牌坊/评分.png";
    n5.src="photo/景点-大三巴牌坊/评分.png";
    num=5;
    h.value=num;
    return num;
}
function moveright(){
    if(num+1!=sum){     
        num+=1;
        img1.src=imgarray[num];
        img2.src=imgarray[num+1];
        if(num+1==sum){
            rightimg.style.opacity=0.5;
        }else{
            rightimg.style.opacity=1;
        }
        if(sum!=0){
            leftimg.style.opacity=1;
        }
    }
}

function moveleft(){
    if(num!=0){
        num-=1;
        img1.src=imgarray[num];
        img2.src=imgarray[num+1];
        if(num==0){
            leftimg.style.opacity=0.5;
        }else{
            leftimg.style.opacity=1;
        }
        if(num+1!=sum){
            rightimg.style.opacity=1;
        }
    }
}
function movetodetail(s){
    window.open(s,"_blank");
}
function getscenery_num(){
    var scenery_num=document.getElementById("scenery_num").value;
    var num_1=document.getElementById("num_1");
    var num_2=document.getElementById("num_2");
    var num_3=document.getElementById("num_3");
    var num_4=document.getElementById("num_4");
    var num_5=document.getElementById("num_5");
    if (scenery_num==0){
        console.log("0");
        num_1.src="photo/景点-大三巴牌坊/icon_评分.png";
        num_2.src="photo/景点-大三巴牌坊/icon_评分.png";
        num_3.src="photo/景点-大三巴牌坊/icon_评分.png";
        num_4.src="photo/景点-大三巴牌坊/icon_评分.png";
        num_5.src="photo/景点-大三巴牌坊/icon_评分.png";
    }
    if (scenery_num==1){
        console.log("1");
        num_1.src="photo/景点-大三巴牌坊/评分.png";
        num_2.src="photo/景点-大三巴牌坊/icon_评分.png";
        num_3.src="photo/景点-大三巴牌坊/icon_评分.png";
        num_4.src="photo/景点-大三巴牌坊/icon_评分.png";
        num_5.src="photo/景点-大三巴牌坊/icon_评分.png";
    }
    if (scenery_num==2){
        console.log("2");
        num_1.src="photo/景点-大三巴牌坊/评分.png";
        num_2.src="photo/景点-大三巴牌坊/评分.png";
        num_3.src="photo/景点-大三巴牌坊/icon_评分.png";
        num_4.src="photo/景点-大三巴牌坊/icon_评分.png";
        num_5.src="photo/景点-大三巴牌坊/icon_评分.png";
    }
    if (scenery_num==3){
        console.log("3");
        num_1.src="photo/景点-大三巴牌坊/评分.png";
        num_2.src="photo/景点-大三巴牌坊/评分.png";
        num_3.src="photo/景点-大三巴牌坊/评分.png";
        num_4.src="photo/景点-大三巴牌坊/icon_评分.png";
        num_5.src="photo/景点-大三巴牌坊/icon_评分.png";
    }
    if (scenery_num==4){
        console.log("4");
        num_1.src="photo/景点-大三巴牌坊/评分.png";
        num_2.src="photo/景点-大三巴牌坊/评分.png";
        num_3.src="photo/景点-大三巴牌坊/评分.png";
        num_4.src="photo/景点-大三巴牌坊/评分.png";
        num_5.src="photo/景点-大三巴牌坊/icon_评分.png";
    }
    if (scenery_num==5){
        console.log("5");
        num_1.src="photo/景点-大三巴牌坊/评分.png";
        num_2.src="photo/景点-大三巴牌坊/评分.png";
        num_3.src="photo/景点-大三巴牌坊/评分.png";
        num_4.src="photo/景点-大三巴牌坊/评分.png";
        num_5.src="photo/景点-大三巴牌坊/评分.png";
    }
}
