$<?php
echo 'hello php!';
echo "\n";

$a = 3;
$b = 7;

echo $a+$b;
echo "\n";

$array_month = ["January","Febrary","March","April","May","June","July","August","September","October","November","December"];
echo $array_month[7];
echo "\n";

$hello = "Hello,";
$name = "Yusuke Honkawa";
$world = "'s World!";
echo $hello.$name.$world;
echo "\n";

$tech_boost = "tech";
$tech_boost .= " boost";
echo $tech_boost;
echo "\n";

$array2018_calendar = [
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
echo $array2018_calendar["December"];