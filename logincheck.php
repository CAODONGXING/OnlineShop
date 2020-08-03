<?php
 header("Content-Type: text/html; charset=utf-8");
ob_start();
if(isset($_POST["denglu"]))//没什么用的判断
{
    $user = $_POST["username"];
    $psw = $_POST["password"];
    if($user == "" || $psw == "")
    {
        echo "<script>alert('请输入用户名或密码！'); history.go(-1);</script>";
    }
    else
    {
        $link=mysqli_connect("localhost","root","12345678","info_db");
        //mysqli_select_db($link,"info_db");
        mysqli_query($link,'SET NAMES UTF8');
        $sql = "select username,password,selfie,email,phone,sex,date,logtime from user_list where username = '$_POST[username]' and password = '$_POST[password]'";
        $result = mysqli_query($link,$sql);
        $num = mysqli_num_rows($result);//重复创建写了两个结果集
        if($num)
        {
            $row = mysqli_fetch_array($result);  //将数据以索引方式储存在数组中

            session_start();
           $_SESSION["username"]="$row[0]";
            $_SESSION["selfie"]="$row[2]";
           $_SESSION["email"]="$row[3]";
            $_SESSION["phone"]="$row[4]";
            $_SESSION["sex"]="$row[5]";
            $_SESSION["date"]="$row[6]";
            $_SESSION["logtime"]="$row[7]";
//            写入登陆时间
            date_default_timezone_set(PRC);
            $time=date("Y-m-d ").date("G:i:s");
            $logtime="UPDATE user_list set logtime='$time' where username = '$_POST[username]'";
            $logtimeup=mysqli_query($link,$logtime);
//            写入登陆时间
          echo "尊敬的【".$row[0]."】会员，您已成功登录yebuda美妆网！";
          echo'<div>页面跳转倒计时:<span id="myspan"></span></div>';

//            header('Refresh:3;http://localhost/hzpnew/index.php');

            echo "<a href='index.php'>点击返回</a>";
        }
        else
        {
            echo "<script>alert('用户名或密码不正确！');history.go(-1);</script>";
        }
    }
}
else
{
    echo "<script>alert('提交未成功！'); history.go(-1);</script>";
}
echo"
<script type=\"text/javascript\">
    window.onload=function(){
        var myspan=document.getElementById(\"myspan\");
        var timer=3;
        var flag;
        function daoji(){
            timer=timer-1;
            myspan.innerHTML=timer;
            if(timer==0){
                location.href=\"http://localhost/hzpnew/index.php\";
                clearInterval(flag);
            }
        }
        flag=setInterval(daoji,1000);
    }
</script>

";