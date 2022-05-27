<?php require 'header.php';?>

<?php //echo $_POST['marketname'], $_POST['marketid'], $_POST['marketimg'];
if(isset($_POST['marketid'])){
     unset($_SESSION['cart']);
     $_SESSION['market']['name']=$_POST['marketname'];
     $_SESSION['market']['id']=$_POST['marketid'];
     $_SESSION['market']['img']=$_POST['marketimg'];
      echo '<h2>',$_SESSION['market']['name'],'いらしゃいません</h2>';
      echo '<img height="500" width="1000" src="Marketimg/',$_SESSION['market']['img'],'"><br>';
      echo '<a href="category.php">商品をえらびます</a>';
}else if(isset($_SESSION['market']['id'])){
      echo '<h2>',$_SESSION['market']['name'],'いらしゃいません</h2>';
      echo '<img height="500" width="1000" src="Marketimg/',$_SESSION['market']['img'],'"><br>';
      echo '<a href="category.php">商品をえらびます</a>';
}
else{
      echo '<h1>ページエラー</h1>';
      }
?><br>
<?php require 'footer.php';?>