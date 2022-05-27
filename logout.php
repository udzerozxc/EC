<?php require 'header.php';?>
<?php
echo $_SESSION['Client']['name'],'さん、またお越しくださいません';
unset($_SESSION['Client']);
?>
<?php require 'footer.php';?>