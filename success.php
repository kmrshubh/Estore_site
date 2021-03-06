<?php
require("common.php");
// Redirects the user to products page if logged in.
if (isset($_SESSION['email'])) {
    header('location: confirm.php');
}
$user_id = $_SESSION['user_id'];
$item_ids_string = $_GET['itemsid'];

//We will change the status of the items purchased by the user to 'Confirmed'
$query = "UPDATE users_items SET status='Confirmed' WHERE user_id=" . $user_id . " AND item_id IN (" . $item_ids_string . ") and status='Added to cart'";
mysqli_query($con, $query) or die($mysqli_error($con));
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>success | E Store</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap/js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php include 'header.php'; ?>
    
    <div class="container-fluid" id="content">
            <div class="col-md-12">
                <div class="jumbotron">
                      <h3 align="center"> Thank you for ordering from E store. The order shall be delivered to you shortly</h3><hr>
                      <p align="center">Click <a href="home.php">here</a> to purchase any other item.</p>
                </div>
            </div>
        </div>
    
    <?php include 'footer.php'; ?>
    
</body>
</html>

