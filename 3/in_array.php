<meta charset='UTF-8'>
<?php
$arr = array("lemon", "orange", "banana", "apple");
$value = 'lemon';
function my_in_array($arr, $value){
	for($a=0; $a < count($arr); $a++){
		if($arr[$a] == $value){
			$result = 'Значение ' . $value . ' присутствует';
			return $result;
		}else{
			$result = 'Значение ' . $value . ' не присутствует';
			return $result;
		}
	}
	
}
echo my_in_array($arr, $value);
?>
