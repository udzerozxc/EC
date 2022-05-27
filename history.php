<?php require 'header.php';?>
<?php
$pdo=new PDO('mysql:host=mysql154.phy.lolipop.lan;dbname=LAA1291599-teamkakizaki;charset=utf8','LAA1291599','kakizaki1234');
$sql=$pdo->prepare('SELECT * FROM  `History` WHERE client_id=? ORDER BY  `History`.`detail_id` DESC ');
$sql->execute([$_SESSION['Client']['id']]);

foreach ($sql as $row) {
    echo  '<p><a href=historydetail.php?detailid=',$row['detail_id'],'>';
    echo  $row['date'];
    echo  '</p>';
}

?>
<?php require 'footer.php';?>