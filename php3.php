<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
  echo "みなさん", "おはようございます <br>", PHP_EOL;
  print "お目覚めは". "いかかですか？ <br><br>" . PHP_EOL;
  echo "小鳥のさえずりが聞こえます <br>", PHP_EOL;
  echo "小鳥のさえずりが聞こえます <br>", PHP_EOL;
?>
</body>
</html>

<?php
  $no = 3;

  echo '私は', $no, "階に住んでいます。"
?>
<?php
echo "わたしは{$no}階に住んでいます";
?>

<?php
echo "わたしは{$no}階に住んでいます";
echo "私は、3階です。";
echo "私は、3階です。";
?>

<!-- 定数 -->
<?php
define("MAX_DISPLINE", 15);
echo MAX_DISPLINE;
?>
