<?php
include_once('menu.php');
include_once('db.php');
$id = $_GET['id'];
$result = mysql_query("SELECT * FROM news");
$myrow = mysql_fetch_array($result);
if(!isset($id)){
do 
    {
    echo "<p><h3><a href='news.php?id=$myrow[id]'>" . $myrow[title] . "</a></h3></p><p>" . mb_substr($myrow[text], 0, 200, 'UTF-8') . '</p>';
	}
while ($myrow = mysql_fetch_array($result));

}else{
$result = mysql_query("SELECT * FROM news WHERE id='$id'");
$myrow = mysql_fetch_array($result);
echo '<P><h3>' . $myrow["title"] . '</h3></p><P>' . $myrow["text"] . '</p><P> Автор статьи: ' . $myrow["user"] . ' ' . $myrow["date"] . '</p>';

}

?>
