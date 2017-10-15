<?php
// HTTPS通信かどうかを確認
if (isset($_SERVER['HTTP']) || $_SERVER['HTTPS'] == 'on') {
  // secure属性を指定
  setcookie('name', 'test', 0, '', '');
}

 ?>
