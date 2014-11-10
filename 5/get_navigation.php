<meta charset="utf-8">
<a href="test2.php?link=index">Главная</a>  
<a href="test2.php?link=news">Новости</a>
<a href="test2.php?link=contact">контакты</a>


<?php
include_once('db.php');
$link = $_GET['link'];
$result = mysql_query("SELECT * FROM section WHERE str='$link'");
$myrow = mysql_fetch_array($result);
echo '<br>' . $myrow['text'];
?>
