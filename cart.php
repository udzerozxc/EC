<?php require 'header.php';?>
<?php
if(!empty($_SESSION['cart'])){
    echo '<form action="welcome.php" method="post">';
    echo '<table><th>商品番号</th><th>商品名</th><th>価格</th><th>個数</th><th>小計</th>';
    $total=0;
    foreach($_SESSION['cart'] as $id=>$cart){
        echo '<tr>';
        echo '<td>',$id,'</td>';
        echo '<td><a href=detail.php?Goodsid=',$id,'>',$cart['goodsname'],'</a></td>';
        echo '<td>',$cart['price'],'</td>';
        echo '<td>',$cart['count'],'</td>';
        $subtotal = $cart['price']*$cart['count'];
        $total+=$subtotal;
        echo '<td>',$subtotal,'</td>';
        echo '<td><a href="cartdelete.php?cartid=',$id,'">削除</a></td>';
        echo '</tr>';
    }
    echo '<tr><td>合計</td><td></td><td></td><td></td><td>',$total,'</td></tr></table>';
    echo '</form><br><button onclick="clickEvent(',$_SESSION['Client'],')">決済画面</button>';
}
else{
    echo '<a href="category.php"><br>カートに何もないので、カテゴリを選んでください</a>';
}
?>
<script>
    function clickEvent(client) {
        if(client){
                window.location.href="pay.php";
        }else{
                 alert("先ずは、ログインください");
                }
    }
</script>
<?php require 'footer.php';?>