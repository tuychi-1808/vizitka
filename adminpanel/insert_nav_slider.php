<?php
header('Content-Type: text:html; charset=utf-8');
date_default_timezone_set('Europe/Moscow');
/*if (!isset($_SESSION['session_username']))
{
    header('location:login.php');
}*/
require ('../development_mode_control.php');


if (isset($_POST['navsled_save'])){
    $title = $_POST['title'];
    $text = $_POST['text'];

    $file =$_FILES['image']['tmp_name'];
    $image =addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $image_name =addslashes($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'], "images/".$_FILES['image']['name']);
    $location = "images/".$_FILES['image']['name'];


    if ($DB->query("INSERT INTO nav_slider (id, location, title, text) VALUES (?,?,?,?)",
        array(null,$location, $title, $text)));
    {
        echo "Succes";
        header('location:nav_slider.php');
    }
}
?>
