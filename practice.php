<?php
$a = 3;
$b = 7;
echo $a+$b;

$array_month = [1,2,3,4,5,6,7,8,9,10,11,12];
echo $array_month[7];

$hello ="Hello,";
$name = "shota";
$world = "'s World!";

echo $hello.$name.$world;

$tech_boost = "tech";
echo $tech_boost;

$calendar = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

// 12月を表示する
echo $calendar["December"];