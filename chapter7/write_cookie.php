<?php
  //  Cookieに代入するデータを保存する
  $cookie_data = 'data1=PHP逆引きレシピ&data2=好評販売中';
  // CookieにCookie名php_sampleで保存します
  setcookie('php_sample', $cookie_data);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>Chapter7</title>
</head>
<body>
  <div>
    <p>Cookieを保存しました！</p>
    <?php var_dump($_COOKIE['php_sample']); ?>
    <p><a href="read_cookie.php">Cookieのデータを読み取る</a></p>
  </div>
</body>
</html>
