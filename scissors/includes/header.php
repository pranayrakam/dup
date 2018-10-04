    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><b>Scissors</b></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">Home</a></li>
            <li><a href="men.php">MeN</a></li>
               <li><a href="women.php">WoMeN</a></li>
            <li><a href="package.php">PAckages</a></li>
            <li><a href="about.php">About Us</a></li>
              <?php  if (isset($_SESSION['username'])) : ?>
                <li><a href="admin.php">Welcome <strong><?php echo $_SESSION['username']; ?></strong></a></li>
                <li><a href="index.php?logout='1'">Logout</a> </li>
              <?php else : ?>
                <li><a href="login.php">Login</a></li>
              <?php endif ?>
          </ul>
        </div>
      </div>
    </nav>
        <!--/.nav-collapse -->   