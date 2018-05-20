<?php
class panel{
    //Pobieranie poszczgólnych danych usera (edycja profilu)
    public function getUserData($pdo,$userID,$data)
    {
        $stmt = $pdo->prepare('SELECT email,login,md5,loginmd5,avatar,opis,miejscowosc FROM users WHERE loginmd5= :userID;');
        $stmt->bindParam(':userID',$userID,PDO::PARAM_STR);
        $stmt->execute();
        while($row = $stmt->fetch())
        {
            echo $row[$data];
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
                            avatar= :avatar,
                            opis= :opis,
                            miejscowosc= :miejscowosc WHERE loginmd5 = :userID;');
                                   
        $stmt->bindParam(':userID',$userID,PDO::PARAM_STR);
        $stmt->bindParam(':miejscowosc',$_POST['email'], PDO::PARAM_STR); 
        $stmt->bindParam(':opis',$_POST['email'], PDO::PARAM_STR);
        if(isset($_POST['password']))
        {
            $salted = "salt{$_POST['password']}salt";
            $hash = md5($salted);
            $stmt = $pdo->prepare('SELECT login FROM users WHERE loginmd5= :userID;');
            $stmt->bindParam(':userID',$userID,PDO::PARAM_STR);
            $stmt->execute();
            while($row = $stmt->fetch())
                {
                    $login = $row['login'];
                }  
            $primary = $login.substr($hash,0,5);
            $stmt->bindParam(':md5',$hash, PDO::PARAM_STR);
            $stmt->bindParam(':loginmd5',$primary, PDO::PARAM_STR);
        }
        else
        {
            $stmt = $pdo->prepare('SELECT md5,loginmd5 FROM users WHERE loginmd5= :userID;');
            $stmt->bindParam(':userID',$userID,PDO::PARAM_STR);
            $stmt->execute();
            while($row = $stmt->fetch())
                {
                    $stmt->bindParam(':md5',$row['md5'], PDO::PARAM_STR);
                    $stmt->bindParam(':loginmd5',$row['loginmd5'], PDO::PARAM_STR);
                }   
        }
        if(is_uploaded_file($_FILES['avatar']['tmp-name']))
        {
            $maxSize = 1024 * 1024;
            if ($_FILES['avatar']['size'] > $maxSize)
            {
                //TUTAJ SOBIE DARKU OBSLUZ COOKIESA DLA CIULI CO CHCA WYSYLAC DUZE ZDJECIA
                $stmt = $pdo->prepare('SELECT avatar FROM users WHERE loginmd5= :userID;');
                $stmt->bindParam(':userID',$userID,PDO::PARAM_STR);
                $stmt->execute();
                while($row = $stmt->fetch())
                {
                    $stmt->bindParam(':avatar',$row['avatar'], PDO::PARAM_STR);
                }   
            }
            else
            {   
            move_uploaded_file($_FILES['avatar']['tmp_name'], '../avatars/' . $_FILES['avatar'][$userID] . '');
                if (move_uploaded_file($_FILES['avatar']['tmp_name'], '../uploads/' . $_FILES['avatar'][$userID] . ''))
				    {
                    //COOOKIES
                    $path = realpath($_FILES['avatar'][$userID]);
                    $stmt->bindParam(':avatar',$path, PDO::PARAM_STR);
				    }
                else
                    {
                    //COOKIES
                    }
		    }
        }
        else
        {
            $stmt = $pdo->prepare('SELECT avatar FROM users WHERE loginmd5= :userID;');
            $stmt->bindParam(':userID',$userID,PDO::PARAM_STR);
            $stmt->execute();
            while($row = $stmt->fetch())
                {
                    $stmt->bindParam(':avatar',$row['avatar'], PDO::PARAM_STR);
                }   
        }
        
        $stmt->execute();
       
    }
}
}
?>
