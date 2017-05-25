<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
<meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="logo1.png" />
      <title>Frizin -Freshness to your kitchen</title>
    <meta name="description" content="FRIZIN is your favourite food delivery portal. Freshness of freshly cut meat, dairy products and ready-to-eats directly to your kitchen. FRIZIN is simple and mobile responsive. Go online and order now...!!">
    <meta name="keywords" content="food delivery,frizin, digital food delivery,online food,online meat,online fish, free delivery, free meat delivery, eggs, food delivery ,india, food startup">
    <meta name="author" content="FRIZIN">    
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
            <li><a href="index.php" class="page-scroll">Store (Meat & Dairy)</a></li>
            <li><a href="index.php" class="page-scroll">About</a></li>
            <li><a href="subscribe.php" class="page-scroll">Subscribe (Grocery)</a></li>
            
            <?php 
             if (isset($_SESSION['email'])) {?>
             <li><a href=" profile.php" class="page-scroll"> <?php echo $_SESSION["email"] ?> </a></li> 
            <?php } else { ?>             
            <li><a href="login.html" class="page-scroll">Login/Sign Up</a></li> <?php } ?>

            <li><a href="cart.php" class="page-scroll"> <img src="img/cart1.png" width="30" height="30"></a></li>
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

                        <h3 class="panel-title display-td" >&nbsp&nbspConfirm Delivery Address Details</h3>
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
                   
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                  <h3>Personal Details</h3>
                                  
                                    
                                </div>                            
                            </div>
                        </div>

   <div class="row">
                            <div class="col-xs-7 col-md-7">
                                <div class="form-group">
                                   
                                </div>
                            </div>
                            
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <h5>Name &nbsp&nbsp&nbsp: &nbsp&nbsp&nbsp RAJAT KAPOOR</h5>
                                    
                                </div>
                            </div>                        
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <h5>Email &nbsp&nbsp&nbsp: &nbsp&nbsp&nbsp rajat@gmail.com</h5>
                                </div>
                            </div>                        
                        </div>




                <div class="panel-body">
                    
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                  <h3>Address Details</h3>
                                  
                                    
                                </div>                            
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-7 col-md-7">
                                <div class="form-group">
                                   
                                </div>
                            </div>
                            
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <h5>Address &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: &nbsp&nbsp&nbsp 28C, 9th Cross Road, Indiranagar, Bangalore</h5></h5>
                                </div>
                            </div>                        
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <h5>Landmark &nbsp&nbsp&nbsp: &nbsp&nbsp&nbsp Indiranagar Metro</h5></h5>
                                </div>
                            </div>                        
                        </div>
                        <div class="form-group">
                            <div class="col-xs-5">
                                <div class="form-group">
                                  <h5>Pincode &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: &nbsp&nbsp&nbsp 560093</h5></h5>
                                  <br>
                                  <h5>Mobile Number &nbsp&nbsp&nbsp: &nbsp&nbsp&nbsp 09933124512</h5></h5>
                                </div>
                            </div>                        
                        </div>
                        
                       

                        <div class="row">
                            <div class="col-xs-12">
                                <br></br>
                                <br></br>
                                <div align="left">&nbsp&nbsp&nbsp&nbsp
                                <button type="submit" class="btn btn-default btn-sm">
           <a href="guestbuy.php"><h6>Go back and edit</h6></a> </button>
                                </div>
                                <div align="right"><h4>NET BILL :: &nbsp&nbsp&nbsp Rs.  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
           &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</h4></div>

           
                               <div align="center"> <button type="submit" class="btn btn-default btn-sm">
           <a href="instamojo.php"><h4>Pay Online</h4></a> </button>
          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                <button type="submit" class="btn btn-default btn-sm" >
           <a href="userorder.php"><h4>Cash On Delivery</h4></a> </button>
           <br></br>
                            </div>
                            </div>
                        </div>
                   
                </div>
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
           <li>Email : hello@frizin.in</li>
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
                    <li><a href="http://plus.google.com/u/0/111991991375037815167"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="http://www.twitter.com/hello_frizin"><i class="fa fa-twitter"></i></a></li>
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
