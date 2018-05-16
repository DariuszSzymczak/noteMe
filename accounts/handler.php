<?php
 $register = 'register.php';
    if(file_exists($register)){
        require $register;
        $reg = new register();
    }
    else
    {
        die('Błąd krytyczny :(');
    }

    if(isset($_POST['mail']))
    {   $a = $_POST['mail'];
        $b = $_POST['login'];
        $c = $_POST['pass1'];
        $d = $_POST['pass2'];
        $reg->addUser($a,$b,$c,$d);
    }
<<<<<<< HEAD
?>
=======
?>
>>>>>>> 273c73d4f9a24613055029ccc49919848bd1e5b4
