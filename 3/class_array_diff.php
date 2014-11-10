<?php
class Array_diff {
	private $ar1;
	private $ar2;
	function my_array_diff($ar1,$ar2){
		$this->ar1 = $ar1;
		$this->ar2 = $ar2;
		for($i=0; $i<count($ar1); $i++){
			if($ar1[$i] == $ar2[$i]){
				echo $ar1[$i] . '<br>';
			}
		}
	}
}


$ar1 = array (29,34,792,73,498,273,49,872,309,348,72,39,84,72,03);
$ar2 = array (24,38,792,79,48,27,49,172,109,38,792,39,89,729,103);

$obj = new Array_diff();
echo $obj->my_array_diff($ar1,$ar2);
?>
