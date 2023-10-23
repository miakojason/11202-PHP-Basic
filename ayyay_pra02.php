
<?php
// f5每次都產生不一樣隨機
// rand($a,$b)最小,最大
echo rand(1,38);
?>
<hr>
<h2>威力彩電腦選號沒有重覆號碼(利用while迴圈)</h2>
<?php
// $num=[];
// for($i=0;$i<6;$i++){
//     $tmp= rand(1,38);
//     if(!in_array($tmp,$num)){
//         $num[]=$tmp;
//     }else{
//     }
    
// }
// foreach($num as $n){
//     echo $n ."," ;
// }
$num=[];
while(count($num)<6){
    $tmp= rand(1,38);
    if(!in_array($tmp,$num)){
        $num[]=$tmp;
    }
}

foreach($num as $n){
    echo $n ."," ;
}
?>
<hr>
<h2>找出五百年內的閏年</h2>
<?php

$years=[];
for($i=2023;$i<2523;$i++){
if(($i%4==0 && $i%100 != 0) ||  $i %400 ==0){
    $years[]=$i;    
}
}
foreach ($years as $key => $year) {
    echo $year.",";
}
?>
<hr>
<h2>已知西元1024年為甲子年，請設計一支程式，可以接受任一西元年份，輸出對應的天干地支的年別。(利用迴圈)</h2>


<?php
$year=1666;
$land = ['子', '丑', '寅', '卯', '辰', '巳', '午', '未', '申', '酉', '戌', '亥'];
$sky = ['甲', '乙', '丙', '丁', '戊', '己', '庚', '辛', '壬', '癸'];
$sky [($year - 1024) % 10];
$land[($year - 1024) % 12];
echo "西元".$year."是";
echo $sky[($year-1024)%10];
echo $land[($year-1024)%12];
echo "年";
?>
<hr>
<h2>請設計一支程式，在不產生新陣列的狀況下，將一個陣列的元素順序反轉(利用迴圈)
<br>
例：$a=[2,4,6,1,8] 反轉後 $a=[8,1,6,4,2]
<!--   0  1 2 3 4   -->
</h2>
<?php
$a=[2,4,6,1,8];
echo"<pre>";
print_r($a);
echo"</pre>";
// $a=[2,4,6,1,8]
//     0 1 2 3 4 
//   0-4 1-3 2-2 交換
// count計算交換次數01234總個5個交換2次2-2一樣不換 2.5取2次
for($i=0;$i<floor(count($a)/2);$i++){
    $tmp=$a[$i];   
    $a[$i]=$a[count($a)-1-$i];// count($a)-1 總數5個-1剛好=和 0+4=4 1+3=4 2+2=4
    $a[count($a)-1-$i]=$tmp;
}
echo"<pre>";
print_r($a);
echo"</pre>";
?>