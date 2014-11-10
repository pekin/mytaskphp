<?php
$arr = array(12,3,134,235,245,2,45,13,61,46,24,62,46);
function my_count($arr){
foreach ($arr as $x){
$sum++;
}
return $sum;
}
echo my_count($arr);
?>
