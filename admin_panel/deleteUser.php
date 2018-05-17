<?php
    session_start();

    $login = trim($_POST['loginToDoSt']);
    echo $login;
    $pdo = new PDO('mysql:host=localhost;dbname=1158227_qkg', 'root', '');
    $querryDelete = $pdo->prepare("DELETE FROM users where login=:login");
    $querryDelete->bindParam(':login',$login, PDO::PARAM_STR);
    $querryDelete->execute();
    $_SESSION['KOMUNIKAT'] = "Użytkownik ',$login,' został usuniety";
    header('location:index_admin.php');
    
?>