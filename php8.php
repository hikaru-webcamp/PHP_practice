
<?php
header('Content-type: text/html; charset=UTF-8');
?>

<html>
  <body>
    <?php
      $waits = 70;
      $height = 170;
      $rate = $waits / $height;
      echo ' あなたはの隠れ肥満度は、',$rate, 'です。',PHP_EOL;
    ?>
  </body>
</html>

<!-- 条件分岐 -->
<?php
  $raingRt =50;
  echo '降水確率は',$rainRt,'%です.<br>';
  if($rainRt >= 40 ){
    echo '傘を持っていきます';
  }
  else{
    echo '傘を持っていきません';
  }
?>
