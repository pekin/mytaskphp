<meta charset='UTF-8'>
<?php
$arr = array("lemon", "orange", "banana", "apple");

function my_sort($arr)
{
	for ($a = 0; $a < count($arr) ;$a++)
	{
		for ($b = 0; $b < count($arr) ;$b++)
			{
				if ($arr[$a] < $arr[$b]) 
				{
				$hold = $arr[$a];
				$arr[$a] = $arr[$b];
				$arr[$b] = $hold;
				}
			}
		
	}
	for ($a = 0; $a < count($arr); $a++)
	{
  	echo $arr[$a] . "<br>";
	}
}
echo my_sort($arr);
?>
