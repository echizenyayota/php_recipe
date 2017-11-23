<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>正規表現によるパターンマッチをしたい</title>
</head>
<body>
  <div>
    <?php
      echo '<p>携帯電話番号にマッチするか</p>';
      echo '<ul>';
      $telPattern = '/\A(090|080|070)-?\d{4}-?\d{4}\z/';

      $tel1 = '090-1234-5678';
      echo '<li>' . $tel1;
      if (preg_match($telPattern, $tel1)) {
        echo ' はマッチしています。';
      } else {
        echo ' はマッチしていません。</li>';
      }

      $tel2 = '07012345678';
      echo '<li>' . $tel2;
      if (preg_match($telPattern, $tel2)) {
        echo ' はマッチしています。';
      } else {
        echo ' はマッチしていません。</li>';
      }

      $tel3 = 'abc-defg-hijk';
      echo '<li>' . $tel3;
      if (preg_match($telPattern, $tel3)) {
        echo ' はマッチしています。';
      } else {
        echo ' はマッチしていません。</li>';
      }

      echo '</ul>'
    ?>
  </div>
</body>
</html>
