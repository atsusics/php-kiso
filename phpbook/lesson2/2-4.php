<?php
$condition = true;
if ($condition) echo "条件はtrueです。";


echo "<br>";

$a = 1;
if ($a === 1) {
  echo "aは1です。";
}

echo "<br>";

$a = 1;
$b = 2;
if($a < $b){
  echo "aはbよりも小さいです。";
}
echo "<br>";
$a = "1";
if($a === 1){
  echo "aは文字列の1です。";
}
echo "<br>";
$a = "1";
if($a == 1){
  echo "aは1です。";
}