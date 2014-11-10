<?php
$text = 'Cnhjrf';
function my_strelen($text){
$arr = str_split($text);
for($i=0; $i<count($arr); $i++){
$sum++;
}
return $sum;
}
echo my_strelen($text);
?>
