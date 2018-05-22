<?php
    $register = 'register.php';
    if(file_exists($register)){
        require $register;
        $config = 'config.php';
        if(file_exists($config))
        {
            require $config;
            
            try
            {
                $pdo = new PDO("mysql:host=$server;dbname=$database", $usr, $passwd);
            }
            catch(Exception $e)
            {
                die('Błąd krytyczny');
            }
        }
        else
        {
            die('Błąd krytyczny :(');
        }
        $reg = new register();
    }
    else
    {
        die('Błąd krytyczny :(');
    }
    //----------------Weryfikacja rejestracji----------------
    if(isset($_POST['mail']))
    {   $mail = $_POST['mail'];
        $login = $_POST['login'];
        $pass1 = $_POST['pass1'];
        $pass2 = $_POST['pass2'];
        
        $reg->addUser($pdo,$mail,$login,$pass1,$pass2);
    }
   
    //-------------------------------------------------------

    //----------------Weryfikacja logowania----------------
    if(isset($_POST['auth-login']))
    {
        $login = $_POST['auth-login'];
        $password = $_POST['auth-password'];

        $reg->login($pdo,$login,$password);
    }
    //-------------------------------------------------------
?>
