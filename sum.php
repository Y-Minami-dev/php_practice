<?php
function sum($max){
    $result = 0;
    for($i = 1; $i <= $max; $i++){
        $result += $i;
    }
    return $result;
}

echo sum(100);

$string = "ABCDEF";
echo strlen($string);

$string = "I love Ruby!";
$new_string = str_replace("Ruby","PHP",$string);
echo $new_string;

$array = array(1,2,3,4,5,6,7,8,9,10);
echo count($array);

$array = array(2,5,9,7,3,1,8,6,4);
asort($array);
print_r($array);
arsort($array);
print_r($array);

//課題ここから
echo "課題ここから";

echo"\n";

//課題1
echo"課題1";
echo"\n";

function nibai($double) {
    return $double * 2;
}
echo nibai(2);
echo"\n";

echo"\n";
//課題2
echo"課題2";
echo"\n";

 function add($a, $b){
    return $a + $b;
 }
 echo add(1,2) . "\n";
 echo"\n";
 
 //課題3
 echo"課題3";
 echo"\n";
 
function kisu($arr) {
    $result = 1;
    foreach($arr as $a) {
    $result *= $a;
    }
    return $result;
}
echo kisu(array(1,3,5,7,9));
 
echo"\n";
 
echo"\n";
//課題4
echo"課題4";
echo"\n";

function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
    $max_number = $arr[0];
    foreach($arr as $a){
        if($max_number<$a){
        $max_number=$a;
        } elseif($max_number>$a) {
        $max_number;
        }
 //どうしたらいいかわからない・・・・
    }      
    return $max_number;
}
echo max_array ([5,2,3,9,7]);

echo"\n";

echo"\n";
//課題5
echo"課題5";
echo"\n";

//strip_tags    ：文字列からHTMLタグやPHPタグを除去する

$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
echo strip_tags($text);
echo "\n";

//array_push    ：1つ以上の要素を配列の最後に追加する

$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);

//array_merge   ：複数の配列を結合する

$array1 = [1, 2, 3];
$array2 = [10, 20, 30];
$array3 = [100, 200, 300];

$array = array_merge($array1, $array2, $array3);
 
print_r($array);

//time：時刻データへのアクセスと変換, mktime：PHPの標準関数で指定した日時のタイムスタンプを取得する

date_default_timezone_set('UTC');

echo"\n";

echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));

echo"\n";

echo date('c', mktime(1, 2, 3, 4, 5, 2006));

echo"\n";
  
//date

date_default_timezone_set('Asia/Tokyo');

echo date("Y/m/d H:i:s") . "\n"; 
echo date("Y/m/01") . "\n";
echo date("Y/m/t") . "\n"; 

$w = date("w");
$week_name = array("日", "月", "火", "水", "木", "金", "土");

echo date("Y/m/d") . "($week_name[$w])\n";