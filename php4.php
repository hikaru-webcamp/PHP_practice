
<!-- 配列について -->
<?php
$week = array("月","火","水");
echo "<pre>";
print_r($week);
echo "</pre>";
?>

<!-- 代入によって配列をつくる(キーを省略) -->
<?php
$days[] = "朝";
$days[] = "昼";
$days[] = "晩";

echo $days[0], 'になりました<br>';
echo $days[1], 'になりました<br>';
echo $days[2], 'になりました<br>';

?>

<!-- 代入によって連想配列を作る -->
<?php
$days["morning"] = "朝";
$days["afternoon"] = "昼";
$days["night"] = "夜";

echo $days["morning"],"になります。<br>";
echo $days["afternoon"],"になります。<br>";
echo $days["night"],"になります。<br>";

?>

<?php
  $arr1[] = "123";
  $arr1[] = "季節";
  $arr1[] = 456.789;

  $arr2["spring"] = "春";
  $arr2["summer"] = "夏";
  $arr2["autumn"] = "秋";
  $arr2["winter"] = "冬";

  echo $arr1[0], "<br>";
  echo $arr1[1], "<br>";
  echo $arr1[2], "<br>";

  echo "<br>",PHP_EOL;

  echo $arr2["spring"], "<br>";
  echo $arr2["summer"], "<br>";
  echo $arr2["autumn"], "<br>";
  echo $arr2["winter"], "<br>";
?>
