<?php
header('Content-Type: text:html; charset=utf-8');
date_default_timezone_set('Europe/Moscow');
session_start();

if (!isset($_SESSION['session_username']))
{
    header('location:login.php');
}
require ('../development_mode_control.php');




$id = $_GET['id'];
$dbname = $_GET['dbname'];
$url = $_GET['url'];
$row = $_GET['row'];

$DB->query("DELETE FROM {$dbname} WHERE {$row} = ?", array("$id"));
header('location:' . $url);
