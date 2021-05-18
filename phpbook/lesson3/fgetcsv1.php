<?php
$fp = fopen('bookdata.csv','r');
if($fp ===false){
  echo "cloud not open file";
  exit;
}
$row = fgetcsv($fp);
var_dump($row);

