<!DOCTYPE html>
<html lang="en">
<head>
  <title>Panel administratora</title>
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
<div class="container">

	<button type="button" class="btn btn-deleteUser" data-toggle="modal" data-target="#modalDeleteUser"> Usuń użytkownika </button>
	<button type="button" class="btn btn-addQuest" data-toggle="modal" data-target="#modalAddQuest"> Dodaj Zadanie </button>
	<button type="button" class="btn btn-changePassword" data-toggle="modal" data-target="#modalChangePassword"> Zmień hasło </button>
	
	<!--modal Usun uzytkownika-->
	<div class="modal fade" id="modalDeleteUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  		<div class="modal-dialog modal-dialog-centered" role="document">
    		<div class="modal-content">
      			<div class="modal-header">
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
        			<h3 class="modal-title">Usuń użytkownika</h3>
      			</div>
      			<div class="modal-body">
      				<form action="deleteUser.php" method="POST">
  						<div class="form-group">
    						<label class="form-label" for="exampleInputPassword1">Nazwa użytkownika</label>
    						<input name="loginToDoSt" type="text" class="form-control" placeholder="login">
  						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-primary">Usuń uzytkownika</button>
      						<button type="button" class="btn btn-danger" data-dismiss="modal">Zamknij</button>
						</div>
					</form>   
      			</div>
    		</div>
  		</div>
	</div>
	<!--modal Dodaj zadanie-->
	<div class="modal fade" id="modalAddQuest" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
    		<div class="modal-content">
      			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				<span aria-hidden="true">&times;</span>
        				</button>
        				<h3 class="modal-title">Dodawanie zadania</h3>
      			</div>
      			<div class="modal-body">
      			<form action="addQuest.php" method="POST">
  					<div class="form-group">
    					<label class="form-label" for="exampleInputEmail1">Nazwa użytkownika</label>
    					<input name="login" type="text" class="form-control" id="exampleLogin" aria-describedby="emailHelp" placeholder="Login">
  					</div>
  					<div class="form-group">
    					<label class="form-label" for="exampleInputPassword1">Treść zadania</label>
    					<input name="login" type="text" class="form-control" id="exampleInputPassword1" placeholder="Treść...">
  					</div>
  					<div class="form-group">
    					<label class="form-label" for="exampleInputPassword1">Termin zakończenia</label>
    					<input name="pass1" type="text" class="form-control" id="exampleInputPassword1" placeholder="Termin">
  					</div>
					<div class="modal-footer"><button type="submit" class="btn btn-primary">Dodaj zadanie</button>
      					<button type="button" class="btn btn-danger" data-dismiss="modal">Zamknij</button>
					</div>  
				</form>   
      			</div>  
     		</div>
    	</div>
	</div>
	<!--modal Zmień hasło-->
	<div class="modal fade" id="modalChangePassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
    		<div class="modal-content">
      			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				<span aria-hidden="true">&times;</span>
        				</button>
        				<h3 class="modal-title">Zmiana hasła</h3>
      			</div>
      			<div class="modal-body">
      			<form action="accounts/handler.php" method="POST">
  					<div class="form-group">
    					<label class="form-label" for="exampleInputEmail1">Login</label>
    					<input name="login" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter login">
  					</div>
  					<div class="form-group">
    					<label class="form-label" for="exampleInputPassword1">Nowe hasło</label>
    					<input name="password1" type="password" class="form-control" id="exampleInputPassword1" placeholder="Podaj nowe hasło">
  					</div>
  					<div class="form-group">
    					<label class="form-label" for="exampleInputPassword1">Powtórz hasło</label>
    					<input name="password2" type="password" class="form-control" id="exampleInputPassword1" placeholder="Powtórz hasło">
  					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary">Zmień hasło</button>
      					<button type="button" class="btn btn-danger" data-dismiss="modal">Zamknij</button>
					</div>  
				</form>   
      			</div>  
     		</div>
    	</div>
	</div>
	
</div>

</body>
</html>