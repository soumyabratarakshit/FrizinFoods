<?php session_start(); ?>
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
          
          <a href="index.php"><img src="img/logo.jpg" width="150" height="45" alt="Logo" /></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
          
            <li><a href="index.php" class="page-scroll">Home</a></li>
            <li><a href="index.php" class="page-scroll">Pick a Menu</a></li>
            <li><a href="index.php" class="page-scroll">About</a></li>
            <li><a href="index.php" class="page-scroll">Testimonials</a></li>
            <li><a href="index.php" class="page-scroll">Contact</a></li>
            <?php 
             if (isset($_SESSION['email'])) {?>
             <li><a href="profile.php" class="page-scroll"> <?php echo $_SESSION['email'] ?> </a></li> 
            <?php } else { ?>             
            <li><a href="login.html" class="page-scroll">Login/Sign Up</a></li> <?php } ?>
<li><img src="img/logo.png" height="40px"; width="40px"></li><li><a class="page-scroll" style="color:green; font-family:impact; font-size:20px;">9933 12 45 12</a></li>
            <li><a href="cart.php" class="page-scroll"> <img src="img/cart.png" width="30" height="30"></a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <!-- Home Page
    ==========================================-->
    <div id="tf-home" class="text-center">
    </div>

    
   




<div class="container">
      <!-- CREDIT CARD FORM STARTS HERE -->
       <br></br>
                       <br></br>
                        <br></br>
                       <br></br>
            <div class="panel panel-default credit-card-box customwidth center-block">
                <div class="panel-heading display-table" >
                    <div class="row display-tr" >

                        <h3 class="panel-title display-td" >&nbsp&nbsp&nbsp&nbsp  Delivery Address Details</h3>
                        <div class="display-td" >                            
                            <img class="img-responsive pull-right" src="http://i.imgur.com/gIMFDbp.png">
                            <!-- <img class="img-responsive pull-right" src="http://i.imgur.com/WluzPvZ.png">
                            <img class="img-responsive pull-right" src="http://i.imgur.com/H5lJRwk.png">
                            <img class="img-responsive pull-right" src="http://i.imgur.com/1U8OBnM.png">
                            <img class="img-responsive pull-right" src="http://i.imgur.com/iqIDYfz.png">
                          -->
                        </div>
                    </div>                    
                </div>


 



                <div class="panel-body">
                     <form role="form" id="payment-form" action="guestorder.php" method="POST" >
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                  <h3>Personal Details</h3>
                                </div>                            
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="name"><h5>Name &nbsp&nbsp&nbsp&nbsp&nbsp : &nbsp&nbsp&nbsp&nbsp RAJAT KAPOOR</h5></label>
                                    
                                </div>
                            </div>                        
                        </div>


                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="email"><h5>Email Id</h5></label>
                                    <input type="email" class="form-control" name="email" value="abc@gmail.com"/>
                                </div>
                            </div>                        
                        </div>


                            
                            
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="addressline1"><h5>Address</h5></label>
                                    <input type="text" class="form-control" name="address" value="28C, 9th Cross Road, Indiranagar, Bangalore"/>
                                </div>
                            </div>                        
                        </div>
           
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="city"><h5>Landmark</h5></label>
                                    <input type="text" class="form-control" name="city" value="Indiranagar Metro"/>
                                </div>
                            </div>                        
                        </div>
                        <div class="form-group">
                            <div class="col-xs-5">
                                <div class="form-group">
                                    <label for="pincode"><h5>Pincode</h5></label>
                                    <input type="text" class="form-control" name="pin" value="560093"/>
                                    <label for="pincode"><h5>Contact Number</h5></label>
                                    <input type="tel" class="form-control" name="mobno" value="9933124512"/>
                                </div>
                            </div>                        
                        </div>
                        
                       
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="couponCode"><h6>COUPON CODE(if any)<h6></label>
                                    <input type="text" class="form-control" name="couponCode" />
                                </div>
                            </div>                        
                        </div>
                        <div class="row">
                            <div class="col-xs-8">
                               <div align="right"> <button type="submit" class="btn btn-default btn-sm">
           <a href="instamojo.php"><h4>Pay Online</h4></a> </button>
          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                <button type="submit" class="btn btn-default btn-sm" >
           <a href="thanks.php"><h4>Cash On Delivery</h4></a> </button>
           <br></br>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>            
            <!-- CREDIT CARD FORM ENDS HERE -->
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
    
        <script src="js/index.js"></script>
                          



    <nav id="footer">
        <div class="container">
            <div class="pull-left fnav">
                <p>ALL RIGHTS RESERVED. COPYRIGHT © 2015. Designed and Coded by <a href="https://www.facebook.com/frizin.in">Frizin.in</a></p>
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
