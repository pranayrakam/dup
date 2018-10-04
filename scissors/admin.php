
<!DOCTYPE html>
<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<html>
 <head>
  <link rel="stylesheet" href="css/style.css"/>
  <title>Welcome</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/login.js"></script>
   <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet">
    <style>
      .btn {
  color: #fff;
  cursor: pointer;
  // display: block;
  font-size:20px;
  font-weight: 400;
  line-height: 45px;
  margin: 0 0 2vw;
  max-width: 160px; 
  position: relative;
  text-decoration: none;
  text-transform: uppercase;
  width: 100%; 
  
  &:hover { text-decoration: none; }
  
}

    </style>
 </head>
 <body>
 
    <?php include('includes/header.php');?>
      
<br><br><br><br>    
  <div class="container text-center">
    <img src='images/profile.png' style='width:200px;height:200px'/>
      <h2><font color='brown'>
        <?php  if (isset($_SESSION['username'])) : ?>
                <strong><?php echo $_SESSION['username']; ?></strong>
              <?php else : ?>
                <strong>USER</strong>
              <?php endif ?>
      </font></h2><br>
  </div>
<br>
  <?php include('includes/footer.php');?>



 </body>
</html>
