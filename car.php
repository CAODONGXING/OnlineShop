<?php
session_start();//启用session
$arr=$_SESSION["mycar"];//从session中拿出二维数组
?>
<!--下面将数组里的数据即客户所购买的物品展示出来-->
<table width="600" height="37"border="1">
    <tr>
        <td width="96">商品ID</td>
        <td width="158">商品名称</td>
        <td width="154">商品数量</td>
        <td width="177">删除</td>
    </tr>
    <?php
    foreach($arr as $a)//遍历这个二维数组
    {
        ?>
        <tr>
            <td width="96"><?php echo $a["pid"]?></td><!--物品的id-->
            <td width="158"><?php echo $a["name"]?></td><!--物品的名称-->
            <td width="154"><?php echo $a["num"]?></td><!--物品的数量-->
            <td width="177"><a href="delete.php?id=<?php echo $a["pid"]?>">删除</a></td><!--点击删除超链接到”delete.php”，将物品的id传过去-->
        </tr>
        <?php
    }
    ?>
</table>
</form>
<a href="index.php">返回继续购物</a><!--返回到首页-->