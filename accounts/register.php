<?php
class register{

    public function addUser($mail,$login,$password,$password2)
    {

           if($password===$password2)
           {
                $pdo = new PDO('mysql:host=localhost;dbname=1158227_qkg', 'root', '');
                $salted = "salt{$password}salt";
                $hash = md5($salted);
                $primary = $login.substr($hash,0,5);
                $stmt = $pdo->prepare('INSERT INTO users(email,login,md5,loginmd5,avatar,opis,miejscowosc)
                                    VALUES(:email,:login,:md5,:loginmd5,:avatar,:opis,:miejscowosc)');
                $stmt->bindParam(':email',$mail, PDO::PARAM_STR);
                $stmt->bindParam(':login',$login, PDO::PARAM_STR);
                $stmt->bindParam(':md5',$hash, PDO::PARAM_STR);
                $stmt->bindParam(':loginmd5',$primary, PDO::PARAM_STR);
                $stmt->bindParam(':avatar',"default", PDO::PARAM_STR);
                $stmt->bindParam(':opis',$mail, PDO::PARAM_STR);
                $stmt->bindParam(':miejscowosc',$mail, PDO::PARAM_STR);
                $stmt->execute();
           }


    }

}
?>
