<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta name="viewport" content="width-device-width,initial-scale=1.0">
    <meta charset="UTF-8">
    <title>KKNCHNサイト</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://kit.fontawesome.com/8b8524ad07.js" crossorigin="anonymous"></script>
</head>
<body>
<header>
    <h1>
        <a class ="title" href="market.php">KKNCHNサイト</a>
    </h1>
    <!--ヘッダーメニュー-->
    <nav class="list">
        <ul>
            <?php
        if(!isset($_SESSION['Client'])){
          echo '<li class="login"><a href="login.php"><b>ログイン</b></a></li>';
        }
        else{
          echo '<div id="app" class="dropdown">
               <li @click="ChangeTure"><b>',$_SESSION['Client']['name'],'さん</b></li>
               <div v-if="isActive" class="dropdown-content">
               <a href="history.php"><b>購入履歴</b></a>
               <a href="logout.php"><b>ログアウト</b></a>
               <a href=""><b>退会</b></a>
               </div>
           </div>';
        }
        ?>
            <li class="cart"><a href="cart.php"><b>カートの中</b></a></li>
            <!--商品検索-->
            <li><form action="" method="post" id="searchform" role="search">
                <input type="search" name="sber" class="search-input" placeholder="商品を検索">
                <button type="submit" class="sbtn"><i class="fas fa-search"></i></button>
            </form></li>
        </ul>
    </nav>
</header>
