<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>Chapter7</title>
</head>
<body>
  <p>
  <?php
    require_once('h.php');
    // var_dump($_COOKIE['sample']);
    if (isset($_COOKIE['sample'])) {
      echo 'Cookieの中身 : ' . h($_COOKIE['sample']);
    } else {
      echo 'Cookieはありません。';
    }
   ?>
  </p>
  <p><a href="delete_cookie.php">Cookieを削除する</a></p>
</body>
</html>
