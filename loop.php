<?php
//初始化總和變數
$sum=0;
// (起始值;條件式;增減值){ 程式碼}
for($i=1;$i<=10;$i=$i+1){
    // $i+1=$i++
    // 將目前的數字加到總和中
echo '當$i='.$i.'時';
echo'$sum+$i的結果是';
echo $sum . " + ". $i."=";
echo $sum+$i;
echo "<br>";
$sum=$sum+$i;    

}
// $i    $sum+$i  $sum
// 1      0  + 1   1
// 2      1    2   3
// 3      3    3   6
// 4      6    4   10
echo "1加到100的總和是:".$sum;
?>

<h1>迴圈練習</h1>
<h3>使用for迴圈來產生以下的數列</h3>
<ul>
    <li>1,3,5,7,9……n</li>
    <li>10,20,30,40,50,60……n</li>
    <li>3,5,7,11,13,17……97</li>
</ul>


<?php
$n=100;
for($i=1;$i<=$n;$i=$i+2){
    echo $i;
    echo ",";
}
echo "<hr>";

$n=30;
for($i=1;$i<=$n;$i++){
    echo $i*10;
    echo ",";
}
echo "<hr>";
$a=30;

$flag=true;
for($i=2;$i<($a/2);$i++){
    echo "$a 除以 $i 餘數 ". ($a % $i);
    if(($a % $i) == 0){
        $flag=false;
        echo "<br>";
        break;
    }
    echo "<br>";
}

if($flag==true){
    echo $a . "是質數";
}else{
    echo $a . "不是質數";
}
echo "<hr>";
?>
<h3>巢狀迴圈</h3>
<?php
$n=100;
$count=0;
for($j=3;$j<=$n;$j++){
    $flag=true;
    
    for($i=2;$i<=($j/2);$i++){
        $count++;
        //echo "$j 除以 $i 餘數 ". ($j % $i);
        if(($j % $i) == 0){
            $flag=false;
          //  echo "<br>";
          break;
        }
        //echo "<br>";
    }
    
    if($flag==true){
        echo $j ;
        echo ",";
    }else{
        //echo $j . "不是質數";
    }
}
echo "<br>";
echo "一共執行了".$count."次的程式內容";
?>
echo "<hr>";
<h3>陣列</h3>

<?php
$a=['甲','乙','丙','丁'];
for($i=0;$i<count($a);$i++){
    echo$a[$i]; 
}

echo "<br>";

foreach($a as $idx => $b){
    echo $idx ."=>".$b;
    echo "<br>";
}

?>
