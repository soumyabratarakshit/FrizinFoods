<?php session_start();  
if(isset($_COOKIE["user"]))
    $user = $_COOKIE["user"];
if($user == 0)
    {
    if(isset($_COOKIE["cart"])){
      $guest_cart = $_COOKIE["cart"];
       if($guest_cart == "a")
       $guest_cart = "";
    }
    }
?>
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
            <li><a href="cart.php" class="page-scroll"> <img src="img/cart.png" width="30" height="30"></a></li>
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
                <div class="col-md-12">
                   

                  <div class="form">
                    <div class="tab-content">
                      <div id="signup">   

                        <p style="color:#ff8000; font-size:40px"> my cart&nbsp&nbsp&nbsp&nbsp<img src="img/cart1.png" width="100" height="100" ></p>
                        
                        <br></br>


                       <style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    text-align: left;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    background-color: #FCAC45;
    color: white;
}
</style>
</head>
<body>
<?php
if(isset ($_SESSION['email']))
	{
	$email = $_SESSION['email'];
	}
$url = "cart_test.php";
$servername = "localhost";
$username = "a7c98f4b_akash";
$password = "root@123";
$dbname = "a7c98f4b_yippix";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$email = "";
$cart = "";
if(isset ($_SESSION['email'])){
	$email = $_SESSION['email'];
	}
if($user == 1){
$sql = "SELECT cart FROM Cart where '".$email."' = email";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$cart = $row["cart"];
}
else{
$cart = $guest_cart;
}
$cart_arr = explode("/",$cart);
$i = 0;
$tot_price=0;
echo "<table id=\"customers\">
  <tr>
    <th>ITEM</th>
    <th>QTY</th>
    <th>EACH PACK PRICE</th>
    <th>DELIVERY DETAILS</th>
    <th>SUBTOTAL</th>
    <th>EDIT</th>
  </tr>";
for($i=0;$i<intval(strlen($cart)/7);$i++){
        echo "<tr>";
	$str=$cart_arr[$i];
	$arr=str_split($str,5);
	$p_id = $arr[0]*1;
	$q= $arr[1]*1;
	//echo $p_id."<br>";
	//echo $q."<br><br><br>";
        $sql = "SELECT  itemname,price FROM FOOD_ITEMS where ".$p_id." = orderid";
        $result = $conn->query($sql);	
        $row = $result->fetch_assoc();
        echo "<td>".$row["itemname"]."</td>";
        echo "<td>".$q."</td>";
        echo "<td>₹. ".$row["price"]."</td>";
        echo "<td>FREE DELIVERY</td>";
        $ind_price = $row["price"]*$q;
        echo "<td>₹. ".$ind_price."</td>";
        $tot_price = $tot_price + $ind_price;
	echo "<td> <a href=\"".$url."?product=".$p_id."&quantity=".$q."&del=1\"><button type=\"button\">remove</button></a></td>";
        echo "</tr>";
        }
echo "</table>";
//echo "<br><br><br>TOTAL:: Rs. ".$tot_price;
$conn->close();
?>
<br></br>
<div align="right">
      <?php
      $_SESSION["pay"]=$tot_price;
      if($user == 0)
      echo "<td>  <a href='guestbuy.php'>   <h1> <h2> TOTAL:: ₹.  $tot_price <br><br></h2><h1><button type='button'>PLACE ORDER</button></h1></a></td>";
      else
      echo "<td>  <a href='userbuy.php'>   <h1> <h2> TOTAL:: ₹.  $tot_price <br><br></h2><h1><button type='button'>PLACE ORDER</button></h1></a></td>"
      ?></td>
    </div>



</body>

                        <br></br><br></br><br></br>
                        <form action="/" method="post">
                        
                          <div align="center">
                            <div class="top-row">
                            

                            
                          
                            
                            </div>
                          </div>
                        </form>

                      </div>
                    </div><!-- tab-content -->
      
                  </div> <!-- /form -->


                

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
