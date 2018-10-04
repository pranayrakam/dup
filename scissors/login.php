<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
    <link rel="stylesheet" href="css/style.css"/>
  <title>Login</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/login.js"></script>
   <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet">
  <style>
    #bg{
      position: absolute;
      top:0;
      left:0;
      width:100%;
      height: 100%;
      z-index:-1;
      background-image: url('images/test.jpg');
      background-repeat: no-repeat;
      background-size: cover;
      opacity:15;
    }
  </style>
</head>
<body>
  <?php include("includes/header.php") ?>
  <br><br>
  <div id='bg'></div>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Register here</a>
  	</p>
  </form>
</body>
</html>