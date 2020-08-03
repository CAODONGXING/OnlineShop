<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="Copyright" content="" />
    <meta name="Keywords" content="">
    <meta name="Description" content="">
    <title>首页</title>
<!--    <script type="text/javascript" src="js/jquery.min.js"></script>-->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <link rel="stylesheet" href="css/luara.left.css"/>
<!--    cart-->
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <!--必要样式-->
    <link rel="stylesheet" type="text/css" href="css/checkout-rounded.css" />
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--    cart-->

    <script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body class="color-3">
<?php
session_start();//启用session
$arr=$_SESSION["mycar"];//从session中拿出二维数组
$selfie=$_SESSION["selfie"];
include ("conn.php");
ob_start();//清空缓存必须启动的项
?>

<script src="js/jquery-1.8.3.min.js"></script>
<!--Luara js文件-->
<script src="js/jquery.luara.0.0.1.min.js"></script>
<div class="wrap bc">
    <div class="title tc pr top">
        <span class="back-btn"></span>yebuda
        <?php session_start();
        $a=$_SESSION["username"];
        if($a!=null)echo'<a href="vipcenter.php"><div class="user-logo" style="position:absolute;width:45px;top:7px;right:85px"><img width="40px"height="40px" src="images/'.$selfie.'"/></div></a>';
        else echo'<a href="login1.html"><div class="user-btn" ></div></a>';
        ?>
        <div class="nav-btn">
            <ul class="pa">
                <li><a href="list.html">面部护肤</a></li><li><a href="list2.html">彩妆</a></li>
                <li><a href="list3.html">香水</a></li>
                <li><a href="list4.html">个人护理</a></li>
                <li><a href="list5.html">男士专区</a></li>
            </ul>
        </div>
    </div>
    <div class="logo oh tc mt10">
        <img src="uploads/logo.png" />
    </div>
    <ul class="nav title mt10">
        <li><a href="list.html">面部护肤</a></li><li><a href="list2.html">彩妆</a></li>
        <li><a href="list3.html">香水</a></li>
        <li><a href="list4.html">个人护理</a></li>
        <li><a href="" class="last">男士专区</a></li>
    </ul>
    <!--	<div class="banner oh mt10 pr">
          <ul class="pr">
            <li><a href=""><img src="uploads/banner.png"/></a></li>
            <li><a href=""><img src="uploads/banner1.png"/></a></li>
          </ul>
          <div class="focus pa">
            <span class="pa"></span>
          </div>
        </div>-->
    <!--Luara图片切换骨架begin-->
    <div class="example2">
        <ul>
            <li><a href=""><img src="uploads/banner.png" alt="1"/></a></li>
            <li><a href=""><img src="uploads/banner1.png" alt="2"/></a></li>
            <li><a href=""><img src="uploads/banner3.jpg" alt="3"/></a></li>
            <li><a href=""><img src="uploads/banner4.jpg" alt="4"/></a></li>
        </ul>
        <ol>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ol>
    </div>
    <!--Luara图片切换骨架end-->
    <script>
        $(function(){
            <!--调用Luara示例-->
            $(".example2").luara({width:"650",height:"334",interval:4500,selected:"seleted",deriction:"left"});

        });
    </script>
    <div class="title mt10 pr">
        <h2>随机推荐<a href="list.html" class="more pa"><span class="hidden">更多</span></a></h2>
    </div>
    <div class="products">
        <ul>
            <li><?$p=rand(1,8);
                $sql="SELECT `pname`, `price` FROM `product` WHERE `pid` = '$p'";//查询所有商品$_GET[page]
                $result = mysqli_query($conn,$sql);//执行sql语句，得到一个结果集
                $row=mysqli_fetch_array($result);//遍历结果集

            ?>

                <a href="pro_detail.php?page=<?echo $p;?>"><img src="uploads/product<?echo $p;?>.png"></a>
                <h4><?echo $row["pname"];?></h4>
                <h6><span>￥</span><?echo $row["price"];?></h6>
            </li>
            <li><?$p=rand(9,16);
                $sql="SELECT `pname`, `price` FROM `product` WHERE `pid` = '$p'";//查询所有商品$_GET[page]
                $result = mysqli_query($conn,$sql);//执行sql语句，得到一个结果集
                $row=mysqli_fetch_array($result);//遍历结果集

                ?>
                <a href="pro_detail.php?page=<?echo $p;?>"><img src="uploads/product<?echo $p;?>.png"></a>
                <h4><?echo $row["pname"];?></h4>
                <h6><span>￥</span><?echo $row["price"];?></h6>
            </li>
            <li><?$p=rand(17,24);
                $sql="SELECT `pname`, `price` FROM `product` WHERE `pid` = '$p'";//查询所有商品$_GET[page]
                $result = mysqli_query($conn,$sql);//执行sql语句，得到一个结果集
                $row=mysqli_fetch_array($result);//遍历结果集

                ?>
                <a href="pro_detail.php?page=<?echo $p;?>"><img src="uploads/product<?echo $p;?>.png"></a>
                <h4><?echo $row["pname"];?></h4>
                <h6><span>￥</span><?echo $row["price"];?></h6>
            </li>
            <li><?$p=rand(25,36);
                $sql="SELECT `pname`, `price` FROM `product` WHERE `pid` = '$p'";//查询所有商品$_GET[page]
                $result = mysqli_query($conn,$sql);//执行sql语句，得到一个结果集
                $row=mysqli_fetch_array($result);//遍历结果集

                ?>
                <a href="pro_detail.php?page=<?echo $p;?>"><img src="uploads/product<?echo $p;?>.png"></a>
                <h4><?echo $row["pname"];?></h4>
                <h6><span>￥</span><?echo $row["price"];?></h6>
            </li>
            <li><?$p=rand(37,40);
                $sql="SELECT `pname`, `price` FROM `product` WHERE `pid` = '$p'";//查询所有商品$_GET[page]
                $result = mysqli_query($conn,$sql);//执行sql语句，得到一个结果集
                $row=mysqli_fetch_array($result);//遍历结果集

                ?>
                <a href="pro_detail.php?page=<?echo $p;?>"><img src="uploads/product<?echo $p;?>.png"></a>
                <h4><?echo $row["pname"];?></h4>
                <h6><span>￥</span><?echo $row["price"];?></h6>
            </li>
            <li><?$p=rand(41,48);
                $sql="SELECT `pname`, `price` FROM `product` WHERE `pid` = '$p'";//查询所有商品$_GET[page]
                $result = mysqli_query($conn,$sql);//执行sql语句，得到一个结果集
                $row=mysqli_fetch_array($result);//遍历结果集

                ?>
                <a href="pro_detail.php?page=<?echo $p;?>"><img src="uploads/product<?echo $p;?>.png"></a>
                <h4><?echo $row["pname"];?></h4>
                <h6><span>￥</span><?echo $row["price"];?></h6>
            </li>
        </ul>
    </div>
    <!--    cart body-->
    <div class="container">

        <div class="dummy-fixed">
            <svg onclick="gourl()" class="checkout__icon" width="30px" height="30px" viewBox="0 0 35 35">
                <path d="M33.623,8.004c-0.185-0.268-0.486-0.434-0.812-0.447L12.573,6.685c-0.581-0.025-1.066,0.423-1.091,1.001 c-0.025,0.578,0.423,1.065,1.001,1.091L31.35,9.589l-3.709,11.575H11.131L8.149,4.924c-0.065-0.355-0.31-0.652-0.646-0.785 L2.618,2.22C2.079,2.01,1.472,2.274,1.26,2.812s0.053,1.146 0.591,1.357l4.343,1.706L9.23,22.4c0.092,0.497,0.524,0.857,1.03,0.857 h0.504l-1.15,3.193c-0.096,0.268-0.057,0.565,0.108,0.798c0.163,0.232,0.429,0.37,0.713,0.37h0.807 c-0.5,0.556-0.807,1.288-0.807,2.093c0,1.732,1.409,3.141,3.14,3.141c1.732,0,3.141-1.408,3.141-3.141c0-0.805-0.307-1.537-0.807-2.093h6.847c-0.5,0.556-0.806,1.288-0.806,2.093c0,1.732,1.407,3.141,3.14,3.141 c1.731,0,3.14-1.408,3.14-3.141c0-0.805-0.307-1.537-0.806-2.093h0.98c0.482,0,0.872-0.391,0.872-0.872s-0.39-0.873-0.872-0.873 H11.675l0.942-2.617h15.786c0.455,0,0.857-0.294,0.996-0.727l4.362-13.608C33.862,8.612,33.811,8.272,33.623,8.004z M13.574,31.108c-0.769,0-1.395-0.626-1.395-1.396s0.626-1.396,1.395-1.396c0.77,0,1.396,0.626,1.396,1.396S14.344,31.108,13.574,31.108z M25.089,31.108c-0.771,0-1.396 0.626-1.396-1.396s0.626-1.396,1.396-1.396c0.77,0,1.396,0.626,1.396,1.396 S25.858,31.108,25.089,31.108z"/>
            </svg>
            <!--        购物车价格计算器-->
            <?
            $sums=0;
            if($arr!=null){
            foreach($arr as $a)//遍历这个二维数组
            {
                $sums=$a["num"]*$a["price"]+$sums;
            }}else $arr=null;
            ?>
            <div class="checkout">
                <a class="checkout__button" href="#"><!-- Fallback location -->
                    <span class="checkout__text">
							<span class="checkout__text-inner checkout__initial-text">购物车</span>
                        <span class="checkout__text-inner checkout__final-text" >￥<? echo $sums ?><i class="fa fa-fw fa-shopping-cart"></i></span>
						</span>
                </a>
                <div class="checkout__order">
                    <div class="checkout__order-inner">
                        <table class="checkout__summary">
                            <thead>
                            <tr><th>商品</th><th>数量</th><th>特惠价</th><th>&nbsp;</th></tr>
                            </thead>
                            <tbody>
                            <?php
                            if($arr!=null){
                            foreach($arr as $a)//遍历这个二维数组
                            {
                                ?>

                                <tr><td><? echo $a["name"]?><span>绝对正品</span></td><td><? echo $a["num"]?></td><td>￥<?php echo $a["price"]?></td><td><a href="delete.php?id=<?php echo $a["pid"]?>"><button class="checkout__action"><i class="icon fa fa-trash"></i></button></a></td></tr>

                                <?php
                            }}else $arr=null;
                            ?>
                            <!--                        <tr><td>Imitations <span>Mark Lanegan</span></td><td>1</td><td>$12.90</td><td><button class="checkout__action"><i class="icon fa fa-trash"></i></button></td></tr>-->
                            <!--                        <tr><td>Out Of Exile <span>Audioslave</span></td><td>1</td><td>$15.90</td><td><button class="checkout__action"><i class="icon fa fa-trash"></i></button></td></tr>-->
                            <!--                        <tr><td>Cure For Pain <span>Morphine</span></td><td>1</td><td>$11.90</td><td><button class="checkout__action"><i class="icon fa fa-trash"></i></button></td></tr>-->
                            </tbody>
                        </table><!-- /checkout__summary -->
                        <button class="checkout__close checkout__cancel"><i class="icon fa fa-fw fa-close"></i>Close</button>
                    </div><!-- /checkout__order-inner -->
                </div><!-- /checkout__order -->
            </div><!-- /checkout -->
            <div class="checkout__count"><?echo count($arr);?></div>
        </div>

    </div><!-- /container -->

    <script type="text/javascript" src="js/classie.js"></script>
    <script type="text/javascript">
        (function() {
            var dummy = document.getElementById('dummy-grid');
            [].slice.call( document.querySelectorAll( '.checkout' ) ).forEach( function( el ) {
                var openCtrl = el.querySelector( '.checkout__button' ),
                    closeCtrl = el.querySelector( '.checkout__cancel' );

                openCtrl.addEventListener( 'click', function(ev) {
                    ev.preventDefault();
                    classie.add( el, 'checkout--active' );
                    classie.add( dummy, 'dummy-grid--highlight' );
                } );

                closeCtrl.addEventListener( 'click', function() {
                    classie.remove( el, 'checkout--active' );
                    classie.remove( dummy, 'dummy-grid--highlight' );
                } );
            } );
        })();
    </script>
<!--    链接跳转至预定界面-->
    <script>
        function gourl() {
            location.href="book.php";
        }
  </script>
    <!--    catr body-->
    <div class="links mt10 oh cb">
        <ul class="tc">
            <li><a href="list.html">面部护肤</a></li>
            <li><a href="list2.html">彩妆</a></li>
            <li><a href="list3.html">香水</a></li>
            <li><a href="list4.html">个人护理</a></li>
            <li><a href="list5.html">男士专区</a></li>
            <li><a href="list6.html">孕婴护理</a></li>
        </ul>
    </div>

    <div class="footer mt10 tc">
        <p class="phone">Design：曹冬幸 郑雯雯 王蕊</p>
        <p class="support">版权所有： 北京邮电大学世纪学院</p>

    </div>

</div>
<script type="text/javascript" src="js/script.js"></script>
<div style="display:none"></div>
</body>
</html>