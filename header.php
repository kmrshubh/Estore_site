<!DOCTYPE html>

<html>
    <head>
        <title>header</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap/js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body> 
       <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
           <div class="navbar-header">
           <button type="button" class="navbar-toggle" data-toggle="collapse" datatarget="#myNavbar">
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
           </button>
               <?php
             if (isset($_SESSION['email'])) {
              ?>
               <a class="navbar-brand" href="home.php">E Store</a>
          <?php
          } else {
         ?>
          <a class="navbar-brand" href="index.php">E Store</a>
          <?php
           }
           ?>
             </div>
            <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
            <?php
             if (isset($_SESSION['email'])) {
              ?>
<li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
<li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span>
Settings</a></li>
<li><a href = "logout_script.php"><span class = "glyphicon glyphicon-user"></span> Logout</a></li>

      <?php
          } else {
      ?>
<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>
Sign Up</a></li>
<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>
Login</a></li>
<li><a href="about.php"><span class="glyphicon glyphicon-tasks"></span>
About Us</a></li>
<li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span>
Contact Us</a></li>
<?php
}
?>
</ul>
</div>
</div>
</div>
        
    </body>
</html>