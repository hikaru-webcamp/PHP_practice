
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
