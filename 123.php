<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         table,tr,td{
        border: 1px solid black;
        border-collapse: collapse;
        text-align: center;
       
    }
    td{
        padding:5px 10px;
        
    }
    </style>
</head>
<body>
<?php
echo "<h3>";
echo date("西元Y年m月");
echo "</h3>";
$thisMonth=date("Y");// 這是當前月份的第一天，是透過 date("Y-m-1") 取得的日期。
$thisFirstDay=date("Y-m-1");//這是當前月份的第一天是星期幾，是透過 date('w',
$thisFirstDate=date('w',strtotime($thisFirstDay));//這一行的目的是獲取 $thisFirstDay 日期的星期幾，即第一天是星期幾。這是透過將 $thisFirstDay 轉換為 Unix 時間戳，然後使用 date('w', ...) 取得星期幾。
$thisMonthDays=date("t");//這是當前月份的總天數，是透過 date("t") 取得的。
$thisLastDay=date("Y-m-$thisMonthDays");//這一行的目的是獲取當前月份的最後一天的日期。這是透過將 "Y-m-" 字串和 $thisMonthDays 組合而成的。
$weeks=ceil(($thisMonthDays+$thisFirstDate)/7);  // 這行程式碼的目的是計算當前月份應該顯示的週數。 這是通過將總天數加上第一天是星期幾的數字，然後除以 7（一周有 7 天）來實現的。ceil 函式則確保取得的週數是無條件進位的。                                       
$firstCell=date("Y-m-d",strtotime("-$thisFirstDate days",strtotime($thisFirstDay)));
echo "<table>";                              
echo "<tr>";                                 
echo "<td>日</td >";                        
echo "<td>一</td>";
echo "<td>二</td>";
echo "<td>三</td>";
echo "<td>四</td>";
echo "<td>五</td>";
echo "<td>六</td>";
echo "</tr>";
for($i=0;$i<6;$i++){
    echo "<tr>";
    for($j=0;$j<7;$j++){
        $addDays=7*$i+$j;
        $thisCellDate=strtotime("+$addDays days",strtotime($firstCell));
        if(date('w',$thisCellDate)==0 || date('w',$thisCellDate)==6){
            echo "<td style='background:pink'>";

        }else{
            echo "<td>";
        }
        if(date("m",$thisCellDate)==date("m",strtotime($thisFirstDay))){
            echo date("Y-m-d",$thisCellDate);
        }
        echo "</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>
</body>
</html>