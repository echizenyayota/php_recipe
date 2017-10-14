<?php
  //  Cookieに代入する文字列
  $cookie_data = 'クッキー';
  $result = setcookie('sample', '', time() + 3600, '/');

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>Chapter7</title>
</head>
<body>
  <?php
    if ($result) {
      echo '<p>Cookieを保存しました！</p>';
    } else {
      echo '<p>setcookie()関数の保存に問題がありました。</p>';
    }
   ?>
   <p><a href="print_cookie.php">Cookieの中身を表示する</a></p>
</body>
</html>
