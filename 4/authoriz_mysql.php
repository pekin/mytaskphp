<?php
session_start();
echo '<meta charset="utf-8">';
include_once('db.php');
$form = "<center><div><p>Авторизация:</p><form method='post' action='$page'>
        <p>Логин:</p><input type='text' name='user' size='30'/><br>
        <p>Пароль:</p><input type='password' name='pass' size='30'/><br>
        <input type='submit' name='submit_button' value='ВХОД'/>
        </form></div></center>";
        
switch ((!$_POST) OR (!$_SESSION))
{
    case ($_POST):
    if (empty($_POST['user'])){echo $form; exit();}
        if (empty($_POST['pass'])){echo $form; exit();}
        $result = mysql_query ("SELECT * FROM userlist WHERE user = '".$_POST['user']."'");
        $myrow = mysql_fetch_array($result);        
    
        if ($myrow['pass'] == $_POST['pass'])
            { 
                $_SESSION['user'] = $_POST['user'];
                $_SESSION['pass'] = $_POST['pass'];
            }
        else
            {
                echo $form;
                exit(); 
            }
    break;
    case ($_SESSION):
    if (empty($_SESSION['user'])){echo $form; exit();}
        if (empty($_SESSION['pass'])){echo $form; exit();}
        $result = mysql_query ("SELECT * FROM userlist WHERE user = '".$_SESSION['user']."'");
        $myrow = mysql_fetch_array($result);        
        
        if ($myrow['pass'] == $_SESSION['pass'])
            { 
            }
        else
            {
                echo $form;
                exit(); 
            }
      break;
      default:
      echo $form; exit();
      break; 
}

?> 
