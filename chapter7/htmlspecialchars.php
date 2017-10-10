<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>エスケープしてブラウザに表示する</title>
</head>
<body>
    <div>
      <?php
        require_once('h.php');

        $string = "<cite>'PHP'逆引きレシピ</cite>";
        echo "そのまま表示: {$string}<br>\n";
        echo 'htmlspecialchars()関数でエスケープ処理 : ' . h($string) ."\n";
       ?>
    </div>
</body>
</html>
