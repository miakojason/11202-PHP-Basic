<?php
// 初始化總和變數
$sum =0;
// 初始化計數器
$i = 1;
while($i<=100){
    echo '當$i='.$i.'時';      
    echo'$sum+$i的結果是';
    echo $sum." + ".$i."=";
    echo $sum+$i;
    echo "<br>";
  // 將目前的數字加到總和中
$sum+=$i; //>$sum=$sum+$i  累計 
//+=是累計
// =+是賦正值

// 增加計數器
$i++;
}
