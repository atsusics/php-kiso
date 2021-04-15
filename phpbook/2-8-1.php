<?php
$people[] = ['name' => '佐藤','blood' => 'A'];
$people[] = ['name' => '田中','blood' => 'B'];
$people[] = ['name' => '加藤','blood' => 'O'];

echo '<pre>';
var_dump($people);
echo '</pre>';

echo "<br>";

echo $people[0]['blood'].'<br>';
echo $people[2]['name'];

echo "<br>";
foreach($people as $key => $value){
  echo 'キーは'.$key.'、値は'.$value.'<br>';
}

echo "<br>";
foreach($people as $people_key => $person){
  echo '順番は'.$people_key.'<br>';
  foreach($person as $person_key => $value){
    echo 'キーは'.$person_key.'、値は'.$value.'<br>';
  }
}

foreach($people as $key => $person){
  echo '名前は'.$person['name'].'、血液型は'.$person['blood'].'<br>';
}
# 血液型も追加で出してみた