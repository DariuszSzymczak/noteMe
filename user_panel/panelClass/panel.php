<?php

class panel{
    //Pobieranie poszczgólnych danych usera (edycja profilu)
    public function getUserData($pdo,$userID,$data)
    {
        $stmt = $pdo->prepare('SELECT email,login,md5,loginmd5,description,town,isAdmin FROM users WHERE loginmd5= :userID;');
        $stmt->bindParam(':userID',$userID,PDO::PARAM_STR);
        $stmt->execute();
        while($row = $stmt->fetch())
        {
            echo $row[$data];
        }   
    }

    public function getUserAvatar($pdo,$userID)
    {
        $loginmd5 = $_SESSION['userID'];
        $login= substr($loginmd5, 0, -5); 
        $stmt = $pdo->prepare('SELECT data FROM avatars WHERE login = :login;');
        $stmt->bindParam(':login',$login,PDO::PARAM_STR);
        $stmt->execute();
        $row = $stmt->fetch();
        $a=$row['data'];
        echo '<img src="data:image/jpeg;base64,'.base64_encode($a) .'" />';

    }

    public function getUserArticles($pdo,$userID,$date)
    {
        $stmt = $pdo->prepare('SELECT topic,content,dateend FROM tasks WHERE loginmd5= :userID AND DateAdded = :today ;');
        $stmt->bindParam(':userID',$userID,PDO::PARAM_STR);
        $stmt->bindParam(':today',$date,PDO::PARAM_STR);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $json = json_encode($results);  
        echo($json);
    }

    public function getUserDates($pdo,$userID)
    {
        $stmt = $pdo->prepare('SELECT DateAdded FROM tasks WHERE loginmd5= :userID;');
        $stmt->bindParam(':userID',$userID,PDO::PARAM_STR);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $json = json_encode($results);  
        echo($json);
    }

    //Wyswietlenie listy notatek użytkownika
    public function showUserPrivateNotes($pdo, $userID)
    {
        $stmt = $pdo->prepare('SELECT Title,DateAdded FROM privatenotes WHERE loginmd5= :userID');
        $stmt->bindParam(':userID',$userID,PDO::PARAM_STR);
        $stmt->execute();
        $counter = 1;
        $quotationMarks = '"';
        while($rows = $stmt->fetch())
        {
            echo '<tr>';
            echo '<td>'. $counter .'</td>';

            echo "<td><a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#showPrivateNoteModal\">
         {$rows["Title"]}</td></a>";
            echo " <td>{$rows["DateAdded"]}</td>";
            echo "<td> <center>
            <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#editTaskModal\">
                <button type=\"button\" class=\"btn btn-warning btn-xs m-b-10 m-l-5\">
                    Edytuj</button>
            </a>
            <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#deleteTaskConfirmModal\">
                <button type=\"button\" class=\"btn btn-danger btn-xs m-b-10 m-l-5\">
                    Usuń</button>
            </a>
        </center></td>";
        $counter++;
        }
        
    }


    //Edycja profilu usera
    public function changeUserData($pdo,$userID)
    {
        if(isset($_POST['city']))
        {
        $stmt = $pdo->prepare('UPDATE users SET
                            md5= :md5,
                            loginmd5= :loginmd5,
                            description= :description,
                            town= :town WHERE loginmd5 = :userID;');
                                   
        $stmt->bindParam(':userID',$userID,PDO::PARAM_STR);
        $stmt->bindParam(':town',$_POST['city'], PDO::PARAM_STR); 
        $stmt->bindParam(':description',$_POST['description'], PDO::PARAM_STR);
        }
        if($_POST['password']!=="")
        {
            $salted = "salt{$_POST['password']}salt";
            $hash = md5($salted);
            $stmtA = $pdo->prepare('SELECT login FROM users WHERE loginmd5= :userID;');
            $stmtA->bindParam(':userID',$userID,PDO::PARAM_STR);
            $stmtA->execute();
            while($row = $stmtA->fetch())
                {
                    $login = $row['login'];
                    $primary = $login.substr($hash,0,5);
                }  
           
            $stmtA->bindParam(':md5',$hash, PDO::PARAM_STR);
            $stmtA->bindParam(':loginmd5',$primary, PDO::PARAM_STR);
        }
        else
        {
            $stmtB = $pdo->prepare('SELECT md5, login FROM users WHERE loginmd5 = :userID;');
            $stmtB->bindParam(':userID',$userID,PDO::PARAM_STR);
            $stmtB->execute();
            while($row = $stmtB->fetch())
                {
                    $stmt->bindParam(':md5',$row['md5'], PDO::PARAM_STR);
                    $stmt->bindParam(':loginmd5',$row['loginmd5'], PDO::PARAM_STR);
                }   
        }
        
        if(file_exists($_FILES['avatar']['tmp_name']))
        {        
            
            $imgData = file_get_contents($_FILES['avatar']['tmp_name']);
            $loginmd5 = $_SESSION['userID'];
            $login= substr($loginmd5, 0, -5); 
            $name = $_FILES['avatar']['name'];
            $type = $_FILES['avatar']['type'];

            $stmtD = $pdo->prepare('DELETE FROM avatars WHERE login = :login');
            $stmtD->bindParam(':login', $login);
            $stmtD->execute();
         
            $stmtC = $pdo->prepare('INSERT into avatars(login, name, mime, data) values(:login, :name, :type, :imgdata)');
            $stmtC->bindParam(':login', $login);
            $stmtC->bindParam(':name', $name);
            $stmtC->bindParam(':type', $type);
            $stmtC->bindValue(':imgdata', $imgData);
            $stmtC->execute();


        }
    }
}
?>
