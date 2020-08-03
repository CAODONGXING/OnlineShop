<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/html">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="author" content=" LiYuxi" />
    <meta name="Copyright" content="" />
    <meta name="Keywords" content="">
    <meta name="Description" content="">
    <title>预定</title>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>
<?php
session_start();//启用session
$arr=$_SESSION["mycar"];//从session中拿出二维数组
ob_start();//清空缓存必须启动的项
?>
<div class="wrap bc">
    <div class="title tc pr top">
        <span class="back-btn"></span>商品预定
        <div class="nav-btn">
            <ul class="pa">
                <li><a href="list.html">面部护肤</a></li><li><a href="list2.html">彩妆</a></li>
                <li><a href="list3.html">香水</a></li>
                <li><a href="list4.html">个人护理</a></li>
                <li><a href="list5.html">男士专区</a></li>
            </ul>
        </div>
    </div>
    <form class="book" method="post" action="savetodb.php">
        <input type="hidden" class="countNum" value="10" />
        <?php
        if($arr!=null){
            foreach($arr as $a)//遍历这个二维数组
            {
                ?>

                <div class="info mt10">
                    <h4><lable>商品名称：</lable><span><? echo $a["name"]?></span></h4>
                    <h4><lable>商品单价：</lable><span><?php echo $a["price"]?>元</span></h4>
                    <h4 class="num"><lable class="fl">商品数量：</lable><span class="subtract">-</span><input value="<? echo $a["num"]?>" name="<?php echo $a["pid"]?>" class="count" readonly = "true"/><span class="add">+</span></h4>
                </div>

                <?php
            }}else $arr=null;
        ?>
        <p>预定人<input type="text" name="name" class="name" value="输入您的姓名" /></p>
        <p>手机号<input type="text" name="mobile" class="mobile" value="输入您的手机号" /></p>
        <p>配送至&nbsp;<select name="addr1">
                <option> 请选择</option>
                <option >北京</option>
            </select>&nbsp;市
            <select name="addr2">
                <option >请选择</option>
                <option >朝阳</option>
                <option >海淀</option>
                <option >西城</option>
                <option >东城</option>
                <option >丰台</option>
                <option >房山</option>
                <option >通州</option>
                <option >延庆</option>
            </select>&nbsp;区
            <select name="addr3">
                <option >请选择</option>
                <option >康庄</option>
                <option >八达岭</option>
                <option >永宁</option>
                <option >张家营</option>
            </select>&nbsp;街道
        <input type="text" name="addr4" size="30"/>
        </p>

        <p>优惠码<input type="text" class="mobile" name="coupon" placeholder="请输入优惠码"/></p>
       <a type="submit" class="title submit-btn mt10 tc">提交订单</a>

        <!--<button type="submit" class="login-btn register-btn" id="button" name="denglu">登录</button>-->
    </form>
    <div class="footer mt10 tc">
        <p class="phone">Design：曹冬幸 郑雯雯 王蕊</p>
        <p class="support">版权所有： 北京邮电大学世纪学院</p>
        <p class="copyright">Copyright &copy; 2014.Company name All rights reserved.</p>
    </div>
</div>
<script type="text/javascript" src="js/script.js"></script>
<div style="display:none"></div>
</body>
</html>