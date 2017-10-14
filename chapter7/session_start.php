<?php
  require_once('h.php');
  session_start();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>Chapter7</title>
</head>
<body>
  <div>
    <?php
      if (!isset($_SESSION['count'])) {
        $_SESSION['count'] = 1;
      } else {
        $_SESSION['count']++;
      }
      echo 'あなたのアクセス回数: ' . h($_SESSION['count']);
    ?>
  </div>
</body>
</html>
