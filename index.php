<?php
	session_start();
	require_once('dbconfig/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>BVK Sports Club</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <!-- Bootstrap Font awesome icons-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
   
    <!--custom css-->
    <link rel="icon" type="image/png" href="images/icons/favicon.jpg"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/footer1.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
   <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

</head>

<body>

<!-----------------------------nav bar--------------------------------------------->
    <nav class="navbar navbar-expand-md ">

        <a class="navbar-brand" href="index.php">BVK Sports Club</strong><strong class="strong"></strong>
        </a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a> <span class="sr-only">(current)</span></a>
                </li>
                
               <li class="nav-item">
                    <a class="nav-link" href="items/booking.php">Slot Booking</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="items/payment.php">Payment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Log Out</a>
                </li>
                <li class="nav-item">
                <?php echo '<img class="avatar" src="'.$_SESSION["imglink"].'" style="width:45px;border-radius:50px;">';?>
                </li>
            </ul>
        </div>
    </nav>
   

    <!--------------------------------curosel effect-------------------------------->
    
    <form class="myform" action="index.php" method="post">	
    

    <div id="slides" class="carousel slide" data-ride="carousel">

        
        
        <ul class="carousel-indicators">
            <li data-target="#slides" data-slide-to="0" class="active"></li>
            <li data-target="#slides" data-slide-to="1"></li>
            <li data-target="#slides" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/all images/15.jpg" alt="Los Angeles" width="100%" height="600">
                <div class="carousel-caption">
                <h5 style="font-family:bold;font-color:cyan;">Welcome <?php echo $_SESSION['username']; ?></h5> 
                    <h1 class="display-2">Welcome To BVK Sports Club</h1>
                     
                    
                   </div>
                  </div>
            <div class="carousel-item">
                <img src="images/all images/16.jpg" alt="Chicago" width="100%" height="600">
                <div class="carousel-caption t2">
                <h5>Welcome <?php echo $_SESSION['username']; ?></h5>
                    <h1>Welcome To BVK Sports Club</h1>
                    
                    
                </div>
            </div>

            <div class="carousel-item ">
                <img src="images/all images/15.jpg" alt="Los Angeles" width="100%" height="600">
                <div class="carousel-caption">
                <h5 style="font-family:bold;font-color:cyan;">Welcome <?php echo $_SESSION['username']; ?></h5> 
                    <h1 class="display-2">Welcome To BVK Sports Club</h1>
                     
                    
                   </div>
                  </div>
            
        </div>

    </div>


   
    
    </form>

<!-- The content of your page would go here. -->

        <footer class="footer-distributed">

            <div class="footer-left">

                <h3>BVK Sports</h3>

                <p class="footer-links">
                <a href="index.php">Home</a>
                .
                <a href="items/booking.php">Slot Booking</a>
                .
                <a href="items/payment.php">Payment</a>
                .
                <a href="login.php">Log Out</a>
            </p>

                <p class="footer-company-name">BVK Sports Club &copy; 2020</p>
            </div>

            <div class="footer-center">

                <div>
                    <i class="fa fa-map-marker"></i>
                    <p><span>Sri Padmavathi colony,near hayath nagar bus depot</span>Hayath nagar, Hyderabad - 501505</p>
                </div>

                <div>
                <a href="tel:+91 7382001969"> <i class="fa fa-phone"></i>
                    <p>+91 7382001969</p>
</a>
                </div>

                <div>
                    <i class="fa fa-envelope"></i>
                    <p><a href="#">bvsaikiranrocks@gmail.com</a></p>
                </div>

            </div>

            <div class="footer-right">

                <p class="footer-company-about">
                    <span>About the BVK Sports Club</span>
                    BVK Sports Club was formed in 1994
                </p>

                <div class="footer-icons">

                    <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
                    <a href="https://www.whatsapp.com/"><i class="fa fa-whatsapp"></i></a>
                    <a href="https://www.linkedin.com/in/b-v-sai-kiran-b5064517a/"><i class="fa fa-linkedin"></i></a>
                    <a href="https://mail.google.com"><i class="fa fa-envelope"></i></a>

                </div>

            </div>

        </footer>
        <!--======================================================================================-->
        <!-------------footer----------------------------------------->

        <div class="container-fluid color5">

            <h1 class="display-2">BVK SPORTS</h1>
            <p class="display-2">CLUB</p>
        </div>



      
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>



</body>

</html>

