<?php require 'header.php';?>
<?php
$pdo=new PDO('mysql:host=mysql154.phy.lolipop.lan;dbname=LAA1291599-teamkakizaki;charset=utf8','LAA1291599','kakizaki1234');
$sql=$pdo->prepare('SELECT * FROM  `Detail` WHERE Detail.detail_id=?');
echo $_REQUEST['detailid'];
$sql->execute([$_REQUEST['detailid']]);
echo '<table><th>商品名</th><th>購入価格</th><th>個数</th>';
foreach ($sql as $row) {
    echo '<tr>';
    echo '<td><a href=detail.php?Goodsid=',$row['goods_id'],'>',$row['goodsname'],'</a></td>';
    echo  '<td>',$row['price'],'</td>';
    echo  '<td>',$row['quantity'],'</td></tr>';
}
echo '</table>';
?>
<?php require 'footer.php';?>