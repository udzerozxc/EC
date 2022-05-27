<?php require 'header.php';?>
<?php
$pdo=new PDO('mysql:host=mysql154.phy.lolipop.lan;dbname=LAA1291599-teamkakizaki;charset=utf8','LAA1291599','kakizaki1234');
//echo 'DB_OPEN','<br>';
$sql1=$pdo->prepare('select * from Client where Client.loginid=? and Client.loginpw=?');
$sql1->execute([$_POST['email'],$_POST['password']]);
foreach ($sql1 as $row) {
    $name=$row['name'];
    if(isset($name)){
            echo $name,'さん、おかえり<br>';
            $_SESSION['Client']=[
             'id'=>$row['id'],
             'name'=>$row['name']
             
];
              echo '<a href="category.php"><br>カテゴリを選んでください</a>';

    }else{
        echo 'email or password error!!<br>';
    }
}
$pdo=null;
//echo 'DB_CLOSE';
?>
<?php require 'footer.php';?>