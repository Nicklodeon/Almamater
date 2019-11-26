  <?php include('server.php')?>
  <!DOCTYPE html>
  <html>
  <head>
  	<title>SignUp</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="signup.css">
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
        <li><a href="about.html">About</a></li>
        <li><a href="team.html">Our Team</a></li>
         
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="signup.html">SignUp <i class="fa fa-user-plus"></i></a></li>
        <li><a href="login.html">Login <i class="fa fa-user"></i></a></li>

     </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<br><br><br><br><br>
  <div id="login-box">
  <div class="left">
    		<h1>Register!</h1>
   
    	<form action="registration.php" method="post">

    		<div>
    			
    			
                <input type="text" name="username" placeholder="Username" required>

    		</div>
    		<div>
    			
    			
                <input type="text" name="email" placeholder="Email" required>

    		</div>
    		<div>
    			
    			
                <input type="password" name="password1" placeholder="Password" required>

    		</div>
    		<div>
    			
    			
                <input type="password" name="password2" placeholder="Confirm Password" required>

    		</div>
          
            <div>

                 <input type="submit" name="signup_submit" value="Sign up" />
           </div>
     
           <p>Already a user?</p><a href="login.php"><b>Login</b></a>  
  
    	</form>
   </div>
  
  <div class="right">
  	<span>
  		<br>
  		<br>
  		<br>
  		<br>
  	</span>
    <button class="social-signin facebook">Log in with facebook</button>
    <button class="social-signin twitter">Log in with Twitter</button>
    <button class="social-signin google">Log in with Google+</button>
  </div>
  <div class="or">OR</div>
</div>
    

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
  </html>