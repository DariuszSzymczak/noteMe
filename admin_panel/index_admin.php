<?php
	session_start();
		if(isset($_SESSION["KOMUNIKAT"]))
		{
			echo "<script>confirm($_SESSION['KOMUNIKAT'])</script>";
		}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
body{
	height: 90vh;
	color: #aaa;
	background: linear-gradient(-45deg, #41484D,#660002);
	background-size: 400% 400%;
	-webkit-animation: Gradient 15s ease infinite;
	-moz-animation: Gradient 15s ease infinite;
    animation: Gradient 15s ease infinite;
}
@-webkit-keyframes Gradient {
	0% {
		background-position: 0% 50%
	}
	50% {
		background-position: 100% 50%
	}
	100% {
		background-position: 0% 50%
	}
}

@-moz-keyframes Gradient {
	0% {
		background-position: 0% 50%
	}
	50% {
		background-position: 100% 50%
	}
	100% {
		background-position: 0% 50%
	}
}

@keyframes Gradient {
	0% {
		background-position: 0% 50%
	}
	50% {
		background-position: 100% 50%
	}
	100% {
		background-position: 0% 50%
	}
}
	</style>
</head>

<body>
    <div class="front_panel">
        <form name="adminForm" method="post" action="adminScript.php">
            <input type="text" name="loginToDoSt" placeholder="Nazwa Użytkownika">
            <br>
            <input type="submit" name="submit" value="Usuń Użytkownika"
                onclick="document.adminForm.action= 'deleteUser.php';"/>
            <input type="submit" name="submit" value="Dodaj Zadanie"
                onclick="document.adminForm.action= 'addQuest.php';"/>
            <input type="submit" name="submit" value="Usuń Zadanie"
                onclick="document.adminForm.action= 'deleteQuest.php';"/>
            <input type="submit" name="submit" value="Zmień hasło"
                onclick="document.adminForm.action= 'changePW.php';"/>
        </form>
    </div>


</body>
</html>