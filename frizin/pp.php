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
          
          <a href="index.php"><img src="img/logo.jpg" width="120" height="50" alt="Logo" /></a>
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
            <h2 style="font-family:helvetica;">PRIVACY POLICY</h2><br></br>
            <br></br>
                 <h5>Personal Information</h5>

<p>FRIZIN FOODS is the licensed owner of the brand FRIZIN.COM and the website FRIZIN.COM. FRIZIN FOODS respects your privacy. This Privacy Policy 
  provides succinctly the manner your data is collected and used by FRIZIN FOODS on the Site. As a visitor to the Site/ Customer you are advised to please read 
  the Privacy Policy carefully. By accessing the services provided by the Site you agree to the collection and use of your data by FRIZIN FOODS in the manner 
  provided in this Privacy Policy.</p><br></br>

<h5>What information is, or may be, collected form you?</h5>

<p>As part of the registration process on the Site, FRIZIN FOODS may collect the following personally identifiable information about you: Name including first and 
  last name, alternate email address, mobile phone number and contact details, Postal code, address etc. and information about the pages on the site you 
  visit/access, the links you click on the site, the number of times you access the page and any such browsing information.</p><br></br>

<h5>How do we collect the Information?</h5>

<p>FRIZIN FOODS will collect personally identifiable information about you only as part of a voluntary registration process, on-line survey or any combination 
  thereof. The Site may contain links to other Web sites. FRIZIN FOODS is not responsible for the privacy practices of such Web sites which it does not own, manage
   or control. The Site and third-party vendors, including Google, use first-party cookies (such as the Google Analytics cookie) and third-party cookies (such as 
   the Double-click cookie) together to inform, optimize, and serve ads based on someone's past visits to the Site.</p><br></br>

<h5>How is information used?</h5>

<p>FRIZIN FOODS will use your personal information to provide personalized features to you on the Site and to provide for promotional offers to you through the 
  Site and other channels. FRIZIN FOODS will also provide this information to its business associates and partners to get in touch with you when necessary to 
  provide the services requested by you. FRIZIN FOODS will use this information to preserve transaction history as governed by existing law or policy. FRIZIN FOODS
   may also use contact information internally to direct its efforts for product improvement, to contact you as a survey respondent, to notify you if you win any
    contest; and to send you promotional materials from its contest sponsors or advertisers. FRIZIN FOODS will also use this information to serve various 
    promotional and advertising materials to you via display advertisements through the Google Ad network on third party websites. You can opt out of Google 
    Analytics for Display Advertising and customize Google Display network ads using the Ads Preferences Manager. Information about Customers on an aggregate
     (excluding any information that may identify you specifically) covering Customer transaction data and Customer demographic and location data may be provided 
     to partners of FRIZIN FOODS for the purpose of creating additional features on the website, creating appropriate merchandising or creating new products and 
     services and conducting marketing research and statistical analysis of customer behavior and transactions.</p><br></br>

<h5>With whom your information will be shared</h5>

<p>FRIZIN FOODS will not use your financial information for any purpose other than to complete a transaction with you. FRIZIN FOODS does not rent, sell or share
 your personal information and will not disclose any of your personally identifiable information to third parties. In cases where it has your permission to 
 provide products or services you've requested and such information is necessary to provide these products or services the information may be shared with ONLY
  RETAIL’s business associates and partners. FRIZIN FOODS may, however, share consumer information on an aggregate with its partners or third parties where it 
  deems necessary. In addition FRIZIN FOODS may use this information for promotional offers, to help investigate, prevent or take action regarding unlawful and 
  illegal activities, suspected fraud, potential threat to the safety or security of any person, violations of the Site’s terms of use or to defend against legal
   claims; special circumstances such as compliance with subpoenas, court orders, requests/order from legal authorities or law enforcement agencies requiring such
    disclosure.</p><br></br>

<h5>What Choice are available to you regarding collection, use and distribution of your information?</h5>

<p>To protect against the loss, misuse and alteration of the information under its control, FRIZIN FOODS has in place appropriate physical, electronic and 
  managerial procedures. For example, FRIZIN FOODS servers are accessible only to authorized personnel and your information is shared with employees and 
  authorized personnel on a need to know basis to complete the transaction and to provide the services requested by you. Although FRIZIN FOODS will endeavor 
  to safeguard the confidentiality of your personally identifiable information, transmissions made by means of the Internet cannot be made absolutely secure. 
  By using this site, you agree that FRIZIN FOODS will have no liability for disclosure of your information due to errors in transmission or unauthorized acts 
  of third parties.</p><br></br>

<h5>How can you correct inaccuracies in the information?</h5>

<p>To correct or update any information you have provided, the Site allows you to do it online. In the event of loss of access details you can send an e-mail 
  to: hello@frizin.com</p><br></br>

<h5>Policy updates</h5>

<p>FRIZIN FOODS reserves the right to change or update this policy at any time. Such changes shall be effective immediately upon posting to the Site.</p>


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