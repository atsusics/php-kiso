<?php
$fp = fopen('bookdata.csv','r');
if($fp ===false){
  echo "cloud not open file";
  exit;
}
while($row = fgetcsv($fp)){
  echo '<pre>';
  var_dump($row);
  echo '</pre>';
}

