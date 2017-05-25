<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="logo1.png" />
      <title>Frizin -The Perfect Foodie-Store</title>
    <meta name="description" content="Spirit8 is a Digital agency one page template built based on bootstrap framework. This template is design by Robert Berki and coded by Jenn Pereira. It is simple, mobile responsive, perfect for portfolio and agency websites. Get this for free exclusively at ThemeForces.com">
    <meta name="keywords" content="bootstrap theme, portfolio template, digital agency, onepage, mobile responsive, spirit8, free website, free theme, themeforces themes, themeforces wordpress themes, themeforces bootstrap theme">
    <meta name="author" content="ThemeForces.com">
    
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

    <!-- Slider
    ================================================== -->
    <link href="css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="css/owl.theme.css" rel="stylesheet" media="screen">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="js/modernizr.custom.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Navigation
    ==========================================-->
    <nav id="tf-menu" class="navbar navbar-default navbar-fixed-top on-dup">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
          <a href="index.php"><img src="img/logo.jpg" width="120" height="50" alt="Logo" /></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php" class="page-scroll">Home</a></li>
            <li><a href="index.php" class="page-scroll">Store</a></li>
            <li><a href="index.php" class="page-scroll">About</a></li>
            <li><a href="index.php" class="page-scroll">Testimonials</a></li>
            <li><a href="index.php" class="page-scroll">Contact</a></li>
             <?php 
             if (isset($_SESSION['email'])) {?>
             <li><a href="profile.php" class="page-scroll"> <?php echo $_SESSION['email'] ?> </a></li> 
            <?php } else { ?>             
            <li><a href="login.html" class="page-scroll">Login/Sign Up</a></li> <?php } ?>
<li><img src="img/logo.png" height="40px"; width="40px"></li><li><a class="page-scroll" style="color:green; font-family:impact; font-size:20px;">9933 12 45 12</a></li>
            <li><a href="cart.php" class="page-scroll"> <img src="img/cart1.png" width="30" height="30"></a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <!-- Home Page
    ==========================================-->
    <div id="tf-home" class="text-center">

    </div>

    
   








<!-- About Us Page
    ==========================================-->
    <div id="tf-about">
        <div class="container">
            <div class="row">
                
                
            </div>
            <br></br>
            <h2 style="font-family:helvetica;">THE TEAM OF  <span style="color:orange;">FRIZIN</span></h2><br></br>
            <br></br>
                 <section class="container">
  <div class="row white">
        <div class="block">

          <div class="col-xs-12 col-sm-6 col-md-4">
              <ul class="pricing p-green">
                <li>
                  <img src="img/akashdeep.jpg" height="160px" width="160px">
                  
                </li>
                <li>Co-Founder</li>
                <li>Head of Website Development</li>
                <li>Back-End Developer at FRIZIN FOODS</li>
                
                
                <li>
                  <button><a href="http://www.facebook.com/akashdeep.jimmy">Get in Touch</a></button>
                </li>
              </ul>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-4">
              <ul class="pricing p-yel">
                <li>
                  <img src="img/soumya.jpg" height="160px" width="160px">
                </li>
                <li>Co-Founder</li>
                <li>Head of Website Designing</li>
                <li>Front-End Developer at FRIZIN FOODS</li>
                
                
                <li>
                  <button><a href="https://www.facebook.com/soumyabrata.rakshit2">Get in Touch</a></button>
                </li>
              </ul>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-4">
              <ul class="pricing p-red">
                <li>
                  <img src="img/debarpan.jpg" height="160px" width="160px">
                </li>
                <li>Co-Founder</li>
                <li>Color Customization</li>
                <li>HTML5 & CSS3</li>
                
                
                <li>
                  <button><a href="http://www.facebook.com/debolinahaldar2001">Get in Touch</a></button>
                </li>
              </ul>
          </div>

          


        </div><!-- /block -->
      </div><!-- /row -->
  </section>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>


        </div>
    </div>






    <nav id="footer">
        <div class="container">
          <div class="shoping">
   <div class="container">
     <div class="shpng-grids">
       <div class="col-md-4 shpng-grid">
         <h3>Free Delivery</h3>
         <p>On All Orders</p>
       </div>
       <div class="col-md-4 shpng-grid">
         <h3>Fastest in Town</h3>
         <p>Delivery in 30-45 minutes</p>
       </div>
       <div class="col-md-4 shpng-grid">
         <h3>COD Available</h3>
         <p>Cash On Delivery</p>
       </div>
       <div class="clearfix"></div>
     </div>
   </div>
</div>
<!---->
<div class="footer">
   <div class="container">
     <div class="ftr-grids">
       <div class="col-md-3 ftr-grid">
         <h4>About Us</h4>
         <ul>
           <li><a href="who.php">Who We Are</a></li>
           <li><a href="contact.php">Contact Us</a></li>
           <li><a href="#">Our Sites</a></li>
           <li><a href="#">In The News</a></li>
           <li><a href="#">Team</a></li>
           <li><a href="#">Careers</a></li>          
         </ul>
       </div>
       <div class="col-md-3 ftr-grid">
         <h4>Customer service</h4>
         <ul>
           <li><a href="#">FAQ</a></li>
           <li><a href="#">Shipping</a></li>
           <li><a href="#">Cancellation</a></li>
           <li><a href="#">Returns</a></li>
           <li><a href="#">Bulk Orders</a></li>
           <li><a href="#">Buying Guides</a></li>          
         </ul>
       </div>
       <div class="col-md-3 ftr-grid">
         <h4>Your account</h4>
         <ul>
           <li><a href="account.html">Your Account</a></li>
           <li><a href="#">Personal Information</a></li>
           <li><a href="#">Addresses</a></li>
           <li><a href="#">Discount</a></li>
           <li><a href="#">Track your order</a></li>                     
         </ul>
       </div>
       <div class="col-md-3 ftr-grid">
         <h4>Categories</h4>
         <ul>
           <li><a href="chicken.php"> Chicken</a></li>
           <li><a href="mutton.php"> Mutton</a></li>
           <li><a href="pork.php"> Pork</a></li>
           <li><a href="dairy.php"> Dairy</a></li>
           <li><a href="fish.php"> Fish and Sea Food</a></li>
           <li><a href="ready.php"> Ready to Eats</a></li>          
         </ul>
       </div>
       <div class="clearfix"></div>
     </div>   
   </div>
</div>
            <div class="pull-left fnav">
                <p>ALL RIGHTS RESERVED. COPYRIGHT © 2015. Designed and Coded by <a href="https://www.facebook.com/frizinfoods">Frizin.com </a>Developers</p>
            </div>
            <div class="pull-right fnav">
                <ul class="footer-social">
                    <li><a href="http://www.facebook.com/frizin.in"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="http://www.twitter.com/yippix"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.1.11.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/SmoothScroll.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.js"></script>

    <script src="js/owl.carousel.js"></script>

    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="js/main.js"></script>

  </body>
</html>