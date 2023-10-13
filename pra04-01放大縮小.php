<style>
    *{
        font-family: 'Courier New', Courier, monospace;
    }
</style>
<?php
echo"*";
echo"**";
echo"***";
echo"****";
echo"*****";
echo"<hr>";
// 透過新變數$amount來控制自由放大縮小,取代
$amount="10";
echo"<h2>直角三角形</h2>";
for($i=0;$i<$amount;$i++){
    for($j=0;$j<=$i;$j++){//當條件 $j<=$i 成立時，內層迴圈就會執行
        echo"*";//j++這個動作會一直重複，直到 $j 的值大於 $i，使得條件 $j<=$i 不再成立，內層迴圈結束。
        }
  echo"<br>";
}
echo"<hr>";

echo"<h2>倒直角三角形</h2>";
echo"<hr>";
//$amount沒-1多一行 要-1
for($i=$amount-1;$i>=0;$i--){
    for($j=0;$j<=$i;$j++){
        echo"*";
        }
  echo"<br>";
}
echo"<hr>";
echo"<h2>正三角形</h2>";


for($i=0;$i<$amount;$i++){
    for($j=0;$j<($amount-1-$i);$j++){
    echo"&nbsp";
}
    
    for($k=0;$k<($i*2+1);$k++){
    echo"*";
}
echo"<br>";
}
echo"<hr>"; 

echo"<h2>倒三角形</h2>";
for($i=$amount-1;$i>=0;$i--){
    for($j=0;$j<($amount-1-$i);$j++){
    echo"&nbsp";                //$i*2+1=$k邏輯關係    
}                               // $i  $j(口)$K(*   
    for($k=0;$k<($i*2+1);$k++){ //  4    0      9   *********
    echo"*";                    //  3    1      7    *******     
}                               //  2    2      5     *****
echo"<br>";                     //  1    3      3      ***
}                               //  0    4      1       *
echo"<hr>";
//$tmp $i $j(口) $K(*)
// 0    0    4      1       *
// 1    1    3      3      ***
// 2    2    2      5     *****
// 3    3    1      7    *******
// 4    4    0      9   *********
// 3    5    1      7    *******
// 2    6    2      5     *****
// 1    7    3      3      ***
// 0    8    4      1       *  
echo"<h2>菱形</h2>";
$mid=floor(($amount*2-1)/2);
for($i=0;$i<($amount*2-1);$i++){
if($i<=$mid){
    $tmp=$i;//i<=4時 tmp不便最多到4
}else{
    $tmp--;//i>=4時 tmp開始向下-1  3 2 1 0
}

for($j=0;$j<($mid-$tmp);$j++){
    echo"&nbsp;";
}
for($k=0;$k<($tmp*2+1);$k++){
    echo "*";
}
echo"<br>";
}

//先填滿星星,接著解決出現上下兩行，在解決中間行數的星星空白
//$i   $j(口)    $j→→→
// 0    0     $i ******* ******* *******   
// 1    5      ↓ *******         *     *
// 2    5      ↓ *******         *     *
// 3    5      ↓ *******         *     *
// 4    5        *******         *     *
// 5    5        *******         *     *
// 6    0        ******* ******* *******
echo"<h2>矩形</h2>";
for($i=0;$i<$amount;$i++){

    for($j=0;$j<$amount;$j++){
        if($i==0 || $i==$amount-1){
            echo "*";
        }else if($j==0 || $j==$amount-1){
            echo "*";
        }else{
            echo "&nbsp;";
        }

    }
    echo "<br>";
}
echo"<hr>";
//    $j→→→→
// $i *******
// ↓  **   **
// ↓  * * * *
// ↓  *  *  *
//    * * * *
//    **   **
//    *******
echo"<h2>矩形加對角線</h2>";
for($i=0;$i<$amount;$i++){

    for($j=0;$j<$amount;$j++){
        if($i==0 || $i==$amount-1){
            echo "*";
        }else if($j==0 || $j==$amount-1 || $j==$i || $i+$j==$amount-1){
            echo "*";
        }else{
            echo "&nbsp;";
        }
    }
    echo "<br>";
}
echo"<hr>";
echo"<h2>矩形加對角線加上css</h2>";
for($i=0;$i<$amount;$i++){

    for($j=0;$j<$amount;$j++){
        if($i==0 || $i==$amount-1){
            echo "*";
        }else if($j==0 || $j==$amount-1 ){
            echo "*";
        }else if($j==$i || $i+$j==$amount-1){
            echo "<span style='color:red'>*</span>";
        }
        else{
            echo "&nbsp;";
        }
    }
    echo "<br>";
}

?>
