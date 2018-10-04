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
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet" />
    <style>
      .text-center img{
        width:250px;
        height:300px;
        margin:2%;
        border-radius:5px;
      }
      .ff{
        margin:0px;
        font-size:22px;
      }

@import url("https://fonts.googleapis.com/css?family=Lato:400,700");
* {
  box-sizing: border-box;
}


a {
  text-transform: uppercase;
  text-decoration: none;
  font-weight: 700;
}

@-webkit-keyframes top {
  from {
    -webkit-transform: translate(0rem, 0);
            transform: translate(0rem, 0);
  }
  to {
    -webkit-transform: translate(0rem, 3.5rem);
            transform: translate(0rem, 3.5rem);
  }
}

@keyframes top {
  from {
    -webkit-transform: translate(0rem, 0);
            transform: translate(0rem, 0);
  }
  to {
    -webkit-transform: translate(0rem, 3.5rem);
            transform: translate(0rem, 3.5rem);
  }
}
@-webkit-keyframes bottom {
  from {
    -webkit-transform: translate(-11.5rem, 0);
            transform: translate(-11.5rem, 0);
  }
  to {
    -webkit-transform: translate(0rem, 0);
            transform: translate(0rem, 0);
  }
}
@keyframes bottom {
  from {
    -webkit-transform: translate(-11.5rem, 0);
            transform: translate(-11.5rem, 0);
  }
  to {
    -webkit-transform: translate(0rem, 0);
            transform: translate(0rem, 0);
  }
}
.btn {
  position: relative;
  letter-spacing: 0.15em;
  margin: 0 auto;
  padding: 1rem 2.5rem;
  background: transparent;
  outline: none;
  font-size: 28px;
  color: #111111;
  transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55) 0.15s;
}
.btn::after, .btn::before {
  content: "";
  position: absolute;
  height: 40%;
  width: 10%;
  transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  z-index: -2;
  border-radius: 50%;
}
.btn::before {
  background-color: #c92918;
  top: -0.75rem;
  left: 0.5rem;
  -webkit-animation: top 2s cubic-bezier(0.68, -0.55, 0.265, 1.55) 0.25s infinite alternate;
          animation: top 2s cubic-bezier(0.68, -0.55, 0.265, 1.55) 0.25s infinite alternate;
}
.btn::after {
  background-color: #e74c3c;
  top: 3rem;
  left: 13rem;
  -webkit-animation: bottom 2s cubic-bezier(0.68, -0.55, 0.265, 1.55) 0.5s infinite alternate;
          animation: bottom 2s cubic-bezier(0.68, -0.55, 0.265, 1.55) 0.5s infinite alternate;
}
.btn:hover {
  color: white;
}
.btn:hover::before, .btn:hover::after {
  top: 0;
  height: 100%;
  width: 100%;
  border-radius: 0;
  -webkit-animation: none;
          animation: none;
}
.btn:hover::after {
  left: 0rem;
}
.btn:hover::before {
  top: 0.5rem;
  left: 0.35rem;
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
$imgsrc=$_GET['imgsrc'];

$sql = "SELECT * FROM eBooks where imgsrc ='".$imgsrc."'"; 
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row

    while($row = mysqli_fetch_assoc($result)) {

        echo "<div class='text-center'><img src='images/".$row["imgsrc"]."' /><br>
        <div class='ff'><b>Book Name: </b>".$row["name"]."</div><br>
        <div class='ff'><b>Author: </b>".$row["author"]."</div><br>
        <div class='ff'><b>Year: </b>".$row["date"]."</div></div>";
        echo '<center><a class="btn" href="pdf.php?pdfname='.$row['name'].'.pdf">Study Now</a></center>'; 
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
<br>

<br>
  <?php include('includes/footer.php');?>

</body>
</html>
