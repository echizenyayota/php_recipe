<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>エスケープしてブラウザに表示する</title>
</head>
<body>
    <div>
      <form method="get" action="urlencode.php">
        <p>
          文字列を入力してクリックします<br>
          <input type="text" name="data">
          <input type="submit" value="送信">
        </p>
      </form>
      <?php
        require_once('h.php');

        if (isset($_GET['data'])) {
          $string = $_GET['data'];

          // URL のエンコード
          $urlEncode = rawurlencode($_GET['data']);

          // var_dump($urlEncode);
          // exit;

          $url = $_SERVER['SCRIPT_NAME'] . '?data2=' . $urlEncode;

          // var_dump($url);
          // exit;

          echo '元文字列 : ' . h($string) . '<br>';
          echo 'エンコード処理後: ' . h($urlEncode) . '<br>';
          echo '<a href="' . h($url) . '">リンク</a>';
        }

        // var_dump($_GET['data2']);
        // exit;


        if (isset($_GET['data2'])) {
          $string = $_GET['data2'];

          // var_dump($_GET['data2']);
          // exit;
          
          echo 'デコード処理後: ' . h($string);
        }
       ?>
    </div>
</body>
</html>
