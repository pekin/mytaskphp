<?php
class Strelen{
	private $text = 'Cnhjrf';
		function my_strelen($text){
			$this->text = $text;
			$arr = str_split($text);
			for($i=0; $i<count($arr); $i++){
				$sum++;
		}
		return $sum;
	}
}
$text = 'Cnhjrf';
$obj = new Strelen ();
echo $obj->my_strelen($text);

?>
