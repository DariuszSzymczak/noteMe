<?php
session_start();
$editosoba = 'editosoba.php';
require $editosoba;
require './../accounts/config.php';
try
{
    $pdo = new PDO("mysql:host=$server;dbname=$database", $usr, $passwd);
    $pdo->exec("set names utf8");
}
catch(Exception $e)
{
    echo 'Błąd połączenia z bazą danych';
}
$edit = new editosoba();

echo "<script type='text/javascript'>
    alert('Wywolana metoda w skrypcie php');
    location='index_admin.php';
    </script>";
    $edit->show_all();
    
    ?>