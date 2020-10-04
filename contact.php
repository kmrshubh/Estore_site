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
            <div >
              <div class="col-xs-8">
                  <h2>Live Support</h2>
                  <h4>24 Hours a Day| 7 Days a Week| 365 days a year Live Technical Support</h4>
                   <p font-size="20px">To chat with a Customer Care Associate, 
                      please log in to your Payoneer account and we will be happy to assist you. Live chat is available in English
                      , Spanish and Russian.

                   </p>
                
              </div>
              <div class="col-xs-4">
                  
                  <img src="img/contact" alt="contact" id="cont">
                  
              </div>
            </div> 
        <div >
              <div class="col-xs-8">
                  <h2>Contact Us</h2>
                   
                       <form>
                           <div class='form-group'>
                               <label for='email'>Email</label>
                               <input type='email' class='form-control' id='email' name='email'>
                           </div>
                          <div class='form-group'>
                              <label for='name'>Name</label>
                              <input type='text' class='form-control' id='name' name='name'>
                          </div>
                           <div class='form-group'>
                               <label for='message'>Message</label><br>
                               <textarea name="comment" form="usrform" class='form-control'>Enter text here...</textarea>
                           </div>  
                           <input type='submit' value="Submit" class='btn btn-primary'>
                        </form>
                  <br><br><br><br><br>
                  
              </div>
              <div class="col-xs-4">
                  <h2>Address</h2>
                  Xyz<br>
                  Sector 12 Dwarka<br>
                  New Delhi-110077<br>
              </div>
            </div>
              
        <?php
        include 'footer.php';
        ?>
    </body>
</html>

