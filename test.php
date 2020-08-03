
<html>
<body>


<script type="text/javascript">
    window.onload=function(){
        var myspan=document.getElementById("myspan");
        var timer=3;
        var flag;
        function daoji(){
            timer=timer-1;
            myspan.innerHTML=timer;
            if(timer==0){
                location.href="http://www.softwhy.com";
                clearInterval(flag);
            }
        }
        flag=setInterval(daoji,1000);
    }
</script>
<div>页面跳转倒计时:<span id="myspan"></span></div>
</body>


</html>
