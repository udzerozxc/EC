<?php require 'header.php';?>
<?php
$pdo=new PDO('mysql:host=mysql154.phy.lolipop.lan;dbname=LAA1291599-teamkakizaki;charset=utf8','LAA1291599','kakizaki1234');
$sql1=$pdo->prepare('INSERT INTO Detail(detail_id,goods_id,goodsname,price,quantity) VALUES(?,?,?,?,?)');
$sql2=$pdo->prepare('INSERT INTO History(client_id,detail_id,date) VALUES(?,?,?)');
$date=date("Y-m-d");$time=date("YmdHis");
$link=$_SESSION['Client']['id'].$time;
//echo $date,'<br>';
//echo $link;
foreach($_SESSION['cart'] as $id=>$cart){
        $sql1->execute([$link,$id,$cart['goodsname'],$cart['price'],$cart['count']]);
    }
$sql2->execute([$_SESSION['Client']['id'],$link,$date]);
unset($_SESSION['cart']);
echo 'ありがとうございます';
?>
<?php require 'footer.php';?>