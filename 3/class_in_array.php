<meta charset='UTF-8'>
<?php
$arr = array("lemon", "orange", "banana", "apple");
$value = 'lemon';
class In_array{
	private $value;
	private $arr;
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
}
$obj = new In_array();
echo $obj->my_in_array($arr, $value);
?>
