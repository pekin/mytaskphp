<?php
class My_count {
    private $arr = array(12,3,134,235,245,2,45,13,61,46,24,62,46);

	function my_f_count($arr=null){

		foreach ($this->arr as $x){
			$count++;
		}

	return $count;
	}
}

$object = new My_count();

echo $object->my_f_count();
?>


