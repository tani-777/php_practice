<?php
//課題１
$name = "tanio";
if ($name == "tanio") {
  echo "私は　あなたの名前です";
} else {
  echo "あなたの名前ではありません";
}
echo "\n";
//課題２
$total = 0;
for ($i = 1; $i <= 10000; $i++) {
  $total += $i;
}
echo $total;
echo "\n";
//課題３
$fruits = array("りんご", "オレンジ", "ぶどう", "バナナ", "さくらんぼ");
foreach($fruits as $fruit) {
echo $fruit. "\n";
}
//課題４
$start = 1;
$end = 100;
for($i = $start; $i <= $end; $i++){
  if($i % 5 == 0){
    echo $i. "\n";
  }
}