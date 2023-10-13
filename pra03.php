<h1>尋找字串</h1>
<?php
$source="印出尋找到的單字或字母所在句子中的位置";
$target="字母";

$flag="沒找到";
$start=0;//初始0

while($flag=="沒找到"){
           // 找$source,從$start初始0開始找,長度mb_strlen
    $tmp=mb_substr($source,$start,mb_strlen($target));
    if($tmp==$target){
        $flag="找到了";
    }
    $start++;
}
echo"找到了位置在".$start;
echo"<br>";
echo"原始字串-$source";
echo"<br>";
echo"尋找目標-$target";
?>