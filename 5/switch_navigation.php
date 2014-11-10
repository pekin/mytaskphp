<?php
include_once('lock.php');
include_once('./view/logo.php');
include_once('./view/menu.php');

$link = $_GET ['name'];
if($link == false)
{
    include_once('start.php');
}
else
{
    switch ($link)
        {
        case "i":
            include_once('./view/i.php');
            break;
               
        case "news":
            include_once('./view/news.php');
            break;
            
        case "shop":
            include_once('./view/shop.php');
            break;
            
        case "contact":
            include_once('./view/contact.php');
            break;

		case "quit":
			session_destroy();
			echo ;
        }
}
include_once('./view/footer.php');
?>
