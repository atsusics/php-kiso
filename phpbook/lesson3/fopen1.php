<?php
//read data
$fp = fopen('bookdata.csv','r');
if($fp === false){
  echo "ファイルのオープンに失敗しました";
  exit;
}
var_dump($fp);