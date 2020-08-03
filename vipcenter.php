<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>yebuda会员中心</title>
    <!--[if IE]>
    <!--[if IE 7]><link rel="stylesheet" type="text/css" href="css/ie7.css">
<![endif]-->
    <link rel="stylesheet" type="text/css" href="css/jiazaitoubu.css">
    <link rel="stylesheet" type="text/css" href="css/css.css">
    <script src="js/jquery-1.8.3.min.js"></script>
    <script src="js/index2.js"></script>
    <link rel="stylesheet" type="text/css" href="css/center.css">
    <!--城市联动-->
    <link rel="stylesheet" type="text/css" href="city/city.css">
    <script src="city/Popt.js"></script>
    <script src="city/cityJson.js"></script>
    <script src="city/citySet.js"></script>
    <style type="text/css">
        .con4{
            width: 300px;
            height: auto;
            overflow: hidden;
            margin: 20px auto;
            color: #FFFFFF;
        }
        .zp_nrm_l .btn{
            width: 100%;
            height: 20px;
            line-height: 20px;
            text-align: center;
            background: #d8b49c;
            display: block;
            font-size: 14px;
            border-radius: 5px;
        }
        .upload{
            float: left;
            position: relative;
        }
        .upload_pic{
            display: block;
            width: 100%;
            height: 40px;
            position: absolute;
            left: 0;
            top: 0;
            opacity: 0;
            border-radius: 5px;
        }
        #cvs{
            display:block; width:120px; height:120px; overflow:hidden
        }
    </style>
</head>
<body>
<?php
include ("conn.php");
session_start();
$username=$_SESSION["username"];
$selfie=$_SESSION["selfie"];
$email=$_SESSION["email"];
$phone=$_SESSION["phone"];
$sex=$_SESSION["sex"];
$date=$_SESSION["date"];
$logtime=$_SESSION["logtime"];

?>
<!--top--><!--导航加搜索框--><!--导航--><script>
    window.onload=function(){
        $(".aside").css({display:"none"})
        $(".important").mouseenter(function(){
            $(".aside").css({display:"block"})
        }).mouseleave(function(){
            $(".aside").css({display:"none"})
        })
    }
</script>
<!--当前位置-->
<div class="now_positionm">
    <span>当前位置：</span><a href="index.php">首页></a><a href="#">个人中心</a>
</div>
<!--centers-->
<div class="centers_m">
    <!--清除浮动-->
    <div class="clear_sm"></div>
    <!--left-->
    <div class="centers_ml">
        <!--头像-->
        <div class="center_header">
            <a href="#"><img src="images/<?echo $selfie?>"/></a>
            <em>您好，<font><?echo"$username";?></font></em>
        </div>
        <!--列表go-->
        <div class="centers_listm">
            <div class="centers_listm_one">
                <img src="images/zshy.png"/>
                <em>会员中心</em>
            </div>
            <!--一条开始-->
            <div class="centers_listm_one_in">
                <img src="images/shezhi.png"/>
                <em>资料管理</em>
                <b></b>
            </div>
            <span class="gjszmdm">
                <a href="#" class="center_in_self"><font>信息资料</font></a>
                <a href="#" class="center_in_self"><font>银行卡管理</font></a>
            </span>
            <!--一条开始-->
            <div class="centers_listm_one_in">
                <img src="images/ddgl.png"/>
                <em>订单管理</em>
                <b></b>
            </div>
            <span class="gjszmdm">
                <a onClick="ond()" class="center_in_self"><font>我的订单</font></a>
                <a href="#" class="center_in_self"><font>我的预约</font></a>
                <a href="#" class="center_in_self"><font>评价订单</font></a>
                <a href="#" class="center_in_self"><font>订单投诉</font></a>
            </span>
            <!--一条开始-->
            <div class="centers_listm_one_in">
                <img src="images/suo.png"/>
                <em>账户安全</em>
                <b></b>
            </div>
            <span class="gjszmdm">
                <a onClick="onc()" class="center_in_self"><font>账户安全</font></a>
                <a href="#" class="center_in_self"><font>账户余额</font></a>
                <a href="#" class="center_in_self"><font>我的积分</font></a>
                <a href="#" class="center_in_self"><font>积分兑换</font></a>
                <a href="#" class="center_in_self"><font>我的经验</font></a>
                <a href="#" class="center_in_self"><font>我的优惠卷</font></a>
            </span>
            <!--一条开始-->
            <div class="centers_listm_one_in">
                <img src="images/wdssc.png"/>
                <em>收藏管理</em>
                <b></b>
            </div>
            <span class="gjszmdm">
            	<a href="#" class="center_in_self"><font>店铺收藏</font></a>
                <a href="#" class="center_in_self"><font>菜品收藏</font></a>
            </span>
            <!--一条开始-->
            <div class="centers_listm_one_in">
                <img src="images/myfridend.png"/>
                <em>好友管理</em>
                <b></b>
            </div>
            <span class="gjszmdm">
            	<a href="#" class="center_in_self"><font>我的消息</font></a>
            	<a href="#" class="center_in_self"><font>我的好友</font></a>
            </span>
        </div>
        <script type="text/javascript">
            $(function(){//第一步都得写这个
                $(".centers_listm_one_in").click(function(){
                    $(this).next(".gjszmdm").slideToggle().siblings("gjszmdm").slideUp()
                });
            })
        </script>
    </div>
    <!--right-->
    <div class="centers_mr">
        <h1 class="welcom_tm">欢迎您，yebuda会员     <font><?echo"$username";?></font>！您上次登录时间为 <?echo $logtime;?></h1>
        <!--一条开始-->
        <div class="public_m1">
            <div class="public_m2">资料管理</div>
            <!--照片和内容-->
            <div class="zp_nrm">
                <!--left-->
                <form action="vipsavetodb.php" method="post" enctype="multipart/form-data">
<!--                  con4  zp_nrm_l-->
                    <div class="zp_nrm_l">
<!--                    <img src="images/66f625e1ecfd7ad8244efabaa744aa73.png"/>-->
                    <canvas id="cvs" width="200" height="200"></canvas>
<!--                    <a href="#">更换头像</a>-->
<!--                        <a href="">更换头像</a><input type="file"  id="upload" />-->
                    <span class="btn upload">更换头像<input type="file" name="selfie" class="upload_pic" id="upload" /></span>
            </div>
                <!--right-->
                <div class="zp_nrm_r">
                    <p><em>用户名：</em><i><?echo"$username";?></i></p>
                    <p><em>邀请码：</em><i>cdx14100212</i><font>(推荐有奖)</font></p>
                    <p><em>邮箱：</em><input type="email" name="email" placeholder="<?echo $email;?>"/><a href="#"></a></p>
                    <p><em>手机号：</em><input type="text" name="phone" placeholder="<?echo $phone;?>"/><a href="#"></a></p>
                    <?if($sex=='bm')$a='checked="checked"';
                    else if($sex=='man')$b='checked="checked"';
                    else if($sex=='women')$c='checked="checked"';
//                    $b='checked="checked"';
                        ?>
                    <p><em>性别：</em><input type="radio" name="sex" value="bm" <?echo $a;?> class="sex_m"><i>保密</i><input type="radio" name="sex" value="man" <?echo $b;?> class="sex_m"><i>男</i><input type="radio" name="sex" value="women" <?echo $c;?> class="sex_m"><i>女</i></p>
                    <span class="borth_m">
                    	<em>生日：</em>
                        <input type="date" name="birth" value="<?echo $date;?>"/>
<!--                        <select style=" float:left; height:23px; border:1px solid #eaeaea; margin-top:13px; margin-right:3px">-->
<!--                        	<option>-年-</option>-->
<!--                            <option>1994年</option>-->
<!--                        </select>-->
<!--                        <select style=" float:left; border:1px solid #eaeaea; margin-top:13px; margin-right:3px">-->
<!--                        	<option>-月-</option>-->
<!--                            <option>08月</option>-->
<!--                        </select>-->
<!--                        <select style=" float:left; border:1px solid #eaeaea; margin-top:13px; margin-right:3px">-->
<!--                        	<option>-日-</option>-->
<!--                            <option>14日</option>-->
<!--                        </select>-->
                        <font></font>
                    </span>
<!--                    <p><em>口味偏：</em><input type="radio" name="sexl" class="sex_m"><i>酸</i><input type="radio" name="sexl" class="sex_m"><i>甜</i><input type="radio" name="sexl" class="sex_m"><i>苦</i></p>-->
                    <span><input type="submit" class="public_m3" value="保存修改"></span>
                </div>
                </form>
            </div>
        </div>
        <!--一条开始--><!--订单信息-->
        <div class="public_m1">
            <div id="mm" class="public_m2">订单状态</div>
            <!--各种进度--><!--各种信息-->

            <?php

            $sql="select DISTINCT ddbh from dgroup WHERE user = '$username'";//按用户名查找订单
            $result = mysqli_query($conn,$sql);//执行sql语句，得到一个结果集

            while($row=mysqli_fetch_assoc($result))//okob遍历结果集
            {
                $ddbh = $row["ddbh"];
                $sqlxx = "select * from booked WHERE ddbh = '$ddbh'";//按用户名查找订单
                $results = mysqli_query($conn, $sqlxx);//执行sql语句，得到一个结果集
                $i=true;
                $sum=0;//                订单总价累加器
                while ($rows = mysqli_fetch_assoc($results))//okob遍历结果集
                {
                    if($i){?>
                    <div class="gezhong_xxm">
                        <ul>
                            <li><em>订单号：</em><a href="#"><i><? echo $rows['ddbh']; ?></i></a></li>
                            <li><em>下单时间：</em><a href="#"><? echo $rows['times'];?></a></li>
<!--                          注意数据收货地址的数据库-->
<!--                            <li><em>收货信息：</em><em>--><?// echo $rows['address'];?><!--</em></li>-->
                            收货信息：<? echo $rows['address'];?><br/>
                        </ul>
                        <br/>
                    </div>
                    <!--一个订单信息-->
                    <div class="public_m5">
                        <table border="0" cellspacing="0" cellpadding="0">
                            <tbody>
                            <tr style=" border-bottom:1px solid #000">
                                <th class="olist1">商品名</th>
                                <th class="olist2">单价（元）</th>
                                <th class="olist3">数量</th>
                                <th class="olist4">单位</th>
                                <th class="olist5">小计</th>
                            </tr>
                    <? $i=false;}?>
                            <tr>
                                <td><a href="#"><? echo $rows['pname']; ?></a></td>
                                <td>￥<? echo $rows['price']; ?></td>
                                <td><? echo $rows['amount']; ?></td>
                                <td class="money">件</td>
                                <td>￥<?echo $rows['price']*$rows['amount'] ?></td>
                            </tr>
                    <?$sum=$rows['price']*$rows['amount']+$sum?>
                <?}?>
                            </tbody>
                        </table>
                    </div>

                    <!--合计金额-->
                    <div class="heji_jem">
                        合计金额：<font><?echo $sum?>元</font>
                    </div>
                    <!--订单留言-->
                    <div class="dingcan_lym">
                        <em>订单留言：</em>
                        <p>无</p>
                    </div>
                <br/><br/>
                <hr>
                    <?php

            }

            ?>

        </div>
        <!--一条开始 订单信息结束-->

        <div class="public_m1">
            <div class="public_m2">账户安全</div>
            <div class="public_m4">
                <p><em>您当前的安全等级：</em><i style="color:#fa3b4a">高</i></p>
            </div>
            <!--各种设置-->
            <div class="gezhong_szm">
                <!--一条开始a-->
                <div class="gezhong_szm_in">
                    <b style=" background:url(images/fourm.png) no-repeat 0 0"></b>
                    <span>登录密码<br><em>已设置</em></span>
                    <p>安全性高的密码，可以使账户更安全。建议您定期更换密码。安全性高的密码，可以使账户更安全。建议您定期更换密码。安全性高的密码，可以使账户更安全。建议您定期更换密码。</p>
                    <a href="#">修改密码</a>
                </div>
                <!--一条开始a--><!--一条开始a-->
                <div class="gezhong_szm_in">
                    <b style=" background:url(images/fourm.png) no-repeat 0 -100px"></b>
                    <span>手机绑定<br><em>已设置</em></span>
                    <p>进行手机验证后，可用于接收敏感操作的身份验证信息，以及进行积分消费的验证确认，非常有助于保护您的账号和账户财产安全。</p>
                    <a href="#">修改手机</a>
                </div>
                <!--一条开始a--></div>
        </div>
        <!--一条开始--><!--一条开始--><!--一条开始--><!--一条开始-->
        <form method="post" action="changepsw.php" >
        <div class="public_m1">
            <div class="public_m2" id="nn">登录密码修改</div>
            <!--提示信息-->
            <div class="tip_notem">
                <ul>
                    <li>1.请牢记登录密码</li>
                    <li>2.如果丢失密码，可以通过绑定的手机或邮箱找到</li>
                </ul>
            </div>
            <div class="public_m4">
                <p>
                    <em>原密码：</em>
                    <input type="password" name="psw" value="" style=" height:23px; border:1px solid #eaeaea; width:140px">
                </p>
                <p>
                    <em>新的密码：</em>
                    <input type="password" name="newpsw" style=" height:23px; border:1px solid #eaeaea; width:140px">
                </p>
                <p>
                    <em>确认密码：</em>
                    <input type="password" name="newpsws" style=" height:23px; border:1px solid #eaeaea; width:140px">
                </p>
<!--                <a href="#" class="public_m3">确认修改</a>-->
                <span><input type="submit" class="public_m3" value="确认修改"/></span>

            </div>
        </div>
        </form>
        <!--一条开始--><!--一条开始--><!--一条开始--><!--一条开始--><!--一条开始--><!--一条开始--><!--占空隙--><!--占空隙--><!--一条开始--><!--一条开始--></div>
</div>
<!--页脚-->
<div class="ye_foot">
    <div class="ye_foot_in">
    	<span>
        	<h3>新手上路</h3>
            <a href="#">用户注册</a>
            <a href="#">帮助中心</a>
        </span>
        <span>
        	<h3>订单中心</h3>
            <a href="#">我的订单</a>
            <a href="#">查看订单</a>
        </span>
        <span>
        	<h3>会员中心</h3>
            <a href="#">我的收藏</a>
            <a href="#">我的点评</a>
            <a href="#">我的积分</a>
        </span>
        <span>
        	<h3>合作联系</h3>
            <a href="#">友情链接</a>
            <a href="#">广告服务</a>
            <a href="#">合作联系</a>
        </span>
        <span>
        	<h3>关于我们</h3>
            <a href="#">公司简介</a>
            <a href="#">办公环境</a>
            <a href="#">招贤纳士</a>
        </span>
        <span>
        	<h3>帮助中心</h3>
            <a href="#">账户管理</a>
            <a href="#">我是商家</a>
            <a href="#">我是食客</a>
        </span>
    </div>
    <hr style=" width:1200px; height:1px; background:#8b8b8b;color:#8b8b8b; display:block; margin:0 auto"/>
    <p class="wahaha">CopyRight 2010 订餐在线 www.czzkeji.com 鲁ICP备6842156792号 </p>
</div>
<script type="text/javascript">
    //作为一个事件的函数来被调用
    function onc () {
        var dd = document.getElementById("nn").scrollIntoView(true);     //这个意思其实就是将这个元素到顶部来浏览器窗口的顶部来显示
    }
    function ond () {
        var cc = document.getElementById("mm").scrollIntoView(true);     //这个意思其实就是将这个元素到顶部来浏览器窗口的顶部来显示
    }
</script>
<script>
    //获取上传按钮
    var input1 = document.getElementById("upload");

    if(typeof FileReader==='undefined'){
        //result.innerHTML = "抱歉，你的浏览器不支持 FileReader";
        input1.setAttribute('disabled','disabled');
    }else{
        input1.addEventListener('change',readFile,false);
        /*input1.addEventListener('change',function (e){
         console.log(this.files);//上传的文件列表
         },false); */
    }
    function readFile(){
        var file = this.files[0];//获取上传文件列表中第一个文件
        if(!/image\/\w+/.test(file.type)){
            //图片文件的type值为image/png或image/jpg
            alert("文件必须为图片！");
            return false;
        }
        // console.log(file);
        var reader = new FileReader();//实例一个文件对象
        reader.readAsDataURL(file);//把上传的文件转换成url
        //当文件读取成功便可以调取上传的接口
        reader.onload = function(e){
            // console.log(this.result);//文件路径
            // console.log(e.target.result);//文件路径
            /*var data = e.target.result.split(',');
             var tp = (file.type == 'image/png')? 'png': 'jpg';
             var imgUrl = data[1];//图片的url，去掉(data:image/png;base64,)
             //需要上传到服务器的在这里可以进行ajax请求
             // console.log(imgUrl);
             // 创建一个 Image 对象
             var image = new Image();
             // 创建一个 Image 对象
             // image.src = imgUrl;
             image.src = e.target.result;
             image.onload = function(){
             document.body.appendChild(image);
             }*/

            var image = new Image();
            // 设置src属性
            image.src = e.target.result;
            var max=200;
            // 绑定load事件处理器，加载完成后执行，避免同步问题
            image.onload = function(){
                // 获取 canvas DOM 对象
                var canvas = document.getElementById("cvs");
                // 如果高度超标 宽度等比例缩放 *=
                /*if(image.height > max) {
                 image.width *= max / image.height;
                 image.height = max;
                 } */
                // 获取 canvas的 2d 环境对象,
                var ctx = canvas.getContext("2d");
                // canvas清屏
                ctx.clearRect(0, 0, canvas.width, canvas.height);
                // 重置canvas宽高
                /*canvas.width = image.width;
                 canvas.height = image.height;
                 if (canvas.width>max) {canvas.width = max;}*/
                // 将图像绘制到canvas上
                // ctx.drawImage(image, 0, 0, image.width, image.height);
                ctx.drawImage(image, 0, 0, 200, 200);
                // 注意，此时image没有加入到dom之中
            };
        }
    };
</script>
</body>
</html>


