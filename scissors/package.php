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
      #test_box{
        width:100%;
        min-height:400px;
        text-align: center;
      }

    </style>
 </head>
 <body>
    <?php include('includes/header.php');?>
<br><br><br>
     <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM eBooks";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
  echo "<div id='images' style='display:none'>";
    while($row = mysqli_fetch_assoc($result)) {

        echo "<a href='details.php?imgsrc=". $row["imgsrc"] ."'><img src='images/" . $row["imgsrc"]. "' /></a>,,"; 
    }
  echo "</div>";  
} 

mysqli_close($conn);
?>

  <div class="container bg">
      <h2><font color='black'>Packages</font></h2>

      <div class="row left1"> 
          <div class="col-md-4">
          <img src="images/p1.jpg" class="img-responsive" />
              <div class="left">
              <p>Package: </p>
              <p>Price:</p>
                  <p><a href="#" class="btn btn-primary">Get an Appointment</a></p>
                  </div>
          </div>
          <div class="col-md-4">
          <img src="images/p1.jpg" class="img-responsive" />
              <div class="left">
              <p>Package: </p>
              <p>Price:</p>
                  <p><a href="#" class="btn btn-primary">Get an Appointment</a></p>
                  </div>
          </div>
           <div class="col-md-4">
          <img src="images/p1.jpg" class="img-responsive" />
              <div class="left">
              <p>Package: </p>
              <p>Price:</p>
                  <p><a href="#" class="btn btn-primary">Get an Appointment</a></p>
                  </div>
          </div>

  </div>
<br>
  <?php include('includes/footer.php');?>
<script>
  
  ff = $("#images").html().split(",,");
  for(i=0;i<ff.length-1;i++){
    $(".column").append(ff[i]);
  }
  
  <div id='test_box'>
    <h2>Packages</h2>
  </div>
  
  <?php include('includes/footer.php');?>
</body>
</html>
