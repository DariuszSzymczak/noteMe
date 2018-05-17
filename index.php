<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style/index-style.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  
<div class="container">
    
<!-- Button trigger modal -->
<div class="page-header">
    <div class="page-header-title">
      <img src="notepad.png"/>
      <h1 style="-moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none;" 
 unselectable="on"
 onselectstart="return false;" 
 onmousedown="return false;"><strong>note</strong>Me</h1>
    </div>
    <br/>
  <div class="page-header-description">
    <p class="description">
      
Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deserunt neque tempore recusandae animi soluta quasi?
 Asperiores rem dolore eaque vel, porro, soluta unde debitis aliquam laboriosam. Repellat explicabo, maiores!
    </p>
  </div>
    <div class=page-header-buttons>
      <button type="button" class="btn btn-primary btn-header" data-toggle="modal" data-target="#registerModal">
        Zarejestruj
      </button>
      <button type="button" class="btn btn-danger btn-header" style="float:right;" data-toggle="modal" data-target="#loginModal">
        Zaloguj
      </button>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h3 class="modal-title">Zarejestruj się</h3>
      </div>
      <div class="modal-body">
      <form action="accounts/handler.php" method="POST">
  <div class="form-group">
    <label class="form-label" for="exampleInputEmail1">Adres e-mail</label>
    <input name="mail" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label class="form-label" for="exampleInputPassword1">Login</label>
    <input name="login" type="text" class="form-control" id="exampleInputPassword1" placeholder="login">
  </div>
  <div class="form-group">
    <label class="form-label" for="exampleInputPassword1">Hasło</label>
    <input name="pass1" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label class="form-label" for="exampleInputPassword1">Powtórz hasło</label>
    <input name="pass2" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
</form>   
      </div>

      <div class="modal-footer"><button type="submit" class="btn btn-primary">Zarejestruj się</button>
      <button type="button" class="btn btn-danger" data-dismiss="modal">Zamknij</button>
        
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h3 class="modal-title">Zaloguj się</h3>
      </div>
      <div class="modal-body">
      <form action="accounts/handler.php" method="POST">
  <div class="form-group">
    <label class="form-label" for="exampleInputPassword1">Login</label>
    <input name="login" type="text" class="form-control" id="exampleInputPassword1" placeholder="login">
  </div>
  <div class="form-group">
    <label class="form-label" for="exampleInputPassword1">Hasło</label>
    <input name="pass1" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
</form>   
      </div>

      <div class="modal-footer"><button type="submit" class="btn btn-primary">Zaloguj</button>
      <button type="button" class="btn btn-danger" data-dismiss="modal">Zamknij</button>
        
      </div>
    </div>
  </div>
</div>


</div>

</body>
</html>
