<?php
// f5每次都產生不一樣隨機
// rand($a,$b)最小,最大
echo rand(1,38);
?>
<hr>
<?php
// $num=[];
// for($i=0;$i<6;$i++){
//     $tmp= rand(1,38);
//     if(!in_array($tmp,$num)){
//         $num[]=$tmp;
//     }else{
//     }
    
// }
// foreach($num as $n){
//     echo $n ."," ;
// }
$num=[];
while(count($num)<6){
    $tmp= rand(1,38);
    if(!in_array($tmp,$num)){
        $num[]=$tmp;
    }
}

foreach($num as $n){
    echo $n ."," ;
}
?>




