<?php require 'header.php';?>
<?php
$pdo=new PDO('mysql:host=mysql154.phy.lolipop.lan;dbname=LAA1291599-teamkakizaki;charset=utf8','LAA1291599','kakizaki1234');
$sql=$pdo->prepare('select * from Goods WHERE Goods.id=?');
$sql->execute([$_REQUEST['Goodsid']]);
foreach ($sql as $row) {
    echo  '<p>';
    echo  $row['id'],':';
    echo  $row['goodsname'],':';
    echo  $row['category'],':';
    echo  $row['goodsstatus'],':';
    echo  $row['price'],':';
    echo  $row['image'];
    echo  '</p>';
    if(!in_array($row['id'],$_SESSION['cart'])){
    echo '<form action="intocart.php" method="post">
    <select name = "count">';
    for($i=1;$i<=99;$i++){
        echo '<option value = "',$i,'">',$i,'</option>';
    }
    echo '<input name="cartid" hidden="hidden" value="',$row['id'],'">
        <input name="cartgoodsname" hidden="hidden" value="',$row['goodsname'],'">
        <input name="cartprice" hidden="hidden" value="',$row['price'],'">
        <button type="submit" name="action" value="send">カートに入れる</button>
    </form>';
    }
    else{
        echo 'この商品既にカートに入れた';
    }
    
}
?>
<?php require 'footer.php';?>