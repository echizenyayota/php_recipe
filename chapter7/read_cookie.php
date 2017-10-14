<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>Chapter7</title>
</head>
<body>
  <div>
    <?php
      require_once('h.php');

      echo '<p>Cookieの中身 : </p>';
      echo h($_COOKIE['php_sample']);

      echo '<p>parse_str()関数で分解したcookieの中身:</p>';
      parse_str($_COOKIE['php_sample'], $output);
      echo 'data1: ' . h($output['data1']) . '<br>';
      echo 'data2: ' . h($output['data2']);
    ?>
    <p><a href="delete_cookie.php">Cookieを削除する</a></p>
  </div>
</body>
</html>
