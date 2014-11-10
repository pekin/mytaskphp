<?php
session_start();
echo '<meta charset="utf-8">';
$form = "<center><div><p>Введите логин и пароль:</p><form method='post' action=''>
        <input type='text' name='user' size='30'/><br>
        <input type='password' name='pass' size='30'/><br>
        <input type='submit' name='submit_button' value='ВХОД'/>
        </form></div></center>";
$user = 1;
$pass = 3;


switch ((!$_POST) OR (!$_SESSION))
{
    case ($_POST):
		if (empty($_POST['user'])) {echo $form; echo 'пустое поле юзер';exit();}
		if (empty($_POST['pass'])) {echo $form; echo 'пустое поле пасс';exit();}
		if (($pass == $_POST['pass']) and ($user == $_POST['user']))
			{ 
		     	$_SESSION['user'] = $_POST['user'];
				echo 'залогинились';
			}
		else
			{
				echo $form;
				echo 'ни логина ни пароля не угадал';
				exit(); 
			}
		break;
    case ($_SESSION):
		if (empty($_SESSION['user'])) {echo $form; echo 'сессия не прошла';exit();}
		if ($user == $_SESSION['user'])
			{
				echo 'сессия прошла'; 
			}
		else
			{
				echo $form;echo 'просто идиотизм с сессиями';
				exit(); 
			}
		break;
	default:
		echo $form; echo 'дефаулт';exit();
		break; 
}
?> 
