
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
  <title>Scissors</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/login.js"></script>
   <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet">
      <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>Fullscreen Background Image Slideshow with CSS3</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Fullscreen Background Image Slideshow with CSS3 - A Css-only fullscreen background image slideshow" />
        <meta name="keywords" content="css3, css-only, fullscreen, background, slideshow, images, content" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style2.css" />
		<script type="text/javascript" src="js/modernizr.custom.86080.js"></script>
 </head>
 <body id="page">
 
    <?php include('includes/header.php');?>
      
<br><br><br>
  <ul class="cb-slideshow">
            <li><span>Image 01</span><div><h3>The·Style·U·WanT</h3></div></li>
            <li><span>Image 02</span><div><h3>BriD·aL·PacKagEs</h3></div></li>
            <li><span>Image 03</span><div><h3>Trend·iNG</h3></div></li>
            <li><span>Image 04</span><div><h3>Simp·LE</h3></div></li>
            <li><span>Image 05</span><div><h3>MakE·OvER</h3></div></li>
            <li><span>Image 06</span><div><h3>Class·Y</h3></div></li>
        </ul>
        
            </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <?php include('includes/footer.php');?>


    </body>

</html>
