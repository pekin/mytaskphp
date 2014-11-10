<meta charset='UTF-8'>
<?php
class Explode{
	private $str;
	function my_explode($str){
		$this->str = $srt;
		$arr = split (' ', $str);
		foreach ($arr as $x){
		echo $x . '<br>';
	}

	}
}

$str = 'Разбивает строку на подстроки ';
$obj = new Explode();
$obj->my_explode($str);

?>
