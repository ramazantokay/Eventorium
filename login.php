<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Sign in for Eventorium</title>

  <!-- Bootstrap core CSS -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/signin.css" rel="stylesheet">
  

</head>

<body class="text-center">
  <form class="form-signin" action="panel.php" method="POST">
   <a href="index.php"><img class="mb-4" src="images/eventoriumlogo.png" alt="" width="172" height="172"></a> 
   <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
   <label for="inputEmail" class="sr-only">User Name</label>
   
   <input type="text"  name="usr" id="inputEmail" class="form-control" placeholder="User Name" required autofocus>
   <label for="inputPassword" class="sr-only">Password</label>
   
   <input type="password" name="pass" id="inputPassword" class="form-control" placeholder="Password" required >
   <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  <button class="btn btn-lg btn-info btn-block" type="submit">Sign in</button>
  <a href="register.php" class="btn btn-lg btn-primary btn-block" role="button" >Register</a>
  <p class="mt-5 mb-3 text-muted">&copy; 2018</p>
</form>
</body>
</html>
