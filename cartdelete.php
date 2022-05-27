<?php require 'header.php';?>
<?php
if(!isset($_SESSION['cart'])){
    $_SESSION['cart']=[];
}
$id=$_REQUEST['cartid'];
echo $_SESSION['cart'][$id]['goodsname'];
   echo $_SESSION['cart'][$id]['price'];
   echo $_SESSION['cart'][$id]['count'];
unset($_SESSION['cart'][$id]);
   echo '<p>この商品を削除しました。</p>';
   echo '<a href="cart.php"><br>カートに戻る</a>';
?>
<a href="category.php"><br>他の商品を選びます</a>
<?php require 'footer.php';?>