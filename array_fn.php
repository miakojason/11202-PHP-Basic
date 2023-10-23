<?php

$array=[3,2,7,10,30,17,];
//更改數字查詢↓
if (in_array(22,$array)){
echo"數字有在陣列中";
}else{
    echo"數字不再陣列中";
}
$score=[
    '姓名'=>'小明',
    '成績'=>98
];
$tmp=array_keys($array);
$string=array_keys($score);
echo "<pre>";
print_r($string);
echo"</pre>";

echo"<pre>";
print_r($array);
echo"</pre>";

sort($array);
echo"<pre>";
print_r($array);
echo"</pre>";

rsort($array);
echo"<pre>";
print_r($array);
echo"</pre>";

$ss="today is a good day";
$tt=explode(" ",$ss);
print_r($tt);

$cc=implode("--",$tt);
echo$cc;