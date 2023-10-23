<?php
// 使用二維陣列存放學生的成績
$student_grades = array(
    array(95, 64, 70, 90, 80),  // 學生1的成績
    array(88, 78, 54, 81, 71),  // 學生2的成績
    array(45, 60, 68, 70, 62),
    array(59, 32, 77, 54, 42),
    array(71, 62, 80, 62, 64)
    // 可以繼續添加其他學生的成績
);
$student_name = array("Judy", "Amo", "John", "Peter", "Hebe");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>學生成績表</title>
    <style>
        table,
        tr,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>

    <table>
        <tr>
            <th></th>
            <th>國文</th>
            <th>英文</th>
            <th>數學</th>
            <th>地理</th>
            <th>歷史</th>
        </tr>
        <tr>
            <?php
            // 顯示學生的成績資料
            for ($i = 0; $i < count($student_grades); $i++) {
                echo "<tr>";
                echo "<td>" . $student_name[$i] . "</td>";
                // as $score 表示將陣列中的每一個值取出並賦值給$score
                foreach ($student_grades[$i] as $score) {
                    echo "<td>" . $score . "</td>";
                }
                echo "</tr>";
            }
            ?>
        </tr>
    </table>
    <hr>
    <h2>利用程式來產生陣列</h2>
    <?php
    $nine = array();
    for ($i = 1; $i <= 9; $i++) {
        for ($j = 1; $j <= 9; $j++) {
            $result = $i * $j;
            $nine[] = "$i * $j=$result";
        }
    }
    foreach ($nine as $nine01) {
        echo $nine01 . "<br>";
    }

    ?>
    <hr>
    <?php
    $nine = array();
    for ($j = 1; $j <= 9; $j++) {

        for ($i = 1; $i <= 9; $i++) {
            $nine[] = "$j * $i=" . ($j * $i);
        }
        // 在每一個 9 個元素組成的小區塊之後插入換行
        $nine[] = "<br>";
    }

    print_r($nine)
    ?>
    <hr>
    <?php
    $nine = array();
    for ($j = 1; $j <= 9; $j++) {

        for ($i = 1; $i <= 9; $i++) {
            $nine[] = "$j * $i=" . ($j * $i);
        }
    }
    foreach ($nine as $idx => $value) {
        echo $value;
        if ($idx % 9 == 8) {
            echo "<br>";
        }
    }
    ?>
    <hr>
    <?php
    $nine = array();
    for ($j = 1; $j <= 9; $j++) {

        for ($i = 1; $i <= 9; $i++) {
            $nine[] = "$j * $i=" . ($j * $i);
        }
    }
    echo "<table>";
    echo "<tr>";
    foreach ($nine as $idx => $value) {
        echo "<td>";
        echo $value;
        echo "</td>";
        if ($idx % 9 == 8) {
            echo "</tr>";
        }
    }
    echo "</table>";
    ?>
    <hr>
    <?php
    $nine = array();
    for ($j = 1; $j <= 9; $j++) {

        for ($i = 1; $i <= 9; $i++) {
            $nine[] = "$j * $i=" . ($j * $i);
        }
    }
    echo "<table>";
    foreach($nine as $idx => $value){
        if($idx%9==0) {
            echo "<tr>
                 <td>$value</td>";
          }else if($idx%9==8){
            echo "<td>$value</td>
            </tr>";
        }else{
            echo "<td>$value</td>";
        }
    }
    echo "</table>";
    ?>
<hr>

</body>

</html>