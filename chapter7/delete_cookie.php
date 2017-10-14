<?php
  //  Cookieを削除する
  $result = setcookie('sample', $cookie_data, time() - 3600, '/');

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>Chapter7</title>
</head>
<body>
  <p>Cookieを削除しました。</p>
  <p><a href="print_cookie.php">Cookieの中身を表示する。</a></p>
</body>
</html>
