<!DOCTYPE html>
<html>
<head>
	<title>Signup/login</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body>

	<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="Home.html">AlmaMater</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="Home.html">Home</a></li>
        
        <li><a href="team.html">Our Team</a></li>
        
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="userregister.php">Register/Login<i class="fa fa-user-plus"></i></a></li>
        

     </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<br><br><br><br><br><br><br><br><br><br><br>
<div class="container">
	<div class="row">
		<div class="col-md-6 register-left">
          	<h2>Register!</h2>
          	<form action="registration.php" method="post">
          		<label>Username</label>
          		<input type="text" name="user" class="form-control" required>
          		<label>Email</label>
          		<input type="email" name="email" class="form-control" required>
          		<label>Password</label>
          		<input type="password" name="password" class="form-control" required>
          		<br>
          		<button type="submit" class="btn btn-primary">Register</button>
          	</form>
          </div>	
          <div class="col-md-6 login-right">
          	<h2>Login!</h2>
          	<form action="validation.php" method="post">
          		<label>Username</label>
          		<input type="text" name="user" class="form-control" required>
          		<label>Password</label>
          		<input type="password" name="password" class="form-control" required>
          		<br>
          		<button type="submit" class="btn btn-primary">Login</button>
          	</form>
          </div>		
	</div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>