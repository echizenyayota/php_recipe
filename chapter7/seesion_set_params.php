<?php
  session_set_cookie_params(0, '/', 'wocker.dev');
  session_start();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
   <meta charset="utf-8">
   <title>セッションCookieのパラメータを設定したい</title>
</head>
<body>
 <div>
   <?php
      echo '<p>現在のセッションCookieの設定内容</p>';
      echo '<pre>';
      print_r(session_get_cookie_params());
      echo '</pre>';

      echo '<p>現在のセッションの設定内容</p>';
      echo '<pre>';
      $_SESSION['name'] = 'echizenya_yota';
      echo($_SESSION['name']);
      echo '</pre>';

      // セッションの初期化（削除）
      $_SESSION = array();

      // セッションCookieの削除 → できない
      print_r(session_get_cookie_params());
      echo '<pre>';
      // セッションの削除 → できる
      echo($_SESSION['name']);
      echo '</pre>';
   ?>
 </div>
</body>
</html>
