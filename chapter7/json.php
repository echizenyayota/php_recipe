<?php
  // jQueryなどの主要ライブラリからのアクセスである
  // ブラウザからの直接アクセスでないことを確認(JSONハイジャック対策にも有効)
  // if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) ||
  //   $_SERVER['HTTP_X_REQUESTED_WITH'] !== 'XMLHttpRequest' ) {
  //   die (json_encode(array('status' => "不正な呼び出し"))); // dieはexitと同じ
  // }

  // データを準備
  $value = array(
    1 => array('item' => 'ラーメン', 'price' => 780, 'orders' => 113),
    2 => array('item' => 'チャーハン', 'price' => 600, 'orders' => 72),
    3 => array('item' => 'ライス', 'price' => 1500, 'orders' => 87)
  );

  // Content-typeをJSONに設定
  header("Content-Type: application/json; charset=UTF-8");
  header("X-Content-Type-Options: nosniff"); // XSS対策　テキストとしてと表示されるようになり、JavaScriptが実行されなくなる

   // 可能な限りのエスケープを行う $valueの値を読み取りにくくする。
  //  echo json_encode(
  //    $value,
  //    JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP
  //  );
  echo json_encode(
    $value
    );
?>
