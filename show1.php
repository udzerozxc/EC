<?php require 'header.php';?>
<?php
if(isset($_POST['category'])){
$pdo=new PDO('mysql:host=mysql154.phy.lolipop.lan;dbname=LAA1291599-teamkakizaki;charset=utf8','LAA1291599','kakizaki1234');

$sql=$pdo->prepare('SELECT * FROM Goods WHERE Goods.category=? AND Goods.market_id=?');
$sql->execute([$_POST['category'],$_SESSION['market']['id']]);
foreach ($sql as $row) {
    echo  '<p>',$row['goodsname'],'</p>';
    echo  '<form action="detail.php" method="post"><input name="Goodsid" hidden="hidden" value="',$row['id'],'">
    <input type="image" name="marketimg" height="100" width="200" src="Goodsimg/',$row['image'],'" onclick="this.form.submit()"></form>';
}
$pdo=null;

}else{
    echo '<a href="category.php"><br>改めで、カテゴリを選んでください</a>';
    }
?>
<?php require 'footer.php';?>