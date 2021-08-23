<!-- #フォームデータを受け取る為 -->

<?php
 header('Content-type: text/html; charset=UTF-8');
?>

<html>
  <body>
    <?php
      $f1 = $_POST['food1'];
      $f2 = $_POST['food2'];
      $f1 = htmlspecialchars($f1,ENT_QUOTES,'UTF-8');
      $f2 = htmlspecialchars($f2,ENT_QUOTES,'UTF-8');
      echo 'あなたは「', $f1,  '」が好きなんですね<br>';
      echo 'あなたは「', $f2,  '」が好きなんですね<br>';
    ?>
  </body>
</html>



<!-- htmlspecialcharsは、HTMLの特殊文字を無効化する処理を行う -->
