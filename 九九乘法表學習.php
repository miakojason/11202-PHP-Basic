<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>
    table,td,th{
        border-collapse: collapse;
        border:1px solid black;
    }
 
</style> 

<h2>九九乘法表</h2>
<?php
for($i=1;$i<=9;$i++){
    echo'1 * ' .$i.'= '.(1*$i)."&nbsp&nbsp&nbsp&nbsp";
}
echo"<br>";
for($i=1;$i<=9;$i++){
    echo'2 * ' .$i.'= '.(2*$i)."&nbsp&nbsp&nbsp&nbsp";
}
echo"<br>";
for($i=1;$i<=9;$i++){
    echo'3 * ' .$i.'= '.(3*$i)."&nbsp&nbsp&nbsp&nbsp";
}
echo"<br>";
for($i=1;$i<=9;$i++){
    echo'4 * ' .$i.'= '.(4*$i)."&nbsp&nbsp&nbsp&nbsp";
}
echo"<br>";
for($i=1;$i<=9;$i++){
    echo'5 * ' .$i.'= '.(5*$i)."&nbsp&nbsp&nbsp&nbsp";
}
echo"<br>";
for($i=1;$i<=9;$i++){
    echo'6 * ' .$i.'= '.(6*$i)."&nbsp&nbsp&nbsp&nbsp";
}
echo"<br>";
for($i=1;$i<=9;$i++){
    echo'7 * ' .$i.'= '.(7*$i)."&nbsp&nbsp&nbsp&nbsp";
}
echo"<br>";
for($i=1;$i<=9;$i++){
    echo'8 * ' .$i.'= '.(8*$i)."&nbsp&nbsp&nbsp&nbsp";
}
echo"<br>";
for($i=1;$i<=9;$i++){
    echo'9 * ' .$i.'= '.(9*$i)."&nbsp&nbsp&nbsp&nbsp";
}
echo"<br>";

echo"<hr>";

for($j=1;$j<=9;$j++){
    for($i=1;$i<=9;$i++){
echo $j." * ".$i."= ".($j*$i)." , ";
}
echo "<br>";
}

echo"<hr>";
echo"<table >";

for ($j = 1; $j <= 9; $j++) {
    echo "<tr>";
    for ($i = 1; $i <= 9; $i++) {
        echo "<td>" . $j . " * " . $i . " = " . ($j * $i) . "</td>";
    }
    echo "</tr>";
}

echo"</table>";
echo"<hr>";
echo"<table>";
echo"<tr>"; //第一列
echo" <td></td>";//第一格空直無
// for跑右邊其他td格$i跑1~9 
        for ($i = 1; $i <= 9; $i++) {
            echo "<td>$i</td>";
        }
    echo"</tr>";//第一列結束

  // [第二列,x列,$j列]以下迴圈 for跑(tr+td)9次<$j次>迴圈
for ($j = 1; $j <= 9; $j++) {
    echo "<tr>";//第二列,x列,$j列($j<=9,所以是9次)
    echo "<td>$j</td>";//(第二列,x列,$j列)以下的右邊第1格(td)顯示$j
  //第二列右邊第2格td迴圈9次，顯示$j*$i(1~9)結果 
    for ($i = 1; $i <= $j; $i++) {//$i必須<=$j就停止了，此行不重複因為$i必須<=左邊第一格$j顯示出三角形
        // for ($i = 1; $i <= 9; $i++) {此行顯示9*9有重複
        echo "<td>" .($j * $i) . "</td>"; 
}
    echo "</tr>";//x列,$j列結束
}

  echo"</table>";
  echo"<hr>";
  ?>
  </body>
  </html>
  
  
  
  
  
  
  

