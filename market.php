<?php require 'header.php';?>
<?php
$pdo=new PDO('mysql:host=mysql154.phy.lolipop.lan;dbname=LAA1291599-teamkakizaki;charset=utf8','LAA1291599','kakizaki1234');
foreach ($pdo->query('select * from Marklist') as $row) {
    echo  '<form action="welcome.php" method="post"><h2>',$row['name'],'</h2><input name="marketid" hidden="hidden" value="',$row['id'],'"><input name="marketname" hidden="hidden" value="',$row['name'],'"><input name="marketimg" hidden="hidden" value="',$row['image'],'">
    <input type="image" name="marketimg" height="200" width="300" src="Marketimg/',$row['image'],'" onclick="this.form.submit()">
</form>';
}

?>
<?php require 'footer.php';?>