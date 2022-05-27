<?php require 'header.php';?>
<?php
if(!isset($_SESSION['cart'])){
    $_SESSION['cart']=[];
}
$id=$_POST['cartid'];
$_SESSION['cart'][$id]=[
    'goodsname'=>$_POST['cartgoodsname'],
    'price'=>$_POST['cartprice'],
    'count'=>$_POST['count']
];
   echo $_SESSION['cart'][$id]['goodsname'],'<br>';
   //echo $_SESSION['cart'][$id]['price'];
   echo $_SESSION['cart'][$id]['count'],'点<br>';
   echo '<p>カートに商品を追加しました。</p>';
   
?>
<a href="category.php"><br>他の商品を選びます</a>
<?php require 'footer.php';?>