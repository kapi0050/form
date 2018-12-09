<?php
// セッションスタート
session_start();
?>
<html>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
  crossorigin="anonymous">

<body>
  <?php echo $_SESSION['name'] ?>
  <?php echo $_SESSION['kana'] ?>

  <form action="./input.php" method="post">
    <div class="form-group">
      <input style="width:150px;" class="form-control btn btn-lg btn btn-primary" type="submit" name="back" value="戻る" />
    </div>
  </form>
  <form action="./complete.php" method="post">
    <div class="form-group">
      <input style="width:150px;" class="form-control btn btn-lg btn btn-primary" type="submit" value="送信する" />
    </div>
  </form>
</body>

</html>