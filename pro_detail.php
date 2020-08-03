<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content=" LiYuxi" />
<meta name="Copyright" content="" />
<meta name="Keywords" content="">   
<meta name="Description" content="">   
<title>产品详情</title>
<script type="text/javascript" src="js/jquery.min.js"></script>
<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="css/styles.css" type="text/css">
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
<!--	<script>-->
<!--        function msg( ){-->
<!--        alert("请先登录");-->
<!--        }-->
<!--	</script>-->
</head>
<body class="color-3">
<?php
session_start();//启用session
$arr=$_SESSION["mycar"];//从session中拿出二维数组
ob_start();//清空缓存必须启动的项
?>
  <div class="wrap bc">
    <div class="title tc pr top">
	  <span class="back-btn"></span>产品介绍
	  <div class="nav-btn">
	    <ul class="pa">
	      <li><a href="list.html">面部护肤</a></li><li><a href="list2.html">彩妆</a></li>
		  <li><a href="list3.html">香水</a></li>
		  <li><a href="list4.html">个人护理</a></li>
		  <li><a href="list5.html">男士专区</a></li>
	    </ul>
	  </div>
	</div>
      <?php
      $id=intval($_GET["page"]);//获取商品
      include ("conn.php");
      $sql="SELECT * FROM `product` WHERE `pid` = '$id'";//查询所有商品$_GET[page]
      $result = mysqli_query($conn,$sql);//执行sql语句，得到一个结果集
      $row=mysqli_fetch_array($result);//遍历结果集

          ?>


      <div class="content">
	 
	  <div class="article mt10 pro-detail">
	    <img src="uploads/<?echo $row["img"];?>"/>
		<p>  
		<? echo $row["pjieshao"];?>
		</p>
<?php
        $a=$_SESSION["username"];
if($a==null)
    echo'<script>
        function msg( ){
        alert("请先登录");
        }
	</script>';

else echo '<script>
        function msg( ){
        
        }
	</script>';

    ?>
          <?php
          $myurl="buy.php?id=$row[pid]&pname=$row[pname]&price=$row[price]";

          if($_SESSION["username"]==null)$url="login1.html";
          else $url="$myurl";//用get附加上商品信息,提交到buy.php处理

		echo '<a href="'.$url.'" onclick="msg()" class="title book-btn mt10 tc">加入购物车</a>'?>
	  </div>
	</div>

	<div class="footer mt10 tc">
	  <p class="phone">Design：曹冬幸 郑雯雯 王蕊</p>
	  <p class="support">版权所有： 北京邮电大学世纪学院</p>
	  <p class="copyright"></p>
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
                     <span class="checkout__text-inner checkout__final-text">￥<? echo $sums ?><i class="fa fa-fw fa-shopping-cart"></i></span>
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
  </div> 
  <script type="text/javascript" src="js/script.js"></script>
<div style="display:none"></div>
</body>
</html>