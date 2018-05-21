<?php
$config = "./../../../accounts/config.php";
require $config;
$pdo = new PDO("mysql:host=$server;dbname=$database", $usr, $passwd);
$stmt = $pdo->prepare('SELECT Temat,Podtemat,Treść,Autor FROM articles WHERE loginmd5= :userID AND DateAdded = :dateadd ;');
        $stmt->bindParam(':userID',$_POST['loginmd5'],PDO::PARAM_STR);
        $stmt->bindParam(':dateadd',$_POST['date'],PDO::PARAM_STR);
        $stmt->execute();
        while($row = $stmt->fetch())
        {
            echo $row[$data];
        }   

echo($userID);
?>