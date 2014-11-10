<?php
    $server = "localhost";
    $user = "root";
    $pass = "1";
    $db = "mybase";
    mysql_connect ($server, $user, $pass) or die ("нет подключения к mysql");
    mysql_select_db ($db) or die ("нет БД");
	mysql_set_charset('utf8');
	setlocale(LC_ALL, 'ru_RU.UTF-8');
?>
