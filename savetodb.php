<?php
include ("conn.php");
session_start();//启用session
$arr=$_SESSION["mycar"];//从session中拿出二维数组
$coupon=$_POST["coupon"];
ob_start();//清空缓存必须启动的项

if($arr!=null){
    foreach($arr as $a)//遍历这个二维数组
    {

        $username=$_SESSION["username"];
        $pname=$a["name"];
        $price=$a["price"];
        $sl=$a["pid"];
        $count=$_POST["$sl"];
        $name=$_POST["name"];
        $mobile=$_POST["mobile"];
        $address=$name.$mobile.$_POST["addr1"]." 市 ".$_POST["addr2"]." 区 ".$_POST["addr3"]." 街道 ".$_POST["addr4"];

        date_default_timezone_set(PRC);
        $time=date("Y年m月d日").date("G:i:s");
        $ddbh=date("Ymd").date("Gis");
//        echo $username;
//        echo $pname;
        $sql_insert = "insert into booked (pname,price,amount,address,user,times,ddbh) values('$pname','$price','$count','$address','$username','$time','$ddbh')";
        $insertdd = "insert into dgroup (user,ddbh) values('$username','$ddbh')";
         mysqli_query($conn,$sql_insert);//订单详细
        mysqli_query($conn,$insertdd);//订单编号



    }
    unset($_SESSION["mycar"]);
    if($coupon=='我是小仙女')echo "<script>alert('优惠券使用成功，此订单免单！');location.href='index.php'</script>";
   else {echo "<script>alert('提交成功！');location.href='index.php'</script>";}

//    header("location:index.php");//header函数不允许服务器向浏览器输出任何内容

}else $arr=null;
?>