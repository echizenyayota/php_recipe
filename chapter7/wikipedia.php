<?php
// https://www.mediawiki.org/wiki/API:Main_page/ja
require 'h.php';

$keyword = isset($_GET['q']) ? $_GET['q'] : '';

if ($keyword) {
  // wikipediaのWeb APIで検索するためのURLを組み立て
  $qs = array(
    // https://www.mediawiki.org/wiki/API:Main_page/ja
    // http://blog.rdct.info/article/web/19211
    'action' => 'query',
    'list' => 'search',
    'format' => 'json',
    // https://www.mediawiki.org/wiki/API:Search
    'srsearch' => $keyword,
  );

  // var_dump($qs);
  // exit;

  // エンドポイント
  $url = 'https://ja.wikipedia.org/w/api.php?' . http_build_query($qs);

  //WikipediaのWeb APIから検索結果を取得
  $json = file_get_contents($url);
  if ($json === false) {
    die('システムエラーです');
  }

  // 取得したJSONをデコード
  $wikipedia = json_decode($json);
  if (json_last_error() != JSON_ERROR_NONE) {
    die('システムエラーです。');
  }

  // print_r($wikipedia);
  // exit;

}
?>
<!DOCTYPE html>
<html lang="ja">
<body>
  <meta charset="utf-8">
  <title>JSON形式のデータを利用する</title>
    <form method="get" action="wikipedia.php">
      Wikipedia検索: <input type="search" name="q" value="<?php echo h($keyword); ?>">
      <input type="submit" value="検索">
    </form>
<?php
  if (isset($wikipedia)) {
    // print_r($wikipedia);
    echo h($wikipedia->query->searchinfo->totalhits), '件<br>' . "\n";
    foreach($wikipedia->query->search as $item) {
      // var_dump($item);
      $url = 'https://ja.wikipedia.org/wiki/' .rawurlencode($item->title);
      $title = $item->title;
      $ts = $item->timestamp;
      printf('%s <a href="%s">%s</a><br>' . "\n", h($ts), h($url), h($title));
    }
  }

?>
</body>
</html>
