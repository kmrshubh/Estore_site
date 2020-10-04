<?php
include 'common.php';
?>


<!DOCTYPE html>

<html>
    <head>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <title>E Store</title>
    </head>
    <body>
        
        <?php
        include 'header.php';
        ?>

       <div id="item">
         <div class="row text-center">
                <div class="col-sm-4 home-feature">
                    <div class="thumbnail">
                        <img src="img/EOS.jpg" alt="EOS" id="thumb">
                        <div class="caption">
                            <h3>Cannon EOS </h3>
                            <p>Price: Rs. 28000.00 </p>
                           <?php if (!isset($_SESSION['email'])) 
                        { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                        </p> <?php } else { ?> 
                        <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                        <?php }
                          ?>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 home-feature">
                    <div class="thumbnail" >
                        <img src="img/D3400.jpg" alt="" id="thumb">
                        <div class="caption">
                            <h3>Nikon D3400 </h3>
                            <p>Price: Rs. 40,000.00 </p>
                           <?php if (!isset($_SESSION['email'])) 
                        { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                        </p> <?php } else { ?> 
                        <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                        <?php }
                          ?>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 home-feature">
                    <div class="thumbnail">
                        <img src="img/Alpha.jpeg" alt="" id="thumb">
                        <div class="caption">
                            <h3>Sony Alpha</h3>
                            <p>Price: Rs. 55000.00</p>
                            <?php if (!isset($_SESSION['email'])) 
                        { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                        </p> <?php } else { ?> 
                        <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                        <?php }
                          ?>
                        </div>
                    </div>
                </div>
         </div>
        </div>
        
        <div id="item">
         <div class="row text-center" >
                <div class="col-sm-4 home-feature">
                    <div class="thumbnail">
                        <img src="img/powershot.jpg" alt="" id="thumb">
                        <div class="caption">
                            <h3>Canon Powershot </h3>
                            <p>Price: Rs. 15000.00 </p>
                            <?php if (!isset($_SESSION['email'])) 
                        { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                        </p> <?php } else { ?> 
                        <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                        <?php }
                          ?>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 home-feature">
                    <div class="thumbnail">
                        <img src="img/d5300.jpg" alt=""  id="thumb">
                        <div class="caption">
                            <h3>Nikon D5300</h3>
                            <p>Price: Rs. 45,000.00 </p>
                            <?php if (!isset($_SESSION['email'])) 
                        { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                        </p> <?php } else { ?> 
                        <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                        <?php }
                          ?>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 home-feature">
                    <div class="thumbnail">
                        <img src="img/d3424.jpg" alt="" id="thumb">
                        <div class="caption">
                            <h3>Canon D3400 24MP</h3>
                            <p>Price: Rs. 45000.00</p>
                           <?php if (!isset($_SESSION['email'])) 
                        { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                        <</p> <?php } else { ?> 
                        <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                        <?php }
                          ?>
                        </div>
                    </div>
                </div>
         </div>
        </div>
        
        <br><br>
        <br><br><br>
        
        <?php
        include 'footer.php';
        ?>
    </body>
</html>

