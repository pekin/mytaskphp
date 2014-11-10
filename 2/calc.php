<form action="calc.php" method="post">
<input type="text" name="task">
<input type="submit" value="Ravno">
</form>

<?php
eval('$a = $_POST[task];');
eval($h = "$_POST[task];");
$str_r = str_replace("+","+",$h)
$b = $a . '=' . $str_r . '</br>';
#echo $b; 
#echo $h;
$f = fopen('file.txt', 'a');
fwrite ($f, $b);
fclose($f);
$z = fopen('file.txt', 'r');

while (!feof($z)) 
{
    $d = fgets($z);
    echo $d;
}
fclose($z);


?>
