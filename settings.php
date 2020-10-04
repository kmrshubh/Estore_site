<?php
require_once("common.php");
if (!isset($_SESSION['email'])) {
    header('location: home.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Settings | Life Style Store</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap/js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php include 'header.php'; ?>
        <div class="container-fluid" id="content">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4" id="settings-container">
                    <h4>Change Password</h4>
                    <form action="settings_script.php" method="POST">
                        <div class="form-group">
                            <input type="password" class="form-control" name="old-password"  placeholder="Old Password" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="New Password" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password1"  placeholder="Re-type New Password" required = "true">
                        </div>
                        <button type="submit" class="btn btn-primary">Change</button>
                       <!-- ?php
                        echo "<br><br><b class='red'>" . $_GET['error'] . "</b>";
                        ?>-->
                    </form>
                </div>
            </div>
        </div>
        <?php include("footer.php"); ?>
    </body>
</html>
