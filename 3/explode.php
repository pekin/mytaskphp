<meta charset='UTF-8'>
<?php
$str = 'Разбивает строку на подстроки ';
function my_explode($str){
	$arr = split (' ', $str);
	foreach ($arr as $x){
	echo $x . '<br>';
}

}
echo my_explode($str);
?>
