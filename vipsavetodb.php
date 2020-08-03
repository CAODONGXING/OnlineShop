<?php
session_start();//启用session
$email=$_POST["email"];
$phone=$_POST["phone"];
$sex=$_POST["sex"];
$birth=$_POST["birth"];
$user=$_SESSION["username"];
$upload_dir=getcwd()."\\images\\";
if(!is_dir($upload_dir))mkdir($upload_dir);

function makefilename(){
    date_default_timezone_set(PRC);
    $ddbh=date("Ymd").date("Gis");
    $filename=$ddbh.".png";
    return $filename;

}
$newfilename=makefilename();
$newfile=$upload_dir.$newfilename;
$link = mysqli_connect('localhost', 'root', '12345678','info_db');//链接数据库
mysqli_select_db($link,"info_db");
mysqli_query($link,'set name utf8');
$sql_update = "UPDATE user_list set email='$email',phone='$phone' ,sex='$sex' ,date='$birth'where username = '$user'";

$res_update = mysqli_query($link,$sql_update);
//$num_insert = mysql_num_rows($res_insert);
if($res_update)
{
    //空语句
}
else
{
    echo "<script>alert('写入个人资料失败！'); history.go(-1);</script>";
}
if(file_exists($_FILES['selfie']['tmp_name'])){
move_uploaded_file($_FILES['selfie']['tmp_name'],$newfile);
    $link = mysqli_connect('localhost', 'root', '12345678','info_db');//链接数据库
    mysqli_select_db($link,"info_db");
    mysqli_query($link,'set name utf8');
    $sql_update = "UPDATE user_list set selfie='$newfilename' where username = '$user'";
    $res_update = mysqli_query($link,$sql_update);
    //$num_insert = mysql_num_rows($res_insert);
    if($res_update)
    {
        echo "<script>alert('上传成功！'); history.go(-1);</script>";
    }
    else
    {
        echo "<script>alert('写入数据库失败！'); history.go(-1);</script>";
    }



}else {$error=$_FILES['selfie']['tmp_name'];
echo"<script>alert('枣糕，出现了意想不到的错误$error')</script>";}