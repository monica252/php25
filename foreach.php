<?php
$animals = array("dog", "cat", "panda");
// $animals から一つずつ要素を取り出して、$animal に代入される

foreach($animals as $animal){
  echo "要素は" . $animal;
  echo "\n";
}