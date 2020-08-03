<?php
include ("conn.php");
session_start();
$username=$_SESSION["username"];
?>


<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="tx"/><br><br>
    <input type="submit" vale="上传"/>
</form>
<table width="" height=""border="1">
    <tr>
        <td width="">下单时间</td>
        <td width="">商品名</td>
        <td width="">价格</td>
        <td width="">商品数量</td>
        <td width="">地址</td>
    </tr>
<?php

$sql="select * from booked WHERE user = '$username'";//按用户名查找订单
$result = mysqli_query($conn,$sql);//执行sql语句，得到一个结果集
while($row=mysqli_fetch_array($result))//okob遍历结果集
{
    ?>
    <tr>
        <td width=""><?php echo $row["times"]?></td><!--物品的id-->
        <td width=""><?php echo $row["pname"]?></td><!--物品的id-->
        <td width=""><?php echo $row["price"]?></td><!--物品的名称-->
        <td width=""><?php echo $row["amount"]?></td><!--物品的数量-->
        <td width=""><?php echo $row["address"]?></td><!--点击删除超链接到”delete.php”，将物品的id传过去-->
    </tr>
    <?php
}

?>



