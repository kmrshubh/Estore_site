<?php
require("common.php");
// Redirects the user to products page if logged in.
if (isset($_SESSION['email'])) {
    header('location: home.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login | E Store</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap/js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    
    <body>
        <?php include 'header.php'; ?>
        <div id="content">
            <div class="container-fluid decor_bg" id="login-panel">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-primary" >
                            <div class="panel-heading">
                                <h4>LOGIN</h4>
                            </div>
                            <div class="panel-body">
                                <p class="text-warning"><i>Login to make a purchase</i><p>
                                <form action="login_submit.php" method="POST">
                                    <div class="form-group">
                                        <input type="email" class="form-control"  placeholder="Email" name="e-mail" required = "true">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="password" required = "true">
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Login</button><br><br>
                                    <?php echo $_GET['error']; ?>
                                </form><br/>
                            </div>
                            <div class="panel-footer"><p>Don't have an account? <a href="signup.php">Register</a></p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          <br><br><br><br>
        <?php include 'footer.php'; ?>
    </body>
</html>
