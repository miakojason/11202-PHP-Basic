<style>
    table,tr,td{
        border: 1px solid black;
        border-collapse: collapse;
        text-align: center;
        margin: auto;
    }
    td{
        padding:5px 10px;
    }
    .td1{
        background-color: rgb(126, 238, 253);
    }
   
</style>
<h1>日期與時間</h1>
<?php
date_default_timezone_set('Asia/Taipei');
echo date("Y-m-d H:i:s");
?>
<h2>strtotime</h2>
<?php
echo strtotime("now");
$time=strtotime("now");
echo"<hr>";
echo date("Y-m-d H:i:s",$time);
echo"<hr>";
$date1='2023-10-24';
$date2='2023-11-15';
$days=(strtotime($date2)-strtotime($date1))/(60*60*24);
echo $date1."到".$date2."有".$days."天";
?>
<hr>
<h2>計算下次生日天數</h2>
<?php
$date="1974-10-07";
$br=strtotime($date);
$diff=strtotime(date("Y")."-".date("m-d",$br));
$today=strtotime("now");
if($diff>$today){
    $days=($diff-$today)/(60*60*24);
}else{
$$diff=strtotime("+1 year",$diff);
$days=($$diff-$today)/(60*60*24);
}
echo"距離下一次生日".date("Y-m-d",$diff)."還有".floor($days)."天";
?>
<hr>
<pre> <h2>利用date()函式的格式化參數，完成以下的日期格式呈現

2021/10/05
10月5日 Tuesday
2021-10-5 12:9:5
2021-10-5 12:09:05
今天是西元2021年10月5日 上班日(或假日) </h2></pre>
<?php
echo date('Y/m/d') ;
echo"<br>";
echo date('m月日 l') ;
echo"<br>";
echo date('Y-m-d H:i:s') ;
echo"<br>";
echo date('Y-n-j G:i:s') ;
echo"<br>";
echo date("今天是西元Y年m月d日");
if(date("N")<=5){
    echo"上班日";
}else{
    echo"假日";
}
?>
<hr>
<pre>
    <h2>
利用迴圈來計算連續五個周一的日期
例:

2021-10-04 星期一
2021-10-11 星期一
2021-10-18 星期一
2021-10-25 星期一
2021-11-01 星期一
</h2>
</pre>
<?php
$todayweek=date('N') ;
echo $todayweek;
$diff=1-$todayweek;
$lastMonday=strtotime("$diff days");
$nexMonday=date("Y-m-d",strtotime("+1 week",$lastMonday));

for($i=0;$i<5;$i++){
    $nexMonday=date("Y-m-d l",strtotime("+1 week",strtotime($nexMonday)));
    echo$nexMonday;
    echo"<br>";
}
?>
<hr>
<h2>月曆</h2>
<?php
echo "<h3>";
echo date("西元Y年m月");
echo "</h3>";
$thisMonth=date("Y");// 這是當前月份的第一天，是透過 date("Y-m-1") 取得的日期。
$thisFirstDay=date("Y-m-1");//這是當前月份的第一天是星期幾，是透過 date('w',
$thisFirstDate=date('w',strtotime($thisFirstDay));//這一行的目的是獲取 $thisFirstDay 日期的星期幾，即第一天是星期幾。這是透過將 $thisFirstDay 轉換為 Unix 時間戳，然後使用 date('w', ...) 取得星期幾。
$thisMonthDays=date("t");//這是當前月份的總天數，是透過 date("t") 取得的。
$thisLastDay=date("Y-m-$thisMonthDays");//這一行的目的是獲取當前月份的最後一天的日期。這是透過將 "Y-m-" 字串和 $thisMonthDays 組合而成的。
$weeks=ceil(($thisMonthDays+$thisFirstDate)/7);  // 這行程式碼的目的是計算當前月份應該顯示的週數。                                            
echo "<table>";                                // 這是通過將總天數加上第一天是星期幾的數字，
echo "<tr>";                                  // 然後除以 7（一周有 7 天）來實現的。
echo "<td>日</td >";                        // ceil 函式則確保取得的週數是無條件進位的。
echo "<td>一</td>";
echo "<td>二</td>";
echo "<td>三</td>";
echo "<td>四</td>";
echo "<td>五</td>";
echo "<td>六</td>";
echo "</tr>";
for($i=0;$i<$weeks;$i++){
    echo "<tr>";
    for($j=0;$j<7;$j++){
        echo "<td>";
        $tmp=7*($i+1)-(6-$j)-$thisFirstDate;
        if($tmp>0 && $tmp<=$thisMonthDays){
            echo $tmp;
        }
        
        echo "</td>";
    }
    echo "</tr>";
}


echo "</table>";


?>

