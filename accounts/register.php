<?php
class register{

    public function addUser($pdo,$mail,$login,$password,$password2)
    {

           if($password===$password2)
           {
                $salted = "salt{$password}salt";
                $hash = md5($salted);
                $null = "";
                $primary = $login.substr($hash,0,5);
                $stmt = $pdo->prepare('INSERT INTO users(email,login,md5,loginmd5,avatar,opis,miejscowosc)
                                    VALUES(:email,:login,:md5,:loginmd5,:avatar,:opis,:miejscowosc)');
                $stmt->bindParam(':email',$mail, PDO::PARAM_STR);
                $stmt->bindParam(':login',$login, PDO::PARAM_STR);
                $stmt->bindParam(':md5',$hash, PDO::PARAM_STR);
                $stmt->bindParam(':loginmd5',$primary, PDO::PARAM_STR);
                $stmt->bindParam(':avatar',$null, PDO::PARAM_STR);
                $stmt->bindParam(':opis',$null, PDO::PARAM_STR);
                $stmt->bindParam(':miejscowosc',$null, PDO::PARAM_STR);
                $stmt->execute();
           }


    }

    public function login($pdo,$login,$password)
    {
            $stmt = $pdo->query('SELECT login,md5 FROM users');
            $salted = "salt{$password}salt";
            $md5 = md5($salted);
            $check = FALSE;
            foreach($stmt as $row)
            {
                if($login===$row['login'] AND $md5===$row['md5'])
                {
                    $check = TRUE;
                }
            }

            if($check == TRUE)
            {
                session_start();
                $query = $pdo->query('SELECT loginmd5 FROM users WHERE md5='.$md5.'');
                $_SESSION['userID']=$query;
                echo $query;
                setcookie("loginResult", 'true', time()+100,'/',$_SERVER['HTTP_HOST']);
                header('Location:../user_panel/userpanel.php');
            }
            else
            {
                setcookie("loginResult", 'false', time()+100,'/',$_SERVER['HTTP_HOST']);
                //header('Location:../index.php');
            }
            
           

    }

}
?>
