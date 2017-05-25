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
          
          <a href="index.html"><img src="img/logo.jpg" width="150" height="45" alt="Logo" /></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php?email= ".<?php echo $_GET["email"] ?> class="page-scroll">Home</a></li>
            <li><a href="index.php?email= ".<?php echo $_GET["email"] ?> class="page-scroll">Pick a Menu</a></li>
            <li><a href="index.php?email= ".<?php echo $_GET["email"] ?> class="page-scroll">About</a></li>
            <li><a href="index.php?email= ".<?php echo $_GET["email"] ?> class="page-scroll">Testimonials</a></li>
            <li><a href="index.php?email= ".<?php echo $_GET["email"] ?> class="page-scroll">Contact</a></li>
            <li><a href="login.html" class="page-scroll">Login/Sign Up</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <!-- Home Page
    ==========================================-->
    <div id="tf-home" class="text-center">
    </div>

    
   





<?php
$servername = "127.0.0.1";
$username = "akash";
$password = "root123";
$dbname = "yippix";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT  userid,username,email,address FROM USERS";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if($row["email"] == $_GET["email"])
            {
               //echo " UserID". $row["userid"] ."<br>Name: " . $row["username"]. " <br> email: " . $row["email"]. " <br> Address" . $row["address"]. "<br>";
               break;
            }
    }
} else {
    echo "0 results";
}
$conn->close();
echo "<br> <br> <br>";
?>
<form action="index.php">
    <input type="submit" value=" LOg OUT">
</form> 



<!-- About Us Page
    ==========================================-->
    <div id="tf-about">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                   

                  <div class="form">
                    <div class="tab-content">
                      <div id="signup">   
                        <h1>My Profile Details</h1>
                        <h3>&nbsp&nbsp&nbsp&nbspIt just looks Great!</h3>
                        <br></br>
                        <form action="/" method="post">
                        
                          <div align="center">
                            <div class="top-row">
                              <div class="field-wrap">
                                <label>
                                  USERid<span class="req">&nbsp&nbsp&nbsp&nbsp</span>
                                </label>
                                <?php echo $row["userid"] ?>
                              </div>
                              <br></br>

                              <div class="field-wrap">
                                  <label>
                                    Name<span class="req">&nbsp&nbsp&nbsp&nbsp</span>
                                  </label>
                                  <?php echo $row["username"] ?>
                                </div>
                              </div>
                              <br></br>

                              <div class="field-wrap">
                                <label>
                                  Mobile No.<span class="req">&nbsp&nbsp&nbsp</span>
                                </label>
                              <?php echo $row["mobno"] ?>
                              </div>
                              <br></br>

                              <div class="field-wrap">
                                <label>
                                  Email Id<span class="req">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
                                </label>
                                <?php echo $row["email"] ?>
                              </div>
                              <br></br>
                            
                            <div class="field-wrap">
                                  <label>
                                    Address<span class="req">&nbsp&nbsp&nbsp&nbsp</span>
                                  </label>
                                  <?php echo $row["address"] ?>
                                </div>
                              
                              <br></br>

                              
                                <div class="field-wrap">
                                <label>
                                  Pin Code<span class="req">&nbsp&nbsp&nbsp</span>
                                </label>
                               <?php echo $row["pin"] ?>
                              </div>
                              <br></br>


                      
                          <form action="index.php" class="button button-block">
    <input type="submit" value=" LOg OUT">
</form> 
                              
                            </div>
                          </div>
                        </form>

                      </div>
                    </div><!-- tab-content -->
      
                  </div> <!-- /form -->


                <div id="login" class="col-md-6"> 
                <br></br> <br></br> 
                   <img src="img/02.jpg" height="420" width="640">

                </div>  <!-- login -->
            </div>
        </div>
    </div>






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