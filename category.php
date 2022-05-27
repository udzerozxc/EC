<?php require 'header.php';?>

<form action="show1.php" method="post">
    <h2>肉類</h2>
    <input name="category" hidden="hidden" value="肉類">
    <input type="image" name="marketimg" height="100" width="200" src="" onclick="this.form.submit()">
</form>
<form action="show.php" method="post">
    <h2>魚類</h2>
    <input name="category" hidden="hidden" value="魚類">
    <input type="image" name="marketimg" height="100" width="200" src="" onclick="this.form.submit()">
</form><form action="show.php" method="post">
    <h2>野菜</h2>
    <input name="category" hidden="hidden" value="野菜">
    <input type="image" name="marketimg" height="100" width="200" src="" onclick="this.form.submit()">
</form><form action="show.php" method="post">
    <h2>酒類</h2>
    <input name="category" hidden="hidden" value="酒類">
    <input type="image" name="marketimg" height="100" width="200" src="" onclick="this.form.submit()">
</form><form action="show.php" method="post">
    <h2>果物</h2>
    <input name="category" hidden="hidden" value="果物">
    <input type="image" name="marketimg" height="100" width="200" src="" onclick="this.form.submit()">
</form>
<?php require 'footer.php';?>