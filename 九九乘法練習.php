<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>
    table,td{
        border-collapse: collapse;
        border:1px solid black;
    }
 
</style> 
<?php
echo"<table>";
echo"<tr>";
echo"<td></td>";
for($i=1;$i<=9;$i++){
    echo"<td>$i</td>";
}
echo"</tr>";


  for($a=1;$a<=9;$a++){
     echo"<tr>";
    echo"<td>$a</td>";
for($j=1;$j<=$a;$j++){
    echo"<td>".($j*$a)."</td>";
}
echo"</tr>";
}

echo"</table>";
?>
  </body>
  </html>
  <!  