<?php
$mysql_server_name = "localhost";
$mysql_username    = "root";
$mysql_password    = "12345678";
$mysql_database    = "yebuda";
$conn = mysqli_connect($mysql_server_name,$mysql_username,$mysql_password)or die("数据库服务器连接错误".mysqli_error());//连接mysql服务器
mysqli_query($conn,"SET NAMES UTF8");//设置字符集
mysqli_select_db($conn,"yebuda");//选择数据库
