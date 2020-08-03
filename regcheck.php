<?php
header("Content-Type: text/html; charset=utf-8");
if(isset($_POST["Submit"]))
{
    $user = $_POST["username"];
    $psw = $_POST["password"];
    $psw_confirm = $_POST["confirm"];
    if($user == "" || $psw == "" || $psw_confirm == "")
    {
        echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";
    }
    else
    {
        if($psw == $psw_confirm)
        {
            $link = mysqli_connect('localhost', 'root', '12345678','info_db');//链接数据库
            mysqli_select_db($link,"info_db");
            mysqli_query($link,'set name utf8');
            $sql = "select username from user_list where username = '$_POST[username]'";
            $result = mysqli_query($link,$sql);
            $num = mysqli_num_rows($result);
            if($num)    //如果已经存在该用户  
            {
                echo "<script>alert('用户名已存在'); history.go(-1);</script>";
            }
            else    //不存在当前注册用户名称  
            {
                $sql_insert = "insert into user_list (username,password) values('$_POST[username]','$_POST[password]')";
                $res_insert = mysqli_query($link,$sql_insert);
                //$num_insert = mysql_num_rows($res_insert);  
                if($res_insert)
                {
                    echo "<script>alert('注册成功！'); history.go(-1);</script>";
                }
                else
                {
                    echo "<script>alert('系统繁忙，请稍候！'); history.go(-1);</script>";
                }
            }
        }
        else
        {
            echo "<script>alert('密码不一致！'); history.go(-1);</script>";
        }
    }
}
else
{
    echo "<script>alert('提交未成功！'); history.go(-1);</script>";
}
?>  