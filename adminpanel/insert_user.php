<?php
header('Content-Type: text:html; charset=utf-8');
date_default_timezone_set('Europe/Moscow');
session_start();

if (!isset($_SESSION['session_username']))
{
    header('location:login.php');
}
require ('../development_mode_control.php');




if (isset($_POST['user_save'])){
    $name = $_POST['name'];
    $login = $_POST['login'];
    $password = sha1($_POST['password']);
    $userlevel = $_POST['user_level'];

    if ($DB->query("INSERT INTO vizitka_usertbl (id, username, password, full_name, user_level) VALUES (?,?,?,?,?)",
        array(null,$name,$password,$login, $userlevel)));
    {
        echo "Succes";
        header('location:user.php');
    }
}
?>
