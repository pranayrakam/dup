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

<!DOCTYPE html>

<html>
<head>
	<title></title>
	  <link rel="stylesheet" href="css/style.css"/>
	  <title>Scissors</title>
	  <link rel="stylesheet" href="css/bootstrap.min.css">
	  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
	  <script src="js/jquery.min.js"></script>
	  <script src="js/bootstrap.min.js"></script>
	  <script src="js/login.js"></script>
   	  <!-- Custom styles for this template -->
      <link href="navbar-fixed-top.css" rel="stylesheet">
      <style>
      	#cont{
      		margin-left:5%;
      	}
      </style>
</head>
<body >
<?php include('includes/header.php') ?>
<br><br>
<img src="images/abtpic1.jpg" style="height: 500px; width: 75%; margin-left: 180px; "><br>
<div id='cont'>
<h1 style="font-size: 40px;margin: 05px; color:#1DD5B6 ;">We envison a world where anyone,anywhere can transform their life by accessing                            the world's best learning experience</h1>
<img src="images/abtpic.jpg" style="height:175px ;width: 175px;">
	<h2> 
	<u>OUR STORY</u> </h2>
	<div style='font-size:24px'>	
	 <br>founded by harvard university and MIT in 2012,edx is an online,<br>learning destination and MOOC provider, offering high_quality<br> courses from the world's best of universities and institutions to<br>learners everywhere. <br><br>With more than 130 global partners,we are proud to count the<br> world's leading universities,nonprofits, and institutions as our<br> members.Edx university members top the Qs world university<br> Ranking with our founders receiving the top honors,and edx<br> partner institutions ranking highly on the full list.
	</div>
</div>
<br><br>

<?php include('includes/footer.php') ?>
</body>
</html>