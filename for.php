<?php
$total = 0;
echo $total;

for($i = 0; $i <= 100; $i++){
    $total += $i;
}
echo $total;

$fruits = array("apple","orange","lemon");

echo count($fruits);

for ($i = 0;$i < count($fruits); $i++){
    echo "要素は".$fruits[$i];
    echo "\n";
}