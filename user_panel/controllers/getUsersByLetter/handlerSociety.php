<?php
session_start();
$name2 = $_POST['name2'];
if(isset($_SESSION['userID']))
{
$panel = './../../panelClass/panel.php';
require $panel;

$pane = new panel();
$config = './../../../accounts/config.php';
require $config;
$pdo = new PDO("mysql:host=$server;dbname=$database", $usr, $passwd);
$pdo->exec("set names utf8");
}
else
{
    //cookies ze zlego logowania
    header('Location:./../../../../index.php');
}
$name = substr($_SESSION['userID'],0, -5);
$pane->sendInvitation($pdo,$name2,$name);
$pane->showSentInvitations($pdo,$name);
?>