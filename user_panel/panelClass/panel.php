<?php

class panel{
    //Pobieranie poszczgólnych danych usera (edycja profilu)
    public function getUserData($pdo,$userID,$data)
    {
        $stmt = $pdo->prepare('SELECT email,login,md5,loginmd5,avatar,description,town,isAdmin FROM users WHERE loginmd5= :userID;');
        $stmt->bindParam(':userID',$userID,PDO::PARAM_STR);
        $stmt->execute();
        while($row = $stmt->fetch())
        {
            echo $row[$data];
        }   
    }

    public function getUserArticles($pdo,$userID,$date){
        $stmt = $pdo->prepare('SELECT topic,content,dateend FROM tasks WHERE loginmd5= :userID AND DateAdded = :today ;');
        $stmt->bindParam(':userID',$userID,PDO::PARAM_STR);
        $stmt->bindParam(':today',$date,PDO::PARAM_STR);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $json = json_encode($results);  
        echo($json);
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
           
            $stmt->bindParam(':md5',$hash, PDO::PARAM_STR);
            $stmt->bindParam(':loginmd5',$primary, PDO::PARAM_STR);
        }
        else
        {
            $stmtB = $pdo->prepare('SELECT md5,loginmd5 FROM users WHERE loginmd5= :userID;');
            $stmtB->bindParam(':userID',$userID,PDO::PARAM_STR);
            $stmtB->execute();
            while($row = $stmtB->fetch())
                {
                    $stmt->bindParam(':md5',$row['md5'], PDO::PARAM_STR);
                    $stmt->bindParam(':loginmd5',$row['loginmd5'], PDO::PARAM_STR);
                }   
        }
        // if(file_exists($_FILES['avatar']['name']))
        // {
        //     $maxSize = 1024 * 1024;
        //     if ($_FILES['avatar']['size'] > $maxSize)
        //     {
        //         //TUTAJ SOBIE DARKU OBSLUZ COOKIESA DLA CIULI CO CHCA WYSYLAC DUZE ZDJECIA
        //         $stmtC = $pdo->prepare('SELECT avatar FROM users WHERE loginmd5= :userID;');
        //         $stmtC->bindParam(':userID',$userID,PDO::PARAM_STR);
        //         $stmtC->execute();
        //         while($row = $stmtC->fetch())
        //         {
        //             $stmt->bindParam(':avatar',$row['avatar'], PDO::PARAM_STR);
        //         }   
        //     }
        //     else
        //     {   
            
        //         if (move_uploaded_file($_FILES['avatar']['tmp_name'], '../avatars/' . $_FILES['avatar']['name'] . ''))
		// 		    {
        //             //COOOKIES
        //             $path = realpath($_FILES['avatar']['name']);
        //             $stmt->bindParam(':avatar',$path, PDO::PARAM_STR);
		// 		    }
        //         else
        //             {
        //             //COOKIES
        //             }
		//     }
        // }
        // else
        // {
        //     $stmtD = $pdo->prepare('SELECT avatar FROM users WHERE loginmd5= :userID;');
        //     $stmtD->bindParam(':userID',$userID,PDO::PARAM_STR);
        //     $stmtD->execute();
        //     while($row = $stmtD->fetch())
        //         {
        //             $stmt->bindParam(':avatar',$row['avatar'], PDO::PARAM_STR);
        //         }   
        // }
        
        $stmt->execute();
       
    }
    }

    public function addTask($pdo,$userID)
    {
        
    }
}
?>
