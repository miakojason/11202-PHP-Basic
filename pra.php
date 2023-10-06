<h2>閏年判斷，給定一個西元年份，判斷是否為閏年</h2>
<?php
$year=2000;
echo "年份:".$year;
echo "<hr>";

if($year%4==0){
    /* 4的倍數
    8,24,104,200,400,300,
 */
    if($year%100 != 0){
        /* 4的倍數
        8,24,104,1204
     */     
        echo $year."是閏年";

    }else{
        /* 100,200,1000,2000,2100,2200*/
        if($year%400==0){

            echo $year."是閏年";
        }else{

            echo $year."是平年";
        }

    }
}else{
    echo $year."是平年";

}
/*****簡化巢狀 */
echo "<hr>";

$year=2424;
echo "年份:".$year;
echo "<hr>";

if(($year%4==0 && $year%100 != 0) ||  $year %400 ==0){
    echo $year."是閏年";    
}else{
    echo $year."是平年";
}

?>
