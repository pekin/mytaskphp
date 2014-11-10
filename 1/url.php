<meta charset="utf-8"> 
<?php
$a = 'Свитер Мужской ARMANI 100% шерсть';

	function my_url($a)
{
	
	$s = strtolower(str_replace("-","_",str_replace(" ","_",str_replace("  ","_",str_replace("--","_",$a)))));
	$z = '<a href="http://www.'. urlencode($s) .'">' . urlencode($s) . '</a>';
	return $z;
}
echo my_url($a);

?>
