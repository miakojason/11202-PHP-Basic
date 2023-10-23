<h2>字串取代</h2>

將”aaddw1123”改成”*********”
<?php
$s="aaddw11asadssa23dafsasdsaddsfsdfsdf";
echo "<br>";
$t=str_replace(['a','w',1],'*',$s);
echo $t;
echo "<br>";
echo str_repeat("*",mb_strlen($s));
?>


<h2>字串分割</h2>
將”this,is,a,book”依”,”切割後成為陣列

<?php
$s="this,is,a,book";
$a=explode(',',$s);

echo "<pre>";
print_r($a);
echo "</pre>";

?>
<h2>字串組合</h2>
將上例陣列重新組合成“this is a book”
<br>
<?php
echo join(' ',$a);

?>

<h2>子字串取用</h2>

將” The reason why a great man is great is that he resolves to be a great man”只取前十字成為” The reason…”
<br>
<?php
$s="The reason why a great man is great is that he resolves to be a great man";
 echo mb_substr($s,0,10);
echo"...";
echo"<br>";
$cs="今天天氣真的是太好了的樣子";
echo mb_substr($cs,0,3);
echo"...";
echo"<br>";
$cs="今天天氣真的是太好了的樣子";
//                ↓中文3個出來一個字
echo substr($cs,0,6);
echo"...";
echo"<br>";
?>

<h2>尋找字串與HTML、css整合應用</h2>
<ul>
    <li>給定一個句子，將指定的關鍵字放大</li>
    <li>“學會PHP網頁程式設計，薪水會加倍，工作會好找”</li>
    <li>請將上句中的 “程式設計” 放大字型或變色.</li>
</ul>
<?php
$key="薪水";
$str="學會PHP網頁程式設計，薪水會加倍，工作會好找";
echo str_replace($key,
"<span style='font-size:20px;color:red'>$key</span>",
$str
);
?>
<hr>
<?php
$str="學會PHP網頁程式設計，薪水會加倍，工作會好找";
for($i=0;$i<=mb_strlen($str);$i=$i+3){
     //echo mb_substr($str,$i,1);
     echo $str[$i];
     echo $str[$i+1];
     echo $str[$i+2];
     echo "<br>";
}


?>

