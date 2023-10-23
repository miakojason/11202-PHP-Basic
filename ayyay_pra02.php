
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

$land = ['子', '丑', '寅', '卯', '辰', '巳', '午', '未', '申', '酉', '戌', '亥'];
$sky = ['甲', '乙', '丙', '丁', '戊', '己', '庚', '辛', '壬', '癸'];
$sky [($year - 1024) % 10];
$land[($year - 1024) % 12];
echo "西元".$year."是";
echo $sky[($year-1024)%10];
echo $land[($year-1024)%12];
echo "年";

?>
