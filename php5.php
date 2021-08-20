<!-- 連想配列 array関数を使って -->

<!-- ====書き方1==== -->

<?php

$bstone = array("ガーネット","アメシスト","アクアマリン",
"ダイヤモンド","エメラルド","パール",
"ルビー","ペリドット","サファイア",
"オバール","トパーズ","ターコイズ");

$birth = 3;

echo "私は",$birth,"月生まれです。<br>";
echo "誕生石は",$bstone[$birth -1],"です";
?>


<!-- ====書き方2==== -->
<?php
  $days = array("morning" =>  "朝",
                "afternoon" => "昼",
                "night" => "夜");

  echo $days["morning"], "になりました<br>";
  echo $days["afternoon"],"になりました<br>";
  echo $days["night"],"になりました<br>";
?>


<!-- 配列に入ってるデータ数を求めるcount -->
<!-- 各要素を同じデータで埋める array_fill -->

<?php
$arr = array_fill(0, 3, "おやすみ");

echo "要素数は",count($arr),"<br>";
echo $arr[0],"<br>";
echo $arr[1],"<br>";
echo $arr[2],"<br>";
?>
