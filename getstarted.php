<!DOCTYPE html>
<html>
<head>
	<title>Get Started</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="getstarted.css">
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
        <li><a href="signup.html">SignUp <i class="fa fa-user-plus"></i></a></li>
        <li><a href="login.html">Login <i class="fa fa-user"></i></a></li>

     </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
   <br><br><br><br>
<div class="container">

    <form class="well form-horizontal" action="display1.php" method="get"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend>Find Your College!</legend>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">First Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="first_name" placeholder="First Name" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Last Name</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="last_name" placeholder="Last Name" class="form-control"  type="text">
    </div>
  </div>
</div>
       <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
    </div>
  </div>
</div>
<div class="form-group">
                        <label class="col-md-4 control-label">Exam:</label>
                        <div class="col-md-4">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="exam" value="yes" /> JEE Mains
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="exam" value="no" /> JEE Advanced
                                </label>
                            </div>
                        </div>
                    </div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">Rank</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="rank" placeholder="Rank" class="form-control"  type="text">
    </div>
  </div>
</div>


<div class="form-group"> 
  <label class="col-md-4 control-label">Branch</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        
     <label for="Branch"></label>
   <select name=branch>
<option value="">------------Select Branch------------</option>
<option value="cse">Computer Science Engineering</option>
<option value="mech">Mechanical Engineering</option>
<option value="elec">Electrical Engineering</option>
<option value="civil">Civil Engineering</option>
<option value="chem">Chemical Engineering</option>

</select>
  </div>
</div>
</div>

<!-- Text input-->
 
<div class="form-group"> 
  <label class="col-md-4 control-label">Category</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        
     <label for="category"></label>
   <select name=category>
<option value="">------------Select Category------------</option>
<option value="gen">General</option>
<option value="obc">OBC</option>
<option value="st">ST</option>
<option value="sc">SC</option>

</select>
  </div>
</div>
</div>
  

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" >Find <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>

</fieldset>
</form>

</div>
    </div><!-- /.container -->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>