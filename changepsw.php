<?php

session_start();
ob_start();

$user=$_SESSION["username"];
$psw = $_POST["psw"];
$newpsw = $_POST["newpsw"];
$newpsws = $_POST["newpsws"];
if($newpsw==$newpsws){
$link = mysqli_connect('localhost', 'root', '12345678','info_db');//链接数据库
mysqli_select_db($link,"info_db");
mysqli_query($link,'set name utf8');
$sql_update = "UPDATE user_list set password='$newpsws' where username = '$user'";
$res_update = mysqli_query($link,$sql_update);
if($res_update)
{
    echo "<script>alert('修改密码成功！'); history.go(-1);</script>";
}
else
{
    echo "<script>alert('写入数据库失败！'); history.go(-1);</script>";
}}else echo "<script>alert('两次输入密码不相同！');</script>";