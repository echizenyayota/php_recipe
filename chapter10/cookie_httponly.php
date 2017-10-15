<?php
  // HttpOnly属性を指定
  ini_set('session.cookie_secure', 1);
  setcookie('name', 'test',0, '', '', false, true);

 ?>
 <script>console.log(document.cookie);</script>
