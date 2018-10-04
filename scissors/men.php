
<img src="b5.png">
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
      .column img{
        width:200px;
        height:250px;
        margin:2%;
        border-radius:5px;
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
      <h2><font color='black'>MEN HairStyles</font></h2>

      <div class="row left1"> 
          <div class="col-md-4">
          <img src="images/m1%20(1).jpg" class="img-responsive" />
              <div class="left">
              <p>Hairstyle name: </p>
              <p>Price:</p>
                  <p><a href="#" class="btn btn-primary">Get an Appointment</a></p>
                  </div>
          </div>
          <div class="col-md-4">
          <img src="images/m2.jpg" class="img-responsive" />
              <div class="left">
              <p>Hairstyle name: </p>
              <p>Price:</p>
                  <p><a href="#" class="btn btn-primary">Get an Appointment</a></p>
                  </div>
          </div>
           <div class="col-md-4">
          <img src="images/m1%20(3).jpg" class="img-responsive" />
              <div class="left">
              <p>Hairstyle name: </p>
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
</script>
</body>
</html>
