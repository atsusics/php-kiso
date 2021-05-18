<?php
require_once '2-10-1.php';
foreach($people as $key => $person){
  echo '名前は' . $person['name'].'<br>';
  echo '血液型は' . $person['blood'].'<br><br>';
}
