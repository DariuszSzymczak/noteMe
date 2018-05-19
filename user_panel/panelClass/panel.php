<?php
class panel{
    //Pobieranie poszczgólnych danych usera (edycja profilu)
    public function getUserData($pdo,$userID,$data)
    {
        $stmt = $pdo->query('SELECT email,login,md5,loginmd5,avatar,opis,miejscowosc FROM users WHERE loginmd5='.$userID.'');
        
        while($row = $stmt->fetch())
        {
            echo $row[$data];
        }
        
    }

}
?>
