<?php
  require_once('h.php');
  session_start();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>セッション変数を使いたい</title>
</head>
<body>
  <div>
    <?php
      if (!isset($_SESSION['visited'])) {
        echo '初めての訪問です。今からセッションを開始します。';
        $_SESSION['visited'] = 1;
      } else {
        echo '訪問回数: ' . h(++$_SESSION['visited']) . '<br>';
        if (isset($_SESSION['date'])) {
          echo '前回の訪問日時: ' . $_SESSION['date'] . '<br>';
        }
      }
      $_SESSION['date'] = date('Y年m月d日 H時i分s秒');
      // $_SESSION = array();
    ?>
  </div>
</body>
</html>
