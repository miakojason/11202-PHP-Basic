<?php
// $a=array();
$a=[];

$a[]=10;
$a[]=30;
$a[]='泰山';
$a[]='新莊';

echo"<pre>";
print_r($a);
echo"</pre>";

echo $a[0];
echo $a[3];

$b=[];
$b['小子哪莊地']='日照，索龍';
$b['最高裝逼']='三刀流，三千世界';
$b['你朝巴']='井底之蛙，瓜瓜瓜';
$b['你白吊打']='我要當海王，略略略略略';

echo "<pre>";
print_r($b);
echo "</pre>";
echo"<hr>";
$c=[];
$c['name']='日照。索龍';
$c['興趣']=['白吊打','三刀流','井底之蛙瓜瓜瓜'];
echo "<pre>";
print_r($c);
echo "</pre>";

echo $c['name'];
echo $c['興趣'][0];
echo $c['興趣'][2];
?> 