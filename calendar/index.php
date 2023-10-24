<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2024月曆</title>
    <style>
        table{
            border-collapse: collapse;
            border:3px double #999;

        }

        td{
            border:1px solid #999;
            padding:5px 10px;
            text-align: center;
        }
        ul{
            list-style-type: none;
            padding:0;
            margin:5px;

        }
        ul li{
            display:inline-block;
            font-size:14px;
        }
    </style>
</head>
<body>
<ul>
    <li><a href="01.php">一月</a></li>
    <li><a href="02.php">二月</a></li>
    <li><a href="03.php">三月</a></li>
    <li><a href="04.php">四月</a></li>
    <li><a href="05.php">五月</a></li>
    <li><a href="06.php">六月</a></li>
    <li><a href="07.php">七月</a></li>
    <li><a href="08.php">八月</a></li>
    <li><a href="09.php">九月</a></li>
    <li><a href="10.php">十月</a></li>
    <li><a href="11.php">十一月</a></li>
    <li><a href="12.php">十二月</a></li>
</ul>    
<?php 
echo "<h3>";
echo date("西元Y年m月");
echo "</h3>";
$thisMonth=date("Y");
$thisFirstDay=date("Y-m-1");
$thisFirstDate=date('w',strtotime($thisFirstDay));
$thisMonthDays=date("t");
$thisLastDay=date("Y-m-$thisMonthDays");
$weeks=ceil(($thisMonthDays+$thisFirstDate)/7);
$firstCell=date("Y-m-d",strtotime("-$thisFirstDate days",strtotime($thisFirstDay)));
echo "<table>";
echo "<tr>";
echo "<td>日</td>";
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
        $addDays=7*$i+$j;
        $thisCellDate=strtotime("+$addDays days",strtotime($firstCell));
        if(date('w',$thisCellDate)==0 || date('w',$thisCellDate)==6){
            echo "<td style='background:pink'>";

        }else{
            echo "<td>";
        }
        if(date("m",$thisCellDate)==date("m",strtotime($thisFirstDay))){
            echo date("j",$thisCellDate);
        }
        echo "</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>    

</body>
</html>