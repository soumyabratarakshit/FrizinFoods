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
                
                <div class="col-md-6">
             
                </div>
            </div>
            <br></br>
            <h6 style="font-family:georgia;">SELECT FROM A WIDE RANGE OF <span style="color:orange;">CHICKEN</span> ITEMS...</h2><br></br>
            <br></br>
                 <div class="col-md-3 product-model-sec">

            <a href="drums.php">
             <img src="img/portfolio/01.jpg"  height="260px" width="200px">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
                <br></br>
              <div class="product-info-cust">
                <h5 style="color:black; font-family:verdana";>CHICKEN DRUMSTICKS</h5>
                <p style="color:red;">₹ 135 / 500 g</p>
               
              </div>
            </div>




             <div class="col-md-3 product-model-sec">

            <a href="chicboneless.php">
             <img src="img/portfolio/02.jpg"  height="260px" width="200px">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
                <br></br>
              <div class="product-info-cust">
                <h5 style="color:black; font-family:verdana";>CHICKEN BONELESS</h5>
                <p style="color:red;">₹ 160 / 500 g</p>
              </div>
            </div>



            <div class="col-md-3 product-model-sec">

            <a href="chickeema.php">
             <img src="img/portfolio/03.jpg"  height="260px" width="200px">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
                <br></br>
              <div class="product-info-cust">
                <h5 style="color:black; font-family:verdana";>CHICKEN KEEMA</h5>
                <p style="color:red;">₹ 165 / 500 g</p>
              </div>
            </div>



            <div class="col-md-3 product-model-sec">

            <a href="wholechicskinless.php">
             <img src="img/portfolio/04.jpg"  height="260px" width="200px">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
                <br></br>
              <div class="product-info-cust">
                <h5 style="color:black; font-family:verdana";>WHOLE SKINLESS CHICKEN</h5>
                <p style="color:red;">₹ 190 ~ 1 Kg</p> 
              </div>
            </div>



            <div class="col-md-3 product-model-sec">

            <br></br><br></br>
            <a href="chicwings.php">
             <img src="img/portfolio/05.jpg"  height="260px" width="200px">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
                <br></br>
              <div class="product-info-cust">
                <h5 style="color:black; font-family:verdana";>CHICKEN WINGS</h5>
                <p style="color:red;">₹ 140 / 500 g</p>
              </div>
            </div>



            <div class="col-md-3 product-model-sec">
<br></br><br></br>
            <a href="chicbreast.php">
             <img src="img/portfolio/06.jpg"  height="260px" width="200px">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
                <br></br>
              <div class="product-info-cust">
                <h5 style="color:black; font-family:verdana";>CHICKEN BREAST BONELESS</h5>
                <p style="color:red;">₹ 160 / 500 g</p>
              </div>
            </div>



            <div class="col-md-3 product-model-sec">
<br></br><br></br>
            <a href="chicbone.php">
             <img src="img/portfolio/07.jpg"  height="260px" width="200px">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
                <br></br>
              <div class="product-info-cust">
                <h5 style="color:black; font-family:verdana";>CHICKEN CUT (BONE)</h5>
                <p style="color:red;">₹ 105 / 500 g</p> 
              </div>
            </div>



            <div class="col-md-3 product-model-sec">
<br></br><br></br>
            <a href="wholechicskin.php">
             <img src="img/portfolio/08.jpg"  height="260px" width="200px">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
                <br></br>
              <div class="product-info-cust">
                <h5 style="color:black; font-family:verdana";>WHOLE SKIN CHICKEN</h5>
                <p style="color:red;">₹ 190 ~ 1 Kg</p>
              </div>
            </div>



            <div class="col-md-3 product-model-sec">
<br></br><br></br>
            <a href="chicliver.php">
             <img src="img/portfolio/25.jpg"  height="300px" width="200px">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
                <br></br>
              <div class="product-info-cust">
                <h5 style="color:black; font-family:verdana";>CHICKEN LIVER</h4>
                <p style="color:red;">₹ 75 / 500 g</p> 
              </div>
            </div>



            <div class="col-md-3 product-model-sec">
<br></br><br></br>
            <a href="chic8pc.php">
             <img src="img/portfolio/26.jpg"  height="300px" width="200px">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
                <br></br>
              <div class="product-info-cust">
                <h5 style="color:black; font-family:verdana";>CHICKEN 8 Pc CUT</h4>
                <p style="color:red;">₹ 190 ~ 1 Kg</p>
              </div>
            </div>


<div class="col-md-3 product-model-sec">
<br></br><br></br>
            <a href="chiclegs.php">
             <img src="img/portfolio/30.jpg"  height="300px" width="200px">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
                <br></br>
              <div class="product-info-cust">
                <h5 style="color:black; font-family:verdana";>CHICKEN LEGS</h4>
                <p style="color:red;">₹ 135 / 500 g</p>
              </div>
            </div>


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
           <li><a href="careers.php">Careers</a></li>          
         </ul>
       </div>
       <div class="col-md-3 ftr-grid">
         <h4>Customer service</h4>
         <ul>
           <li><a href="tnc.php">Terms and Conditions</a></li>
           <li><a href="pp.php">Privacy Policy</a></li>
           <li><a href="bb.php">Bulk Orders</a></li>
           <li><a href="bg.php">Buying Guides</a></li>          
         </ul>
       </div>
       <div class="col-md-3 ftr-grid">
         <h4>Our Contact</h4>
         <ul>
           <li>Email : hello@frizin.com</li>
           <li>Call @ 9933 12 45 12</li>
           <li>Website : www.frizin.com</li>
           <li>Like Us :<a href="http://www.facebook.com/frizinfoods"> www.fb.com/frizinfoods</a></li>                     
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
                <p>ALL RIGHTS RESERVED. COPYRIGHT © 2015. Designed and Coded by <a href="http://www.frizin.com">Frizin.com </a>Developers</p>
            </div>
            <div class="pull-right fnav">
                <ul class="footer-social">
                    <li><a href="http://www.facebook.com/frizinfoods"><i class="fa fa-facebook"></i></a></li>
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