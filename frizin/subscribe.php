<!DOCTYPE html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<?php session_start(); 
//$usr_no = $_SESSION['uid'];
$jsonString = file_get_contents('subs_json/json_test.json');
$data = json_decode($jsonString, true);
?>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="logo1.png" />
      <title>Frizin -Freshness to your kitchen</title>
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
            <li><a href="subscribe.php" class="page-scroll">Subscribe</a></li>
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
            
            
            <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @import url("http://fonts.googleapis.com/css?family=Open+Sans:400,600,700");
@import url("http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css");
*, *:before, *:after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
hr{
display: block;
height: 1px;
border: 0;
border-top: 2px solid orange;
margin: 1em 0;
padding: 0;
}
textarea {
  resize: none;
  width: 50px;
  height:20px;
  border:1px solid #EA691A;
  border-left: 4px solid #EA691A;
  font-size: 18px;
}
html, body {
  height: 100%;
}

body {
  font: 14px/1 'Open Sans', sans-serif;
  color: #555;
  background: #eee;
}

h1 {
  padding: 50px 0;
  font-weight: 400;
  text-align: center;
}

p {
  margin: 0 0 20px;
  line-height: 1.5;
}

main {
  min-width: 320px;
  max-width: 1100px;
  padding: 50px;
  margin: 0 auto;
  background: #fff;
}

section {
  display: none;
  padding: 20px 0 0;
  border-top: 1px solid #ddd;
}

input {
  display: none;
}

label {
  display: inline-block;
  margin: 0 0 -1px;
  padding: 15px 25px;
  font-weight: 600;
  text-align: center;
  color: #EA691A;
  border: 1px solid transparent;
}

label:before {
  font-family: fontawesome;
  font-weight: normal;
  margin-right: 10px;
}

label[for*='1']:before {
  content: '\f1db';
}

label[for*='2']:before {
  content: '\f1db';
}

label[for*='3']:before {
  content: '\f1db';
}

label[for*='4']:before {
  content: '\f1db';
}

label[for*='5']:before {
  content: '\f1db';
}

label[for*='6']:before {
  content: '\f1db';
}

label[for*='7']:before {
  content: '\f1db';
}

label:hover {
  color: #888;
  cursor: pointer;
}

input:checked + label {
  color: #555;
  border: 1px solid #ddd;
  border-top: 2px solid orange;
  border-bottom: 1px solid #fff;
}

#tab1:checked ~ #content1,
#tab2:checked ~ #content2,
#tab3:checked ~ #content3,
#tab4:checked ~ #content4,
#tab5:checked ~ #content5,
#tab6:checked ~ #content6,
#tab7:checked ~ #content7 {
  display: block;
}

@media screen and (max-width: 650px) {
  label {
    font-size: 0;
  }

  label:before {
    margin: 0;
    font-size: 18px;
  }
}
@media screen and (max-width: 400px) {
  label {
    padding: 15px;
  }
}

    </style>

    
        <script src="js/prefixfree.min.js"></script>

    
  </head>

  <body>

    <h1>Subscribe on weekly basis. Hassle free Ordering</h1>
    <div align="right"> <a href="cs.php">
<button id="save" class="btn btn-default btn-sm" ><h5 style="color:orange;">Save and Proceed to Confirm&nbsp&nbsp&nbsp&nbsp >></h5></button></a> </div>
<br></br>

<main>
  
  <input id="tab1" type="radio" name="tabs" checked>
  <label for="tab1">MONDAY</label>
    
  <input id="tab2" type="radio" name="tabs">
  <label for="tab2">TUESDAY</label>
    
  <input id="tab3" type="radio" name="tabs">
  <label for="tab3">WEDNESDAY</label>
    
  <input id="tab4" type="radio" name="tabs">
  <label for="tab4">THURSDAY</label>

  <input id="tab5" type="radio" name="tabs">
  <label for="tab5">FRIDAY</label>

  <input id="tab6" type="radio" name="tabs">
  <label for="tab6">SATURDAY</label>

<input id="tab7" type="radio" name="tabs">
  <label for="tab7">SUNDAY</label>
   

  <section id="content1">
    <br>
  <hr>
    
            <div class="col-md-3 product-model-sec">
            <img src="img/portfolio/41.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>BASMATI RICE</h5>
                <p style="color:red;">₹ 77 / 500 g</p>
                <button id="mon_basmati_minus" class="btn btn-default btn-sm" >-</button>

                <?php $mon = $data[1]['Basmati']; echo '<textarea readonly id="mon_basmati_val" type="input" value = "'.$mon.'size="5px">'.$mon.'</textarea>'; ?>

                <button id="mon_basmati_plus" class="btn btn-default btn-sm" >+</button>
            </div>
<div id="lab"></div>
            <script>

document.getElementById("mon_basmati_minus").addEventListener("click", function(){
     s = document.getElementById("mon_basmati_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Basmati&ldo=2");
     document.getElementById("mon_basmati_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("mon_basmati_plus").addEventListener("click", function(){
     s = document.getElementById("mon_basmati_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Basmati&ldo=1");
     document.getElementById("mon_basmati_val").value = parseInt(s) + 1;
});

 
</script>


<div class="col-md-3 product-model-sec">
                <img src="img/portfolio/42.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>BASKATI RICE</h5>
                <p style="color:red;">₹ 28 / 500 g</p>
                 <button id="mon_baskati_minus" class="btn btn-default btn-sm" >-</button>

                 <?php $mon = $data[1]['Baskati']; echo '<textarea readonly id="mon_baskati_val" type="input" value = "'.$mon.'size="5px">'.$mon.'</textarea>'; ?>
                 
                <button id="mon_baskati_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("mon_baskati_minus").addEventListener("click", function(){
     s = document.getElementById("mon_baskati_val").value;
     if(parseInt(s) == 0) return;
      $("#lab").load("js_change.php?value="+s+"&day=1&item=Baskati&ldo=2");
     document.getElementById("mon_baskati_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("mon_baskati_plus").addEventListener("click", function(){
     s = document.getElementById("mon_baskati_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Baskati&ldo=1");
     document.getElementById("mon_baskati_val").value = parseInt(s) + 1;
    
});

 
</script>


<div class="col-md-3 product-model-sec">
                <img src="img/portfolio/43.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>MOONG DAL</h5>
                <p style="color:red;">₹ 56 / 500 g</p>
                <button id="mon_moong_minus" class="btn btn-default btn-sm" >-</button>

                <?php $mon = $data[1]['Moong']; echo '<textarea readonly id="mon_moong_val" type="input" value = "'.$mon.'size="5px">'.$mon.'</textarea>'; ?>
                
                <button id="mon_moong_plus" class="btn btn-default btn-sm" >+</button>
</div>


<script>

document.getElementById("mon_moong_minus").addEventListener("click", function(){
     s = document.getElementById("mon_moong_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Moong&ldo=2");
     document.getElementById("mon_moong_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("mon_moong_plus").addEventListener("click", function(){
     s = document.getElementById("mon_moong_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Moong&ldo=1");
     document.getElementById("mon_moong_val").value = parseInt(s) + 1;
    
});

 
</script>





                <div class="col-md-3 product-model-sec">
                <img src="img/portfolio/44.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>MASOOR DAL</h5>
                <p style="color:red;">₹ 55 / 500 g</p>
                <button id="mon_masoor_minus" class="btn btn-default btn-sm" >-</button>

                <?php $mon = $data[1]['Masoor']; echo '<textarea readonly id="mon_masoor_val" type="input" value = "'.$mon.'size="5px">'.$mon.'</textarea>'; ?>

                <button id="mon_masoor_plus" class="btn btn-default btn-sm" >+</button>
</div>



<script>

document.getElementById("mon_masoor_minus").addEventListener("click", function(){
     s = document.getElementById("mon_masoor_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Masoor&ldo=2");
     document.getElementById("mon_masoor_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("mon_masoor_plus").addEventListener("click", function(){
     s = document.getElementById("mon_masoor_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Masoor&ldo=1");
     document.getElementById("mon_masoor_val").value = parseInt(s) + 1;
    
});

 
</script>


</br>


                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/45.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CHANA DAL</h5>
                <p style="color:red;">₹ 45 / 500 g</p>
                 <button id="mon_chana_minus" class="btn btn-default btn-sm" >-</button>
                <?php $mon = $data[1]['Chana']; echo '<textarea readonly id="mon_chana_val" type="input" value = "'.$mon.'size="5px">'.$mon.'</textarea>'; ?>

                <button id="mon_chana_plus" class="btn btn-default btn-sm" >+</button>
</div>


<script>

document.getElementById("mon_chana_minus").addEventListener("click", function(){
     s = document.getElementById("mon_chana_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Chana&ldo=2");
     document.getElementById("mon_chana_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("mon_chana_plus").addEventListener("click", function(){
     s = document.getElementById("mon_chana_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Chana&ldo=1");
     document.getElementById("mon_chana_val").value = parseInt(s) + 1;
    
});

 
</script>


                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/46.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>ARHAR DAL</h5>
                <p style="color:red;">₹ 87 / 500 g</p>
                 <button id="mon_arhar_minus" class="btn btn-default btn-sm" >-</button>

                <?php $mon = $data[1]['Arhar']; echo '<textarea readonly id="mon_arhar_val" type="input" value = "'.$mon.'size="5px">'.$mon.'</textarea>'; ?>

                <button id="mon_arhar_plus" class="btn btn-default btn-sm" >+</button>
</div>


<script>

document.getElementById("mon_arhar_minus").addEventListener("click", function(){
     s = document.getElementById("mon_arhar_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Arhar&ldo=2");
     document.getElementById("mon_arhar_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("mon_arhar_plus").addEventListener("click", function(){
     s = document.getElementById("mon_arhar_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Arhar&ldo=1");
     document.getElementById("mon_arhar_val").value = parseInt(s) + 1;
    
});

 
</script>



                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/47.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>POTATO</h5>
                <p style="color:red;">₹ 25 / 1 Kg</p>
                 <button id="mon_potato_minus" class="btn btn-default btn-sm" >-</button>
                    <?php $mon = $data[1]['Potato']; echo '<textarea readonly id="mon_potato_val" type="input" value = "'.$mon.'size="5px">'.$mon.'</textarea>'; ?>

                <button id="mon_potato_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("mon_potato_minus").addEventListener("click", function(){
     s = document.getElementById("mon_potato_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Potato&ldo=2");
     document.getElementById("mon_poatato_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("mon_potato_plus").addEventListener("click", function(){
     s = document.getElementById("mon_potato_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Potato&ldo=1");
     document.getElementById("mon_potato_val").value = parseInt(s) + 1;
    
});

 
</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/48.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>ONION</h5>
                <p style="color:red;">₹ 135 / 500 g</p>
                <button id="mon_onion_minus" class="btn btn-default btn-sm" >-</button>

                <?php $mon = $data[1]['Onion']; echo '<textarea readonly id="mon_onion_val" type="input" value = "'.$mon.'size="5px">'.$mon.'</textarea>'; ?>

                <button id="mon_onion_plus" class="btn btn-default btn-sm" >+</button>
</div>


<script>

document.getElementById("mon_onion_minus").addEventListener("click", function(){
     s = document.getElementById("mon_onion_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Onion&ldo=2");
     document.getElementById("mon_onion_val").value = parseInt(s) - 1;
     
    
});
document.getElementById("mon_onion_plus").addEventListener("click", function(){
     s = document.getElementById("mon_onion_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Onion&ldo=1");
     document.getElementById("mon_onion_val").value = parseInt(s) + 1;
    
});

 
</script>


<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/49.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>TOMATO</h5>
                <p style="color:red;">₹ 135 / 500 g</p>
               <button id="mon_tomato_minus" class="btn btn-default btn-sm" >-</button>

                <?php $mon = $data[1]['Tomato']; echo '<textarea readonly id="mon_tomato_val" type="input" value = "'.$mon.'size="5px">'.$mon.'</textarea>'; ?>

                <button id="mon_tomato_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("mon_tomato_minus").addEventListener("click", function(){
     s = document.getElementById("mon_tomato_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Tomato&ldo=2");
     document.getElementById("mon_tomato_val").value = parseInt(s) - 1;
         
});

document.getElementById("mon_tomato_plus").addEventListener("click", function(){
     s = document.getElementById("mon_tomato_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Tomato&ldo=1");
     document.getElementById("mon_tomato_val").value = parseInt(s) + 1;
     
});

 
</script>



<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/50.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>GINGER</h5>
                <p style="color:red;">₹ 135 / 500 g</p>
                 <button id="mon_ginger_minus" class="btn btn-default btn-sm" >-</button>

                <?php $mon = $data[1]['Ginger']; echo '<textarea readonly id="mon_ginger_val" type="input" value = "'.$mon.'size="5px">'.$mon.'</textarea>'; ?>
                
                <button id="mon_ginger_plus" class="btn btn-default btn-sm" >+</button>
            
</div>



<script>

document.getElementById("mon_ginger_minus").addEventListener("click", function(){
     s = document.getElementById("mon_ginger_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Ginger&ldo=2");
     document.getElementById("mon_ginger_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("mon_ginger_plus").addEventListener("click", function(){
     s = document.getElementById("mon_ginger_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Ginger&ldo=1");
     document.getElementById("mon_ginger_val").value = parseInt(s) + 1;
    
});

 
</script>


<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/51.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>GARLIC</h5>
                <p style="color:red;">₹ 135 / 500 g</p>
                <button id="mon_garlic_minus" class="btn btn-default btn-sm" >-</button>

                <?php $mon = $data[1]['Garlic']; echo '<textarea readonly id="mon_garlic_val" type="input" value = "'.$mon.'size="5px">'.$mon.'</textarea>'; ?>
               

                <button id="mon_garlic_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("mon_garlic_minus").addEventListener("click", function(){
     s = document.getElementById("mon_garlic_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Garlic&ldo=2");
     document.getElementById("mon_garlic_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("mon_garlic_plus").addEventListener("click", function(){
     s = document.getElementById("mon_garlic_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Garlic&ldo=1");
     document.getElementById("mon_garlic_val").value = parseInt(s) + 1;
    
});

 
</script>



<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/52.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CHILLI</h5>
                <p style="color:red;">₹ 135 / 500 g</p>
                    <button id="mon_chilli_minus" class="btn btn-default btn-sm" >-</button>

                <?php $mon = $data[1]['Chilli']; echo '<textarea readonly id="mon_chilli_val" type="input" value = "'.$mon.'size="5px">'.$mon.'</textarea>'; ?>

                <button id="mon_chilli_plus" class="btn btn-default btn-sm" >+</button>
</div>


<script>

document.getElementById("mon_chilli_minus").addEventListener("click", function(){
     s = document.getElementById("mon_chilli_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Chilli&ldo=2");
     document.getElementById("mon_chilli_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("mon_chilli_plus").addEventListener("click", function(){
     s = document.getElementById("mon_chilli_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Chilli&ldo=1");
     document.getElementById("mon_chilli_val").value = parseInt(s) + 1;
    
});

 
</script>


<div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/01.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CHICKEN DRUMSTICKS</h5>
                <p style="color:red;">₹ 135 / 500 g</p>
                  <button id="mon_drum_minus" class="btn btn-default btn-sm" >-</button>

                <?php $mon = $data[1]['Chick_drums']; echo '<textarea readonly id="mon_drum_val" type="input" value = "'.$mon.'size="5px">'.$mon.'</textarea>'; ?>

                <button id="mon_drum_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("mon_drum_minus").addEventListener("click", function(){
     s = document.getElementById("mon_drum_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Chick_drums&ldo=2");
     document.getElementById("mon_drum_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("mon_drum_plus").addEventListener("click", function(){
     s = document.getElementById("mon_drum_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Chick_drums&ldo=1");
     document.getElementById("mon_drum_val").value = parseInt(s) + 1;
    
});

 
</script>

                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/02.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CHICKEN BONELESS</h5>
                <p style="color:red;">₹ 160 / 500 g</p>
                  <button id="mon_chbonls_minus" class="btn btn-default btn-sm" >-</button>
            <?php $mon = $data[1]['Chick_boneless']; echo '<textarea readonly id="mon_chbonls_val" type="input" value = "'.$mon.'size="5px">'.$mon.'</textarea>'; ?>

                <button id="mon_chbonls_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("mon_chbonls_minus").addEventListener("click", function(){
     s = document.getElementById("mon_chbonls_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Chick_boneless&ldo=2");
     document.getElementById("mon_chbonls_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("mon_chbonls_plus").addEventListener("click", function(){
     s = document.getElementById("mon_chbonls_val").value;
     if(parseInt(s) == 10) return;
      $("#lab").load("js_change.php?value="+s+"&day=1&item=Chick_boneless&ldo=1");
     document.getElementById("mon_chbonls_val").value = parseInt(s) + 1;
    
});

 
</script>



                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/03.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CHICKEN KEEMA</h5>
                <p style="color:red;">₹165 / 500 g</p>
                <button id="mon_chkee_minus" class="btn btn-default btn-sm" >-</button>

                <?php $mon = $data[1]['Chick_keema']; echo '<textarea readonly id="mon_chkee_val" type="input" value = "'.$mon.'size="5px">'.$mon.'</textarea>'; ?>

                <button id="mon_chkee_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("mon_chkee_minus").addEventListener("click", function(){
     s = document.getElementById("mon_chkee_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Chick_keema&ldo=2");
     document.getElementById("mon_chkee_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("mon_chkee_plus").addEventListener("click", function(){
     s = document.getElementById("mon_chkee_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Chick_keema&ldo=1");
     document.getElementById("mon_chkee_val").value = parseInt(s) + 1;
    
});

 
</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/04.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>WHOLE SKINLESS CHICKEN</h5>
                <p style="color:red;">₹ 190 ~ 1 Kg</p>
                 <button id="mon_chwh_minus" class="btn btn-default btn-sm" >-</button>

                <?php $mon = $data[1]['Chick_whole_skinless']; echo '<textarea readonly id="mon_chwh_val" type="input" value = "'.$mon.'size="5px">'.$mon.'</textarea>'; ?>

                <button id="mon_chwh_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("mon_chwh_minus").addEventListener("click", function(){
     s = document.getElementById("mon_chwh_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Chick_whole_skinless&ldo=2");
     document.getElementById("mon_chwh_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("mon_chwh_plus").addEventListener("click", function(){
     s = document.getElementById("mon_chwh_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Chick_whole_skinless&ldo=1");
     document.getElementById("mon_chwh_val").value = parseInt(s) + 1;
    
});

 
</script>






<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/06.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CHICKEN BREAST</h5>
                <p style="color:red;">₹ 160 / 500 g</p>
                 <button id="mon_chbr_minus" class="btn btn-default btn-sm" >-</button>

               <?php $mon = $data[1]['Chick_breast']; echo '<textarea readonly id="mon_chbr_val" type="input" value = "'.$mon.'size="5px">'.$mon.'</textarea>'; ?>

                <button id="mon_chbr_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("mon_chbr_minus").addEventListener("click", function(){
     s = document.getElementById("mon_chbr_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Chick_breast&ldo=2");
     document.getElementById("mon_chbr_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("mon_chbr_plus").addEventListener("click", function(){
     s = document.getElementById("mon_chbr_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Chick_breast&ldo=1");
     document.getElementById("mon_chbr_val").value = parseInt(s) + 1;
    
});

 
</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/07.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CHICKEN CUT</h5>
                <p style="color:red;">₹ 105 / 500 g</p>
                  <button id="mon_chc_minus" class="btn btn-default btn-sm" >-</button>

                <?php $mon = $data[1]['Chick_cut']; echo '<textarea readonly id="mon_chc_val" type="input" value = "'.$mon.'size="5px">'.$mon.'</textarea>'; ?>

                <button id="mon_chc_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("mon_chc_minus").addEventListener("click", function(){
     s = document.getElementById("mon_chc_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Chick_cut&ldo=2");
     document.getElementById("mon_chc_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("mon_chc_plus").addEventListener("click", function(){
     s = document.getElementById("mon_chc_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Chick_cut&ldo=1");
     document.getElementById("mon_chc_val").value = parseInt(s) + 1;
    
});

 
</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/08.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>WHOLE SKIN CHICKEN</h5>
                <p style="color:red;">₹ 190 ~ 1 Kg</p>
                  <button id="mon_chwhsk_minus" class="btn btn-default btn-sm" >-</button>

                <?php $mon = $data[1]['Chick_whole_skin']; echo '<textarea readonly id="mon_chwhsk_val" type="input" value = "'.$mon.'" size="5px">'.$mon.'</textarea>'; ?>

                <button id="mon_chwhsk_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("mon_chwhsk_minus").addEventListener("click", function(){
     s = document.getElementById("mon_chwhsk_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Chick_whole_skin&ldo=2");
     document.getElementById("mon_chwhsk_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("mon_chwhsk_plus").addEventListener("click", function(){
     s = document.getElementById("mon_chwhsk_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Chick_whole_skin&ldo=1");
     document.getElementById("mon_chwhsk_val").value = parseInt(s) + 1;
    
});

</script>



<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/26.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CHICKEN 8 Pc CUT</h5>
                <p style="color:red;">₹ 190 ~ 1 Kg</p>
 <button id="mon_ch8pc_minus" class="btn btn-default btn-sm" >-</button>

                 <?php $mon = $data[1]['Chick_8pc_cut']; echo '<textarea readonly id="mon_ch8pc_val" type="input" value = "'.$mon.'size="5px">'.$mon.'</textarea>'; ?>

                <button id="mon_ch8pc_plus" class="btn btn-default btn-sm" >+</button>               
</div>

<script>

document.getElementById("mon_ch8pc_minus").addEventListener("click", function(){
     s = document.getElementById("mon_ch8pc_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Chick_8pc_cut&ldo=2");
     document.getElementById("mon_ch8pc_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("mon_ch8pc_plus").addEventListener("click", function(){
     s = document.getElementById("mon_ch8pc_val").value;
     if(parseInt(s) == 10) return;
      $("#lab").load("js_change.php?value="+s+"&day=1&item=Chick_8pc_cut&ldo=1");
     document.getElementById("mon_ch8pc_val").value = parseInt(s) + 1;
    
});

 
</script>





<div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/09.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>MUTTON CHOPS (BONE)</h5>
                <p style="color:red;">₹ 270 / 500 g</p>
                <button id="mon_muttchbn_minus" class="btn btn-default btn-sm" >-</button>

                <?php $mon = $data[1]['Mutt_chop_bone']; echo '<textarea readonly id="mon_muttchbn_val" type="input" value = "'.$mon.'size="5px">'.$mon.'</textarea>'; ?>

                <button id="mon_muttchbn_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("mon_muttchbn_minus").addEventListener("click", function(){
     s = document.getElementById("mon_muttchbn_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Mutt_chop_bone&ldo=2");
     document.getElementById("mon_muttchbn_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("mon_muttchbn_plus").addEventListener("click", function(){
     s = document.getElementById("mon_muttchbn_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Mutt_chop_bone&ldo=1");
     document.getElementById("mon_muttchbn_val").value = parseInt(s) + 1;
    
});

 
</script>


                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/10.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>MUTTON CHOPS (B/L)</h5>
                <p style="color:red;">₹ 335 / 500 g</p>
                 <button id="mon_muttch_minus" class="btn btn-default btn-sm" >-</button>

                <?php $mon = $data[1]['Mutt_chop_bl']; echo '<textarea readonly id="mon_muttch_val" type="input" value = "'.$mon.'size="5px">'.$mon.'</textarea>'; ?>

                <button id="mon_muttch_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("mon_muttch_minus").addEventListener("click", function(){
     s = document.getElementById("mon_muttch_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Mutt_chop_bl&ldo=2");
     document.getElementById("mon_muttch_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("mon_muttch_plus").addEventListener("click", function(){
     s = document.getElementById("mon_muttch_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Mutt_chop_bl&ldo=1");
     document.getElementById("mon_muttch_val").value = parseInt(s) + 1;
    
});

 
</script>




                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/11.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>MUTTON KEEMA</h5>
                <p style="color:red;">₹ 335 / 1 Kg</p>
               <button id="mon_muttkee_minus" class="btn btn-default btn-sm" >-</button>

                <?php $mon = $data[1]['Mutt_keema']; echo '<textarea readonly id="mon_muttkee_val" type="input" value = "'.$mon.'size="5px">'.$mon.'</textarea>'; ?>

                <button id="mon_muttkee_plus" class="btn btn-default btn-sm" >+</button>
</div>


<script>

document.getElementById("mon_muttkee_minus").addEventListener("click", function(){
     s = document.getElementById("mon_muttkee_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Mutt_keema&ldo=2");
     document.getElementById("mon_muttkee_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("mon_muttkee_plus").addEventListener("click", function(){
     s = document.getElementById("mon_muttkee_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Mutt_keema&ldo=1");
     document.getElementById("mon_muttkee_val").value = parseInt(s) + 1;
    
});

 
</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/12.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>ROHU </h5>
                <p style="color:red;">₹ 110 / 500 g</p>
                <button id="mon_rohu_minus" class="btn btn-default btn-sm" >-</button>

                <?php $mon = $data[1]['Rohu']; echo '<textarea readonly id="mon_rohu_val" type="input" value = "'.$mon.'size="5px">'.$mon.'</textarea>'; ?>

                <button id="mon_rohu_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("mon_rohu_minus").addEventListener("click", function(){
     s = document.getElementById("mon_rohu_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Rohu&ldo=2");
     document.getElementById("mon_rohu_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("mon_rohu_plus").addEventListener("click", function(){
     s = document.getElementById("mon_rohu_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Rohu&ldo=1");
     document.getElementById("mon_rohu_val").value = parseInt(s) + 1;
    
});

 
</script>



<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/13.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CATLA </h5>
                <p style="color:red;">₹ 110 / 500 g</p>
                <button id="mon_catla_minus" class="btn btn-default btn-sm" >-</button>

                <?php $mon = $data[1]['Catla']; echo '<textarea readonly id="mon_catla_val" type="input" value = "'.$mon.'size="5px">'.$mon.'</textarea>'; ?>

                <button id="mon_catla_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("mon_catla_minus").addEventListener("click", function(){
     s = document.getElementById("mon_catla_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Catla&ldo=2");
     document.getElementById("mon_catla_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("mon_catla_plus").addEventListener("click", function(){
     s = document.getElementById("mon_catla_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Catla&ldo=1");
     document.getElementById("mon_catla_val").value = parseInt(s) + 1;
    
});

 
</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/14.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>SALMON </h5>
                <p style="color:red;">₹ 580 / 500 g</p>
                <button id="mon_salmon_minus" class="btn btn-default btn-sm" >-</button>

                <?php $mon = $data[1]['Salmon']; echo '<textarea readonly id="mon_salmon_val" type="input" value = "'.$mon.'size="5px">'.$mon.'</textarea>'; ?>
                
                <button id="mon_salmon_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("mon_salmon_minus").addEventListener("click", function(){
     s = document.getElementById("mon_salmon_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Salmon&ldo=2");
     document.getElementById("mon_salmon_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("mon_salmon_plus").addEventListener("click", function(){
     s = document.getElementById("mon_salmon_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Salmon&ldo=1");
     document.getElementById("mon_salmon_val").value = parseInt(s) + 1;
    
});

 
</script>



<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/15.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>PRAWNS </h5>
                <p style="color:red;">₹ 610 / 500 g</p>
                <button id="mon_prawn_minus" class="btn btn-default btn-sm" >-</button>

                <?php $mon = $data[1]['Prawns']; echo '<textarea readonly id="mon_prawn_val" type="input" value = "'.$mon.'size="5px">'.$mon.'</textarea>'; ?>

                <button id="mon_prawn_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("mon_prawn_minus").addEventListener("click", function(){
     s = document.getElementById("mon_prawn_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Prawns&ldo=2");
     document.getElementById("mon_prawn_val").value = parseInt(s) - 1;
         
});

document.getElementById("mon_prawn_plus").addEventListener("click", function(){
     s = document.getElementById("mon_prawn_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Prawns&ldo=1");
     document.getElementById("mon_prawn_val").value = parseInt(s) + 1;
    
});

 
</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/16.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>WHITE POMPHRET FISH</h5>
                <p style="color:red;">₹ 785 / 500 g</p>
                <button id="mon_pomphret_minus" class="btn btn-default btn-sm" >-</button>

                <?php $mon = $data[1]['Pomphret']; echo '<textarea readonly id="mon_pomphret_val" type="input" value = "'.$mon.'size="5px">'.$mon.'</textarea>'; ?>
                
                <button id="mon_pomphret_plus" class="btn btn-default btn-sm" >+</button>
</div>


<script>

document.getElementById("mon_pomphret_minus").addEventListener("click", function(){
     s = document.getElementById("mon_pomphret_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Pomphret&ldo=2");
     document.getElementById("mon_pomphret_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("mon_pomphret_plus").addEventListener("click", function(){
     s = document.getElementById("mon_pomphret_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Pomphret&ldo=1");
     document.getElementById("mon_pomphret_val").value = parseInt(s) + 1;
    
});

</script>


<div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/31.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>PANEER</h5>
                <p style="color:red;">₹ 140 / 500 g</p>
                   <button id="mon_paneer_minus" class="btn btn-default btn-sm" >-</button>

                <?php $mon = $data[1]['Paneer']; echo '<textarea readonly id="mon_paneer_val" type="input" value = "'.$mon.'size="5px">'.$mon.'</textarea>'; ?>

                <button id="mon_paneer_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("mon_paneer_minus").addEventListener("click", function(){
     s = document.getElementById("mon_paneer_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Paneer&ldo=2");
     document.getElementById("mon_paneer_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("mon_paneer_plus").addEventListener("click", function(){
     s = document.getElementById("mon_paneer_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Paneer&ldo=1");
     document.getElementById("mon_paneer_val").value = parseInt(s) + 1;
    
});

 
</script>




                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/32.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>FRESH CHEESE</h5>
                <p style="color:red;">₹ 57 / 200 g</p>
                 <button id="mon_cheese_minus" class="btn btn-default btn-sm" >-</button>

                <?php $mon = $data[1]['Cheese']; echo '<textarea readonly id="mon_cheese_val" type="input" value = "'.$mon.'size="5px">'.$mon.'</textarea>'; ?>

                <button id="mon_cheese_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("mon_cheese_minus").addEventListener("click", function(){
     s = document.getElementById("mon_cheese_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Cheese&ldo=2");
     document.getElementById("mon_cheese_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("mon_cheese_plus").addEventListener("click", function(){
     s = document.getElementById("mon_cheese_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Cheese&ldo=1");
     document.getElementById("mon_cheese_val").value = parseInt(s) + 1;
    
});

 
</script>


                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/33.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>SINGLE TONED MILK</h5>
                <p style="color:red;">₹ 45 / 1 L</p>
                 <button id="mon_smilk_minus" class="btn btn-default btn-sm" >-</button>

                 <?php $mon = $data[1]['Stmilk']; echo '<textarea readonly id="mon_smilk_val" type="input" value = "'.$mon.'size="5px">'.$mon.'</textarea>'; ?>

                <button id="mon_smilk_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("mon_smilk_minus").addEventListener("click", function(){
     s = document.getElementById("mon_smilk_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Stmilk&ldo=2");
     document.getElementById("mon_smilk_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("mon_smilk_plus").addEventListener("click", function(){
     s = document.getElementById("mon_smilk_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Stmilk&ldo=1");
     document.getElementById("mon_smilk_val").value = parseInt(s) + 1;
    
});

 
</script>



<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/34.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>DOUBLE TONED MILK</h5>
                <p style="color:red;">₹ 45 / 1 L</p>
                  <button id="mon_dmilk_minus" class="btn btn-default btn-sm" >-</button>

                 <?php $mon = $data[1]['Dtmilk']; echo '<textarea readonly id="mon_dmilk_val" type="input" value = "'.$mon.'size="5px">'.$mon.'</textarea>'; ?>

                <button id="mon_dmilk_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("mon_dmilk_minus").addEventListener("click", function(){
     s = document.getElementById("mon_dmilk_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Dtmilk&ldo=2");
     document.getElementById("mon_dmilk_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("mon_dmilk_plus").addEventListener("click", function(){
     s = document.getElementById("mon_dmilk_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Dtmilk&ldo=1");
     document.getElementById("mon_dmilk_val").value = parseInt(s) + 1;
    
});

 
</script>



<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/36.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>SOUR CURD</h5>
                <p style="color:red;">₹ 50 / 500 g</p>
              <button id="mon_socurd_minus" class="btn btn-default btn-sm" >-</button>

                 <?php $mon = $data[1]['Sour_Curd']; echo '<textarea readonly id="mon_socurd_val" type="input" value = "'.$mon.'size="5px">'.$mon.'</textarea>'; ?>

                <button id="mon_socurd_plus" class="btn btn-default btn-sm" >+</button>
</div>
<script>
document.getElementById("mon_socurd_minus").addEventListener("click", function(){
     s = document.getElementById("mon_socurd_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Sour_Curd&ldo=2");
     document.getElementById("mon_socurd_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("mon_socurd_plus").addEventListener("click", function(){
     s = document.getElementById("mon_socurd_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Sour_Curd&ldo=1");
     document.getElementById("mon_socurd_val").value = parseInt(s) + 1;
    
});

</script>



<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/37.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>SWEET CURD</h5>
                <p style="color:red;">₹ 80 / 500 g</p>
                <button id="mon_swcurd_minus" class="btn btn-default btn-sm" >-</button>

                 <?php $mon = $data[1]['Sweet_Curd']; echo '<textarea readonly id="mon_swcurd_val" type="input" value = "'.$mon.'size="5px">'.$mon.'</textarea>'; ?>

                <button id="mon_swcurd_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>
document.getElementById("mon_swcurd_minus").addEventListener("click", function(){
     s = document.getElementById("mon_swcurd_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Sweet_Curd&ldo=2");
     document.getElementById("mon_swcurd_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("mon_swcurd_plus").addEventListener("click", function(){
     s = document.getElementById("mon_swcurd_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Sweet_Curd&ldo=1");
     document.getElementById("mon_swcurd_val").value = parseInt(s) + 1;
    
});

</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/38.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>PORK RIBS</h5>
                <p style="color:red;">₹ 350 / 500 g</p>
                <button id="mon_poribs_minus" class="btn btn-default btn-sm" >-</button>

                 <?php $mon = $data[1]['Pork_ribs']; echo '<textarea readonly id="mon_poribs_val" type="input" value = "'.$mon.'size="5px">'.$mon.'</textarea>'; ?>

                <button id="mon_poribs_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>
document.getElementById("mon_poribs_minus").addEventListener("click", function(){
     s = document.getElementById("mon_poribs_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Pork_ribs&ldo=2");
     document.getElementById("mon_poribs_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("mon_poribs_plus").addEventListener("click", function(){
     s = document.getElementById("mon_poribs_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Pork_ribs&ldo=1");
     document.getElementById("mon_poribs_val").value = parseInt(s) + 1;
    
});

</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/39.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>PORK CHOPS (BONELESS)</h5>
                <p style="color:red;">₹ 320 / 500 g</p>
                 <button id="mon_pochops_minus" class="btn btn-default btn-sm" >-</button>

                <?php $mon = $data[1]['Pork_chops_bl']; echo '<textarea readonly id="mon_pochops_val" type="input" value = "'.$mon.'size="5px">'.$mon.'</textarea>'; ?>

                <button id="mon_pochops_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>
document.getElementById("mon_pochops_minus").addEventListener("click", function(){
     s = document.getElementById("mon_pochops_val").value;
     if(parseInt(s) == 0) return;
      $("#lab").load("js_change.php?value="+s+"&day=1&item=Pork_chops_bl&ldo=2");
     document.getElementById("mon_pochops_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("mon_pochops_plus").addEventListener("click", function(){
     s = document.getElementById("mon_pochops_val").value;
     if(parseInt(s) == 10) return;
      $("#lab").load("js_change.php?value="+s+"&day=1&item=Pork_chops_bl&ldo=1");
     document.getElementById("mon_pochops_val").value = parseInt(s) + 1;
    
});

</script>

                <img src="img/portfolio/40.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>PORK CHOPS (BONE)</h5>
                <p style="color:red;">₹ 290 / 500 g</p>
                 <button id="mon_pochopsb_minus" class="btn btn-default btn-sm" >-</button>

                <?php $mon = $data[1]['Pork_chops_bn']; echo '<textarea readonly id="mon_pochopsb_val" type="input" value = "'.$mon.'size="5px">'.$mon.'</textarea>'; ?>

                <button id="mon_pochopsb_plus" class="btn btn-default btn-sm" >+</button>

<script>
document.getElementById("mon_pochopsb_minus").addEventListener("click", function(){
     s = document.getElementById("mon_pochopsb_val").value;
     if(parseInt(s) == 0) return;
      $("#lab").load("js_change.php?value="+s+"&day=1&item=Pork_chops_bn&ldo=2");
     document.getElementById("mon_pochopsb_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("mon_pochopsb_plus").addEventListener("click", function(){
     s = document.getElementById("mon_pochopsb_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=1&item=Pork_chops_bn&ldo=1");
     document.getElementById("mon_pochopsb_val").value = parseInt(s) + 1;
    
});

</script>
  </section>





























    
  <section id="content2">
   <br>
  <hr>
    
            <div class="col-md-3 product-model-sec">
            <img src="img/portfolio/41.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>BASMATI RICE</h5>
                <p style="color:red;">₹ 77 / 500 g</p>
                <button id="tue_basmati_minus" class="btn btn-default btn-sm" >-</button>

                <?php $tue = $data[2]['Basmati']; echo '<textarea readonly id="tue_basmati_val" type="input" value = "'.$tue.'size="5px">'.$tue.'</textarea>'; ?>

                <button id="tue_basmati_plus" class="btn btn-default btn-sm" >+</button>
            </div>
<div id="lab"></div>
            <script>

document.getElementById("tue_basmati_minus").addEventListener("click", function(){
     s = document.getElementById("tue_basmati_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Basmati&ldo=2");
     document.getElementById("tue_basmati_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("tue_basmati_plus").addEventListener("click", function(){
     s = document.getElementById("tue_basmati_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Basmati&ldo=1");
     document.getElementById("tue_basmati_val").value = parseInt(s) + 1;
});

 
</script>


<div class="col-md-3 product-model-sec">
                <img src="img/portfolio/42.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>BASKATI RICE</h5>
                <p style="color:red;">₹ 28 / 500 g</p>
                 <button id="tue_baskati_minus" class="btn btn-default btn-sm" >-</button>

                 <?php $tue = $data[2]['Baskati']; echo '<textarea readonly id="tue_baskati_val" type="input" value = "'.$tue.'size="5px">'.$tue.'</textarea>'; ?>
                 
                <button id="tue_baskati_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("tue_baskati_minus").addEventListener("click", function(){
     s = document.getElementById("tue_baskati_val").value;
     if(parseInt(s) == 0) return;
      $("#lab").load("js_change.php?value="+s+"&day=2&item=Baskati&ldo=2");
     document.getElementById("tue_baskati_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("tue_baskati_plus").addEventListener("click", function(){
     s = document.getElementById("tue_baskati_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Baskati&ldo=1");
     document.getElementById("tue_baskati_val").value = parseInt(s) + 1;
    
});

 
</script>


<div class="col-md-3 product-model-sec">
                <img src="img/portfolio/43.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>MOONG DAL</h5>
                <p style="color:red;">₹ 56 / 500 g</p>
                <button id="tue_moong_minus" class="btn btn-default btn-sm" >-</button>

                <?php $tue = $data[2]['Moong']; echo '<textarea readonly id="tue_moong_val" type="input" value = "'.$tue.'size="5px">'.$tue.'</textarea>'; ?>
                
                <button id="tue_moong_plus" class="btn btn-default btn-sm" >+</button>
</div>


<script>

document.getElementById("tue_moong_minus").addEventListener("click", function(){
     s = document.getElementById("tue_moong_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Moong&ldo=2");
     document.getElementById("tue_moong_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("tue_moong_plus").addEventListener("click", function(){
     s = document.getElementById("tue_moong_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Moong&ldo=1");
     document.getElementById("tue_moong_val").value = parseInt(s) + 1;
    
});

 
</script>





                <div class="col-md-3 product-model-sec">
                <img src="img/portfolio/44.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>MASOOR DAL</h5>
                <p style="color:red;">₹ 55 / 500 g</p>
                <button id="tue_masoor_minus" class="btn btn-default btn-sm" >-</button>

                <?php $tue = $data[2]['Masoor']; echo '<textarea readonly id="tue_masoor_val" type="input" value = "'.$tue.'size="5px">'.$tue.'</textarea>'; ?>

                <button id="tue_masoor_plus" class="btn btn-default btn-sm" >+</button>
</div>



<script>

document.getElementById("tue_masoor_minus").addEventListener("click", function(){
     s = document.getElementById("tue_masoor_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Masoor&ldo=2");
     document.getElementById("tue_masoor_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("tue_masoor_plus").addEventListener("click", function(){
     s = document.getElementById("tue_masoor_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Masoor&ldo=1");
     document.getElementById("tue_masoor_val").value = parseInt(s) + 1;
    
});

 
</script>


</br>


                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/45.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CHANA DAL</h5>
                <p style="color:red;">₹ 45 / 500 g</p>
                 <button id="tue_chana_minus" class="btn btn-default btn-sm" >-</button>
                <?php $tue = $data[2]['Chana']; echo '<textarea readonly id="tue_chana_val" type="input" value = "'.$tue.'size="5px">'.$tue.'</textarea>'; ?>

                <button id="tue_chana_plus" class="btn btn-default btn-sm" >+</button>
</div>


<script>

document.getElementById("tue_chana_minus").addEventListener("click", function(){
     s = document.getElementById("tue_chana_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Chana&ldo=2");
     document.getElementById("tue_chana_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("tue_chana_plus").addEventListener("click", function(){
     s = document.getElementById("tue_chana_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Chana&ldo=1");
     document.getElementById("tue_chana_val").value = parseInt(s) + 1;
    
});

 
</script>


                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/46.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>ARHAR DAL</h5>
                <p style="color:red;">₹ 87 / 500 g</p>
                 <button id="tue_arhar_minus" class="btn btn-default btn-sm" >-</button>

                <?php $tue = $data[2]['Arhar']; echo '<textarea readonly id="tue_arhar_val" type="input" value = "'.$tue.'size="5px">'.$tue.'</textarea>'; ?>

                <button id="tue_arhar_plus" class="btn btn-default btn-sm" >+</button>
</div>


<script>

document.getElementById("tue_arhar_minus").addEventListener("click", function(){
     s = document.getElementById("tue_arhar_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Arhar&ldo=2");
     document.getElementById("tue_arhar_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("tue_arhar_plus").addEventListener("click", function(){
     s = document.getElementById("tue_arhar_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Arhar&ldo=1");
     document.getElementById("tue_arhar_val").value = parseInt(s) + 1;
    
});

 
</script>



                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/47.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>POTATO</h5>
                <p style="color:red;">₹ 25 / 1 Kg</p>
                 <button id="tue_potato_minus" class="btn btn-default btn-sm" >-</button>
                    <?php $tue = $data[2]['Potato']; echo '<textarea readonly id="tue_potato_val" type="input" value = "'.$tue.'size="5px">'.$tue.'</textarea>'; ?>

                <button id="tue_potato_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("tue_potato_minus").addEventListener("click", function(){
     s = document.getElementById("tue_potato_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Potato&ldo=2");
     document.getElementById("tue_poatato_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("tue_potato_plus").addEventListener("click", function(){
     s = document.getElementById("tue_potato_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Potato&ldo=1");
     document.getElementById("tue_potato_val").value = parseInt(s) + 1;
    
});

 
</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/48.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>ONION</h5>
                <p style="color:red;">₹ 135 / 500 g</p>
                <button id="tue_onion_minus" class="btn btn-default btn-sm" >-</button>

                <?php $tue = $data[2]['Onion']; echo '<textarea readonly id="tue_onion_val" type="input" value = "'.$tue.'size="5px">'.$tue.'</textarea>'; ?>

                <button id="tue_onion_plus" class="btn btn-default btn-sm" >+</button>
</div>


<script>

document.getElementById("tue_onion_minus").addEventListener("click", function(){
     s = document.getElementById("tue_onion_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Onion&ldo=2");
     document.getElementById("tue_onion_val").value = parseInt(s) - 1;
     
    
});
document.getElementById("tue_onion_plus").addEventListener("click", function(){
     s = document.getElementById("tue_onion_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Onion&ldo=1");
     document.getElementById("tue_onion_val").value = parseInt(s) + 1;
    
});

 
</script>


<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/49.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>TOMATO</h5>
                <p style="color:red;">₹ 135 / 500 g</p>
               <button id="tue_tomato_minus" class="btn btn-default btn-sm" >-</button>

                <?php $tue = $data[2]['Tomato']; echo '<textarea readonly id="tue_tomato_val" type="input" value = "'.$tue.'size="5px">'.$tue.'</textarea>'; ?>

                <button id="tue_tomato_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("tue_tomato_minus").addEventListener("click", function(){
     s = document.getElementById("tue_tomato_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Tomato&ldo=2");
     document.getElementById("tue_tomato_val").value = parseInt(s) - 1;
         
});

document.getElementById("tue_tomato_plus").addEventListener("click", function(){
     s = document.getElementById("tue_tomato_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Tomato&ldo=1");
     document.getElementById("tue_tomato_val").value = parseInt(s) + 1;
     
});

 
</script>



<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/50.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>GINGER</h5>
                <p style="color:red;">₹ 135 / 500 g</p>
                 <button id="tue_ginger_minus" class="btn btn-default btn-sm" >-</button>

                <?php $tue = $data[2]['Ginger']; echo '<textarea readonly id="tue_ginger_val" type="input" value = "'.$tue.'size="5px">'.$tue.'</textarea>'; ?>
                
                <button id="tue_ginger_plus" class="btn btn-default btn-sm" >+</button>
            
</div>



<script>

document.getElementById("tue_ginger_minus").addEventListener("click", function(){
     s = document.getElementById("tue_ginger_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Ginger&ldo=2");
     document.getElementById("tue_ginger_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("tue_ginger_plus").addEventListener("click", function(){
     s = document.getElementById("tue_ginger_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Ginger&ldo=1");
     document.getElementById("tue_ginger_val").value = parseInt(s) + 1;
    
});

 
</script>


<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/51.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>GARLIC</h5>
                <p style="color:red;">₹ 135 / 500 g</p>
                <button id="tue_garlic_minus" class="btn btn-default btn-sm" >-</button>

                <?php $tue = $data[2]['Garlic']; echo '<textarea readonly id="tue_garlic_val" type="input" value = "'.$tue.'size="5px">'.$tue.'</textarea>'; ?>
               

                <button id="tue_garlic_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("tue_garlic_minus").addEventListener("click", function(){
     s = document.getElementById("tue_garlic_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Garlic&ldo=2");
     document.getElementById("tue_garlic_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("tue_garlic_plus").addEventListener("click", function(){
     s = document.getElementById("tue_garlic_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Garlic&ldo=1");
     document.getElementById("tue_garlic_val").value = parseInt(s) + 1;
    
});

 
</script>



<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/52.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CHILLI</h5>
                <p style="color:red;">₹ 135 / 500 g</p>
                    <button id="tue_chilli_minus" class="btn btn-default btn-sm" >-</button>

                <?php $tue = $data[2]['Chilli']; echo '<textarea readonly id="tue_chilli_val" type="input" value = "'.$tue.'size="5px">'.$tue.'</textarea>'; ?>

                <button id="tue_chilli_plus" class="btn btn-default btn-sm" >+</button>
</div>


<script>

document.getElementById("tue_chilli_minus").addEventListener("click", function(){
     s = document.getElementById("tue_chilli_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Chilli&ldo=2");
     document.getElementById("tue_chilli_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("tue_chilli_plus").addEventListener("click", function(){
     s = document.getElementById("tue_chilli_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Chilli&ldo=1");
     document.getElementById("tue_chilli_val").value = parseInt(s) + 1;
    
});

 
</script>


<div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/01.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CHICKEN DRUMSTICKS</h5>
                <p style="color:red;">₹ 135 / 500 g</p>
                  <button id="tue_drum_minus" class="btn btn-default btn-sm" >-</button>

                <?php $tue = $data[2]['Chick_drums']; echo '<textarea readonly id="tue_drum_val" type="input" value = "'.$tue.'size="5px">'.$tue.'</textarea>'; ?>

                <button id="tue_drum_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("tue_drum_minus").addEventListener("click", function(){
     s = document.getElementById("tue_drum_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Chick_drums&ldo=2");
     document.getElementById("tue_drum_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("tue_drum_plus").addEventListener("click", function(){
     s = document.getElementById("tue_drum_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Chick_drums&ldo=1");
     document.getElementById("tue_drum_val").value = parseInt(s) + 1;
    
});

 
</script>

                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/02.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CHICKEN BONELESS</h5>
                <p style="color:red;">₹ 160 / 500 g</p>
                  <button id="tue_chbonls_minus" class="btn btn-default btn-sm" >-</button>
            <?php $tue = $data[2]['Chick_boneless']; echo '<textarea readonly id="tue_chbonls_val" type="input" value = "'.$tue.'size="5px">'.$tue.'</textarea>'; ?>

                <button id="tue_chbonls_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("tue_chbonls_minus").addEventListener("click", function(){
     s = document.getElementById("tue_chbonls_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Chick_boneless&ldo=2");
     document.getElementById("tue_chbonls_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("tue_chbonls_plus").addEventListener("click", function(){
     s = document.getElementById("tue_chbonls_val").value;
     if(parseInt(s) == 10) return;
      $("#lab").load("js_change.php?value="+s+"&day=2&item=Chick_boneless&ldo=1");
     document.getElementById("tue_chbonls_val").value = parseInt(s) + 1;
    
});

 
</script>



                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/03.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CHICKEN KEEMA</h5>
                <p style="color:red;">₹165 / 500 g</p>
                <button id="tue_chkee_minus" class="btn btn-default btn-sm" >-</button>

                <?php $tue = $data[2]['Chick_keema']; echo '<textarea readonly id="tue_chkee_val" type="input" value = "'.$tue.'size="5px">'.$tue.'</textarea>'; ?>

                <button id="tue_chkee_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("tue_chkee_minus").addEventListener("click", function(){
     s = document.getElementById("tue_chkee_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Chick_keema&ldo=2");
     document.getElementById("tue_chkee_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("tue_chkee_plus").addEventListener("click", function(){
     s = document.getElementById("tue_chkee_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Chick_keema&ldo=1");
     document.getElementById("tue_chkee_val").value = parseInt(s) + 1;
    
});

 
</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/04.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>WHOLE SKINLESS CHICKEN</h5>
                <p style="color:red;">₹ 190 ~ 1 Kg</p>
                 <button id="tue_chwh_minus" class="btn btn-default btn-sm" >-</button>

                <?php $tue = $data[2]['Chick_whole_skinless']; echo '<textarea readonly id="tue_chwh_val" type="input" value = "'.$tue.'size="5px">'.$tue.'</textarea>'; ?>

                <button id="tue_chwh_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("tue_chwh_minus").addEventListener("click", function(){
     s = document.getElementById("tue_chwh_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Chick_whole_skinless&ldo=2");
     document.getElementById("tue_chwh_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("tue_chwh_plus").addEventListener("click", function(){
     s = document.getElementById("tue_chwh_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Chick_whole_skinless&ldo=1");
     document.getElementById("tue_chwh_val").value = parseInt(s) + 1;
    
});

 
</script>






<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/06.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CHICKEN BREAST</h5>
                <p style="color:red;">₹ 160 / 500 g</p>
                 <button id="tue_chbr_minus" class="btn btn-default btn-sm" >-</button>

               <?php $tue = $data[2]['Chick_breast']; echo '<textarea readonly id="tue_chbr_val" type="input" value = "'.$tue.'size="5px">'.$tue.'</textarea>'; ?>

                <button id="tue_chbr_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("tue_chbr_minus").addEventListener("click", function(){
     s = document.getElementById("tue_chbr_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Chick_breast&ldo=2");
     document.getElementById("tue_chbr_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("tue_chbr_plus").addEventListener("click", function(){
     s = document.getElementById("tue_chbr_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Chick_breast&ldo=1");
     document.getElementById("tue_chbr_val").value = parseInt(s) + 1;
    
});

 
</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/07.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CHICKEN CUT</h5>
                <p style="color:red;">₹ 105 / 500 g</p>
                  <button id="tue_chc_minus" class="btn btn-default btn-sm" >-</button>

                <?php $tue = $data[2]['Chick_cut']; echo '<textarea readonly id="tue_chc_val" type="input" value = "'.$tue.'size="5px">'.$tue.'</textarea>'; ?>

                <button id="tue_chc_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("tue_chc_minus").addEventListener("click", function(){
     s = document.getElementById("tue_chc_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Chick_cut&ldo=2");
     document.getElementById("tue_chc_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("tue_chc_plus").addEventListener("click", function(){
     s = document.getElementById("tue_chc_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Chick_cut&ldo=1");
     document.getElementById("tue_chc_val").value = parseInt(s) + 1;
    
});

 
</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/08.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>WHOLE SKIN CHICKEN</h5>
                <p style="color:red;">₹ 190 ~ 1 Kg</p>
                  <button id="tue_chwhsk_minus" class="btn btn-default btn-sm" >-</button>

                <?php $tue = $data[2]['Chick_whole_skin']; echo '<textarea readonly id="tue_chwhsk_val" type="input" value = "'.$tue.'" size="5px">'.$tue.'</textarea>'; ?>

                <button id="tue_chwhsk_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("tue_chwhsk_minus").addEventListener("click", function(){
     s = document.getElementById("tue_chwhsk_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Chick_whole_skin&ldo=2");
     document.getElementById("tue_chwhsk_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("tue_chwhsk_plus").addEventListener("click", function(){
     s = document.getElementById("tue_chwhsk_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Chick_whole_skin&ldo=1");
     document.getElementById("tue_chwhsk_val").value = parseInt(s) + 1;
    
});

</script>



<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/26.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CHICKEN 8 Pc CUT</h5>
                <p style="color:red;">₹ 190 ~ 1 Kg</p>
 <button id="tue_ch8pc_minus" class="btn btn-default btn-sm" >-</button>

                 <?php $tue = $data[2]['Chick_8pc_cut']; echo '<textarea readonly id="tue_ch8pc_val" type="input" value = "'.$tue.'size="5px">'.$tue.'</textarea>'; ?>

                <button id="tue_ch8pc_plus" class="btn btn-default btn-sm" >+</button>               
</div>

<script>

document.getElementById("tue_ch8pc_minus").addEventListener("click", function(){
     s = document.getElementById("tue_ch8pc_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Chick_8pc_cut&ldo=2");
     document.getElementById("tue_ch8pc_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("tue_ch8pc_plus").addEventListener("click", function(){
     s = document.getElementById("tue_ch8pc_val").value;
     if(parseInt(s) == 10) return;
      $("#lab").load("js_change.php?value="+s+"&day=2&item=Chick_8pc_cut&ldo=1");
     document.getElementById("tue_ch8pc_val").value = parseInt(s) + 1;
    
});

 
</script>





<div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/09.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>MUTTON CHOPS (BONE)</h5>
                <p style="color:red;">₹ 270 / 500 g</p>
                <button id="tue_muttchbn_minus" class="btn btn-default btn-sm" >-</button>

                <?php $tue = $data[2]['Mutt_chop_bone']; echo '<textarea readonly id="tue_muttchbn_val" type="input" value = "'.$tue.'size="5px">'.$tue.'</textarea>'; ?>

                <button id="tue_muttchbn_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("tue_muttchbn_minus").addEventListener("click", function(){
     s = document.getElementById("tue_muttchbn_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Mutt_chop_bone&ldo=2");
     document.getElementById("tue_muttchbn_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("tue_muttchbn_plus").addEventListener("click", function(){
     s = document.getElementById("tue_muttchbn_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Mutt_chop_bone&ldo=1");
     document.getElementById("tue_muttchbn_val").value = parseInt(s) + 1;
    
});

 
</script>


                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/10.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>MUTTON CHOPS (B/L)</h5>
                <p style="color:red;">₹ 335 / 500 g</p>
                 <button id="tue_muttch_minus" class="btn btn-default btn-sm" >-</button>

                <?php $tue = $data[2]['Mutt_chop_bl']; echo '<textarea readonly id="tue_muttch_val" type="input" value = "'.$tue.'size="5px">'.$tue.'</textarea>'; ?>

                <button id="tue_muttch_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("tue_muttch_minus").addEventListener("click", function(){
     s = document.getElementById("tue_muttch_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Mutt_chop_bl&ldo=2");
     document.getElementById("tue_muttch_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("tue_muttch_plus").addEventListener("click", function(){
     s = document.getElementById("tue_muttch_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Mutt_chop_bl&ldo=1");
     document.getElementById("tue_muttch_val").value = parseInt(s) + 1;
    
});

 
</script>




                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/11.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>MUTTON KEEMA</h5>
                <p style="color:red;">₹ 335 / 1 Kg</p>
               <button id="tue_muttkee_minus" class="btn btn-default btn-sm" >-</button>

                <?php $tue = $data[2]['Mutt_keema']; echo '<textarea readonly id="tue_muttkee_val" type="input" value = "'.$tue.'size="5px">'.$tue.'</textarea>'; ?>

                <button id="tue_muttkee_plus" class="btn btn-default btn-sm" >+</button>
</div>


<script>

document.getElementById("tue_muttkee_minus").addEventListener("click", function(){
     s = document.getElementById("tue_muttkee_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Mutt_keema&ldo=2");
     document.getElementById("tue_muttkee_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("tue_muttkee_plus").addEventListener("click", function(){
     s = document.getElementById("tue_muttkee_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Mutt_keema&ldo=1");
     document.getElementById("tue_muttkee_val").value = parseInt(s) + 1;
    
});

 
</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/12.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>ROHU </h5>
                <p style="color:red;">₹ 110 / 500 g</p>
                <button id="tue_rohu_minus" class="btn btn-default btn-sm" >-</button>

                <?php $tue = $data[2]['Rohu']; echo '<textarea readonly id="tue_rohu_val" type="input" value = "'.$tue.'size="5px">'.$tue.'</textarea>'; ?>

                <button id="tue_rohu_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("tue_rohu_minus").addEventListener("click", function(){
     s = document.getElementById("tue_rohu_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Rohu&ldo=2");
     document.getElementById("tue_rohu_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("tue_rohu_plus").addEventListener("click", function(){
     s = document.getElementById("tue_rohu_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Rohu&ldo=1");
     document.getElementById("tue_rohu_val").value = parseInt(s) + 1;
    
});

 
</script>



<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/13.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CATLA </h5>
                <p style="color:red;">₹ 110 / 500 g</p>
                <button id="tue_catla_minus" class="btn btn-default btn-sm" >-</button>

                <?php $tue = $data[2]['Catla']; echo '<textarea readonly id="tue_catla_val" type="input" value = "'.$tue.'size="5px">'.$tue.'</textarea>'; ?>

                <button id="tue_catla_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("tue_catla_minus").addEventListener("click", function(){
     s = document.getElementById("tue_catla_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Catla&ldo=2");
     document.getElementById("tue_catla_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("tue_catla_plus").addEventListener("click", function(){
     s = document.getElementById("tue_catla_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Catla&ldo=1");
     document.getElementById("tue_catla_val").value = parseInt(s) + 1;
    
});

 
</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/14.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>SALMON </h5>
                <p style="color:red;">₹ 580 / 500 g</p>
                <button id="tue_salmon_minus" class="btn btn-default btn-sm" >-</button>

                <?php $tue = $data[2]['Salmon']; echo '<textarea readonly id="tue_salmon_val" type="input" value = "'.$tue.'size="5px">'.$tue.'</textarea>'; ?>
                
                <button id="tue_salmon_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("tue_salmon_minus").addEventListener("click", function(){
     s = document.getElementById("tue_salmon_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Salmon&ldo=2");
     document.getElementById("tue_salmon_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("tue_salmon_plus").addEventListener("click", function(){
     s = document.getElementById("tue_salmon_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Salmon&ldo=1");
     document.getElementById("tue_salmon_val").value = parseInt(s) + 1;
    
});

 
</script>



<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/15.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>PRAWNS </h5>
                <p style="color:red;">₹ 610 / 500 g</p>
                <button id="tue_prawn_minus" class="btn btn-default btn-sm" >-</button>

                <?php $tue = $data[2]['Prawns']; echo '<textarea readonly id="tue_prawn_val" type="input" value = "'.$tue.'size="5px">'.$tue.'</textarea>'; ?>

                <button id="tue_prawn_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("tue_prawn_minus").addEventListener("click", function(){
     s = document.getElementById("tue_prawn_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Prawns&ldo=2");
     document.getElementById("tue_prawn_val").value = parseInt(s) - 1;
         
});

document.getElementById("tue_prawn_plus").addEventListener("click", function(){
     s = document.getElementById("tue_prawn_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Prawns&ldo=1");
     document.getElementById("tue_prawn_val").value = parseInt(s) + 1;
    
});

 
</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/16.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>WHITE POMPHRET FISH</h5>
                <p style="color:red;">₹ 785 / 500 g</p>
                <button id="tue_pomphret_minus" class="btn btn-default btn-sm" >-</button>

                <?php $tue = $data[2]['Pomphret']; echo '<textarea readonly id="tue_pomphret_val" type="input" value = "'.$tue.'size="5px">'.$tue.'</textarea>'; ?>
                
                <button id="tue_pomphret_plus" class="btn btn-default btn-sm" >+</button>
</div>


<script>

document.getElementById("tue_pomphret_minus").addEventListener("click", function(){
     s = document.getElementById("tue_pomphret_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Pomphret&ldo=2");
     document.getElementById("tue_pomphret_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("tue_pomphret_plus").addEventListener("click", function(){
     s = document.getElementById("tue_pomphret_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Pomphret&ldo=1");
     document.getElementById("tue_pomphret_val").value = parseInt(s) + 1;
    
});

</script>


<div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/31.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>PANEER</h5>
                <p style="color:red;">₹ 140 / 500 g</p>
                   <button id="tue_paneer_minus" class="btn btn-default btn-sm" >-</button>

                <?php $tue = $data[2]['Paneer']; echo '<textarea readonly id="tue_paneer_val" type="input" value = "'.$tue.'size="5px">'.$tue.'</textarea>'; ?>

                <button id="tue_paneer_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("tue_paneer_minus").addEventListener("click", function(){
     s = document.getElementById("tue_paneer_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Paneer&ldo=2");
     document.getElementById("tue_paneer_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("tue_paneer_plus").addEventListener("click", function(){
     s = document.getElementById("tue_paneer_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Paneer&ldo=1");
     document.getElementById("tue_paneer_val").value = parseInt(s) + 1;
    
});

 
</script>




                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/32.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>FRESH CHEESE</h5>
                <p style="color:red;">₹ 57 / 200 g</p>
                 <button id="tue_cheese_minus" class="btn btn-default btn-sm" >-</button>

                <?php $tue = $data[2]['Cheese']; echo '<textarea readonly id="tue_cheese_val" type="input" value = "'.$tue.'size="5px">'.$tue.'</textarea>'; ?>

                <button id="tue_cheese_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("tue_cheese_minus").addEventListener("click", function(){
     s = document.getElementById("tue_cheese_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Cheese&ldo=2");
     document.getElementById("tue_cheese_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("tue_cheese_plus").addEventListener("click", function(){
     s = document.getElementById("tue_cheese_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Cheese&ldo=1");
     document.getElementById("tue_cheese_val").value = parseInt(s) + 1;
    
});

 
</script>


                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/33.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>SINGLE TONED MILK</h5>
                <p style="color:red;">₹ 45 / 1 L</p>
                 <button id="tue_smilk_minus" class="btn btn-default btn-sm" >-</button>

                 <?php $tue = $data[2]['Stmilk']; echo '<textarea readonly id="tue_smilk_val" type="input" value = "'.$tue.'size="5px">'.$tue.'</textarea>'; ?>

                <button id="tue_smilk_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("tue_smilk_minus").addEventListener("click", function(){
     s = document.getElementById("tue_smilk_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Stmilk&ldo=2");
     document.getElementById("tue_smilk_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("tue_smilk_plus").addEventListener("click", function(){
     s = document.getElementById("tue_smilk_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Stmilk&ldo=1");
     document.getElementById("tue_smilk_val").value = parseInt(s) + 1;
    
});

 
</script>



<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/34.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>DOUBLE TONED MILK</h5>
                <p style="color:red;">₹ 45 / 1 L</p>
                  <button id="tue_dmilk_minus" class="btn btn-default btn-sm" >-</button>

                 <?php $tue = $data[2]['Dtmilk']; echo '<textarea readonly id="tue_dmilk_val" type="input" value = "'.$tue.'size="5px">'.$tue.'</textarea>'; ?>

                <button id="tue_dmilk_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("tue_dmilk_minus").addEventListener("click", function(){
     s = document.getElementById("tue_dmilk_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Dtmilk&ldo=2");
     document.getElementById("tue_dmilk_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("tue_dmilk_plus").addEventListener("click", function(){
     s = document.getElementById("tue_dmilk_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Dtmilk&ldo=1");
     document.getElementById("tue_dmilk_val").value = parseInt(s) + 1;
    
});

 
</script>



<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/36.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>SOUR CURD</h5>
                <p style="color:red;">₹ 50 / 500 g</p>
              <button id="tue_socurd_minus" class="btn btn-default btn-sm" >-</button>

                 <?php $tue = $data[2]['Sour_Curd']; echo '<textarea readonly id="tue_socurd_val" type="input" value = "'.$tue.'size="5px">'.$tue.'</textarea>'; ?>

                <button id="tue_socurd_plus" class="btn btn-default btn-sm" >+</button>
</div>
<script>
document.getElementById("tue_socurd_minus").addEventListener("click", function(){
     s = document.getElementById("tue_socurd_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Sour_Curd&ldo=2");
     document.getElementById("tue_socurd_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("tue_socurd_plus").addEventListener("click", function(){
     s = document.getElementById("tue_socurd_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Sour_Curd&ldo=1");
     document.getElementById("tue_socurd_val").value = parseInt(s) + 1;
    
});

</script>



<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/37.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>SWEET CURD</h5>
                <p style="color:red;">₹ 80 / 500 g</p>
                <button id="tue_swcurd_minus" class="btn btn-default btn-sm" >-</button>

                 <?php $tue = $data[2]['Sweet_Curd']; echo '<textarea readonly id="tue_swcurd_val" type="input" value = "'.$tue.'size="5px">'.$tue.'</textarea>'; ?>

                <button id="tue_swcurd_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>
document.getElementById("tue_swcurd_minus").addEventListener("click", function(){
     s = document.getElementById("tue_swcurd_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Sweet_Curd&ldo=2");
     document.getElementById("tue_swcurd_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("tue_swcurd_plus").addEventListener("click", function(){
     s = document.getElementById("tue_swcurd_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Sweet_Curd&ldo=1");
     document.getElementById("tue_swcurd_val").value = parseInt(s) + 1;
    
});

</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/38.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>PORK RIBS</h5>
                <p style="color:red;">₹ 350 / 500 g</p>
                <button id="tue_poribs_minus" class="btn btn-default btn-sm" >-</button>

                 <?php $tue = $data[2]['Pork_ribs']; echo '<textarea readonly id="tue_poribs_val" type="input" value = "'.$tue.'size="5px">'.$tue.'</textarea>'; ?>

                <button id="tue_poribs_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>
document.getElementById("tue_poribs_minus").addEventListener("click", function(){
     s = document.getElementById("tue_poribs_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Pork_ribs&ldo=2");
     document.getElementById("tue_poribs_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("tue_poribs_plus").addEventListener("click", function(){
     s = document.getElementById("tue_poribs_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Pork_ribs&ldo=1");
     document.getElementById("tue_poribs_val").value = parseInt(s) + 1;
    
});

</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/39.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>PORK CHOPS (BONELESS)</h5>
                <p style="color:red;">₹ 320 / 500 g</p>
                 <button id="tue_pochops_minus" class="btn btn-default btn-sm" >-</button>

                <?php $tue = $data[2]['Pork_chops_bl']; echo '<textarea readonly id="tue_pochops_val" type="input" value = "'.$tue.'size="5px">'.$tue.'</textarea>'; ?>

                <button id="tue_pochops_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>
document.getElementById("tue_pochops_minus").addEventListener("click", function(){
     s = document.getElementById("tue_pochops_val").value;
     if(parseInt(s) == 0) return;
      $("#lab").load("js_change.php?value="+s+"&day=2&item=Pork_chops_bl&ldo=2");
     document.getElementById("tue_pochops_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("tue_pochops_plus").addEventListener("click", function(){
     s = document.getElementById("tue_pochops_val").value;
     if(parseInt(s) == 10) return;
      $("#lab").load("js_change.php?value="+s+"&day=2&item=Pork_chops_bl&ldo=1");
     document.getElementById("tue_pochops_val").value = parseInt(s) + 1;
    
});

</script>

                <img src="img/portfolio/40.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>PORK CHOPS (BONE)</h5>
                <p style="color:red;">₹ 290 / 500 g</p>
                 <button id="tue_pochopsb_minus" class="btn btn-default btn-sm" >-</button>

                <?php $tue = $data[2]['Pork_chops_bn']; echo '<textarea readonly id="tue_pochopsb_val" type="input" value = "'.$tue.'size="5px">'.$tue.'</textarea>'; ?>

                <button id="tue_pochopsb_plus" class="btn btn-default btn-sm" >+</button>

<script>
document.getElementById("tue_pochopsb_minus").addEventListener("click", function(){
     s = document.getElementById("tue_pochopsb_val").value;
     if(parseInt(s) == 0) return;
      $("#lab").load("js_change.php?value="+s+"&day=2&item=Pork_chops_bn&ldo=2");
     document.getElementById("tue_pochopsb_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("tue_pochopsb_plus").addEventListener("click", function(){
     s = document.getElementById("tue_pochopsb_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=2&item=Pork_chops_bn&ldo=1");
     document.getElementById("tue_pochopsb_val").value = parseInt(s) + 1;
    
});

</script>
  </section>           
  





















  <section id="content3">
   <br>
  <hr>
    
            <div class="col-md-3 product-model-sec">
            <img src="img/portfolio/41.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>BASMATI RICE</h5>
                <p style="color:red;">₹ 77 / 500 g</p>
                <button id="wed_basmati_minus" class="btn btn-default btn-sm" >-</button>

                <?php $wed = $data[3]['Basmati']; echo '<textarea readonly id="wed_basmati_val" type="input" value = "'.$wed.'size="5px">'.$wed.'</textarea>'; ?>

                <button id="wed_basmati_plus" class="btn btn-default btn-sm" >+</button>
            </div>
<div id="lab"></div>
            <script>

document.getElementById("wed_basmati_minus").addEventListener("click", function(){
     s = document.getElementById("wed_basmati_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Basmati&ldo=2");
     document.getElementById("wed_basmati_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("wed_basmati_plus").addEventListener("click", function(){
     s = document.getElementById("wed_basmati_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Basmati&ldo=1");
     document.getElementById("wed_basmati_val").value = parseInt(s) + 1;
});

 
</script>


<div class="col-md-3 product-model-sec">
                <img src="img/portfolio/42.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>BASKATI RICE</h5>
                <p style="color:red;">₹ 28 / 500 g</p>
                 <button id="wed_baskati_minus" class="btn btn-default btn-sm" >-</button>

                 <?php $wed = $data[3]['Baskati']; echo '<textarea readonly id="wed_baskati_val" type="input" value = "'.$wed.'size="5px">'.$wed.'</textarea>'; ?>
                 
                <button id="wed_baskati_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("wed_baskati_minus").addEventListener("click", function(){
     s = document.getElementById("wed_baskati_val").value;
     if(parseInt(s) == 0) return;
      $("#lab").load("js_change.php?value="+s+"&day=3&item=Baskati&ldo=2");
     document.getElementById("wed_baskati_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("wed_baskati_plus").addEventListener("click", function(){
     s = document.getElementById("wed_baskati_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Baskati&ldo=1");
     document.getElementById("wed_baskati_val").value = parseInt(s) + 1;
    
});

 
</script>


<div class="col-md-3 product-model-sec">
                <img src="img/portfolio/43.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>MOONG DAL</h5>
                <p style="color:red;">₹ 56 / 500 g</p>
                <button id="wed_moong_minus" class="btn btn-default btn-sm" >-</button>

                <?php $wed = $data[3]['Moong']; echo '<textarea readonly id="wed_moong_val" type="input" value = "'.$wed.'size="5px">'.$wed.'</textarea>'; ?>
                
                <button id="wed_moong_plus" class="btn btn-default btn-sm" >+</button>
</div>


<script>

document.getElementById("wed_moong_minus").addEventListener("click", function(){
     s = document.getElementById("wed_moong_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Moong&ldo=2");
     document.getElementById("wed_moong_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("wed_moong_plus").addEventListener("click", function(){
     s = document.getElementById("wed_moong_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Moong&ldo=1");
     document.getElementById("wed_moong_val").value = parseInt(s) + 1;
    
});

 
</script>





                <div class="col-md-3 product-model-sec">
                <img src="img/portfolio/44.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>MASOOR DAL</h5>
                <p style="color:red;">₹ 55 / 500 g</p>
                <button id="wed_masoor_minus" class="btn btn-default btn-sm" >-</button>

                <?php $wed = $data[3]['Masoor']; echo '<textarea readonly id="wed_masoor_val" type="input" value = "'.$wed.'size="5px">'.$wed.'</textarea>'; ?>

                <button id="wed_masoor_plus" class="btn btn-default btn-sm" >+</button>
</div>



<script>

document.getElementById("wed_masoor_minus").addEventListener("click", function(){
     s = document.getElementById("wed_masoor_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Masoor&ldo=2");
     document.getElementById("wed_masoor_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("wed_masoor_plus").addEventListener("click", function(){
     s = document.getElementById("wed_masoor_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Masoor&ldo=1");
     document.getElementById("wed_masoor_val").value = parseInt(s) + 1;
    
});

 
</script>


</br>


                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/45.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CHANA DAL</h5>
                <p style="color:red;">₹ 45 / 500 g</p>
                 <button id="wed_chana_minus" class="btn btn-default btn-sm" >-</button>
                <?php $wed = $data[3]['Chana']; echo '<textarea readonly id="wed_chana_val" type="input" value = "'.$wed.'size="5px">'.$wed.'</textarea>'; ?>

                <button id="wed_chana_plus" class="btn btn-default btn-sm" >+</button>
</div>


<script>

document.getElementById("wed_chana_minus").addEventListener("click", function(){
     s = document.getElementById("wed_chana_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Chana&ldo=2");
     document.getElementById("wed_chana_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("wed_chana_plus").addEventListener("click", function(){
     s = document.getElementById("wed_chana_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Chana&ldo=1");
     document.getElementById("wed_chana_val").value = parseInt(s) + 1;
    
});

 
</script>


                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/46.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>ARHAR DAL</h5>
                <p style="color:red;">₹ 87 / 500 g</p>
                 <button id="wed_arhar_minus" class="btn btn-default btn-sm" >-</button>

                <?php $wed = $data[3]['Arhar']; echo '<textarea readonly id="wed_arhar_val" type="input" value = "'.$wed.'size="5px">'.$wed.'</textarea>'; ?>

                <button id="wed_arhar_plus" class="btn btn-default btn-sm" >+</button>
</div>


<script>

document.getElementById("wed_arhar_minus").addEventListener("click", function(){
     s = document.getElementById("wed_arhar_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Arhar&ldo=2");
     document.getElementById("wed_arhar_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("wed_arhar_plus").addEventListener("click", function(){
     s = document.getElementById("wed_arhar_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Arhar&ldo=1");
     document.getElementById("wed_arhar_val").value = parseInt(s) + 1;
    
});

 
</script>



                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/47.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>POTATO</h5>
                <p style="color:red;">₹ 25 / 1 Kg</p>
                 <button id="wed_potato_minus" class="btn btn-default btn-sm" >-</button>
                    <?php $wed = $data[3]['Potato']; echo '<textarea readonly id="wed_potato_val" type="input" value = "'.$wed.'size="5px">'.$wed.'</textarea>'; ?>

                <button id="wed_potato_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("wed_potato_minus").addEventListener("click", function(){
     s = document.getElementById("wed_potato_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Potato&ldo=2");
     document.getElementById("wed_poatato_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("wed_potato_plus").addEventListener("click", function(){
     s = document.getElementById("wed_potato_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Potato&ldo=1");
     document.getElementById("wed_potato_val").value = parseInt(s) + 1;
    
});

 
</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/48.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>ONION</h5>
                <p style="color:red;">₹ 135 / 500 g</p>
                <button id="wed_onion_minus" class="btn btn-default btn-sm" >-</button>

                <?php $wed = $data[3]['Onion']; echo '<textarea readonly id="wed_onion_val" type="input" value = "'.$wed.'size="5px">'.$wed.'</textarea>'; ?>

                <button id="wed_onion_plus" class="btn btn-default btn-sm" >+</button>
</div>


<script>

document.getElementById("wed_onion_minus").addEventListener("click", function(){
     s = document.getElementById("wed_onion_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Onion&ldo=2");
     document.getElementById("wed_onion_val").value = parseInt(s) - 1;
     
    
});
document.getElementById("wed_onion_plus").addEventListener("click", function(){
     s = document.getElementById("wed_onion_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Onion&ldo=1");
     document.getElementById("wed_onion_val").value = parseInt(s) + 1;
    
});

 
</script>


<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/49.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>TOMATO</h5>
                <p style="color:red;">₹ 135 / 500 g</p>
               <button id="wed_tomato_minus" class="btn btn-default btn-sm" >-</button>

                <?php $wed = $data[3]['Tomato']; echo '<textarea readonly id="wed_tomato_val" type="input" value = "'.$wed.'size="5px">'.$wed.'</textarea>'; ?>

                <button id="wed_tomato_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("wed_tomato_minus").addEventListener("click", function(){
     s = document.getElementById("wed_tomato_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Tomato&ldo=2");
     document.getElementById("wed_tomato_val").value = parseInt(s) - 1;
         
});

document.getElementById("wed_tomato_plus").addEventListener("click", function(){
     s = document.getElementById("wed_tomato_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Tomato&ldo=1");
     document.getElementById("wed_tomato_val").value = parseInt(s) + 1;
     
});

 
</script>



<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/50.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>GINGER</h5>
                <p style="color:red;">₹ 135 / 500 g</p>
                 <button id="wed_ginger_minus" class="btn btn-default btn-sm" >-</button>

                <?php $wed = $data[3]['Ginger']; echo '<textarea readonly id="wed_ginger_val" type="input" value = "'.$wed.'size="5px">'.$wed.'</textarea>'; ?>
                
                <button id="wed_ginger_plus" class="btn btn-default btn-sm" >+</button>
            
</div>



<script>

document.getElementById("wed_ginger_minus").addEventListener("click", function(){
     s = document.getElementById("wed_ginger_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Ginger&ldo=2");
     document.getElementById("wed_ginger_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("wed_ginger_plus").addEventListener("click", function(){
     s = document.getElementById("wed_ginger_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Ginger&ldo=1");
     document.getElementById("wed_ginger_val").value = parseInt(s) + 1;
    
});

 
</script>


<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/51.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>GARLIC</h5>
                <p style="color:red;">₹ 135 / 500 g</p>
                <button id="wed_garlic_minus" class="btn btn-default btn-sm" >-</button>

                <?php $wed = $data[3]['Garlic']; echo '<textarea readonly id="wed_garlic_val" type="input" value = "'.$wed.'size="5px">'.$wed.'</textarea>'; ?>
               

                <button id="wed_garlic_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("wed_garlic_minus").addEventListener("click", function(){
     s = document.getElementById("wed_garlic_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Garlic&ldo=2");
     document.getElementById("wed_garlic_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("wed_garlic_plus").addEventListener("click", function(){
     s = document.getElementById("wed_garlic_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Garlic&ldo=1");
     document.getElementById("wed_garlic_val").value = parseInt(s) + 1;
    
});

 
</script>



<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/52.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CHILLI</h5>
                <p style="color:red;">₹ 135 / 500 g</p>
                    <button id="wed_chilli_minus" class="btn btn-default btn-sm" >-</button>

                <?php $wed = $data[3]['Chilli']; echo '<textarea readonly id="wed_chilli_val" type="input" value = "'.$wed.'size="5px">'.$wed.'</textarea>'; ?>

                <button id="wed_chilli_plus" class="btn btn-default btn-sm" >+</button>
</div>


<script>

document.getElementById("wed_chilli_minus").addEventListener("click", function(){
     s = document.getElementById("wed_chilli_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Chilli&ldo=2");
     document.getElementById("wed_chilli_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("wed_chilli_plus").addEventListener("click", function(){
     s = document.getElementById("wed_chilli_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Chilli&ldo=1");
     document.getElementById("wed_chilli_val").value = parseInt(s) + 1;
    
});

 
</script>


<div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/01.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CHICKEN DRUMSTICKS</h5>
                <p style="color:red;">₹ 135 / 500 g</p>
                  <button id="wed_drum_minus" class="btn btn-default btn-sm" >-</button>

                <?php $wed = $data[3]['Chick_drums']; echo '<textarea readonly id="wed_drum_val" type="input" value = "'.$wed.'size="5px">'.$wed.'</textarea>'; ?>

                <button id="wed_drum_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("wed_drum_minus").addEventListener("click", function(){
     s = document.getElementById("wed_drum_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Chick_drums&ldo=2");
     document.getElementById("wed_drum_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("wed_drum_plus").addEventListener("click", function(){
     s = document.getElementById("wed_drum_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Chick_drums&ldo=1");
     document.getElementById("wed_drum_val").value = parseInt(s) + 1;
    
});

 
</script>

                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/02.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CHICKEN BONELESS</h5>
                <p style="color:red;">₹ 160 / 500 g</p>
                  <button id="wed_chbonls_minus" class="btn btn-default btn-sm" >-</button>
            <?php $wed = $data[3]['Chick_boneless']; echo '<textarea readonly id="wed_chbonls_val" type="input" value = "'.$wed.'size="5px">'.$wed.'</textarea>'; ?>

                <button id="wed_chbonls_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("wed_chbonls_minus").addEventListener("click", function(){
     s = document.getElementById("wed_chbonls_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Chick_boneless&ldo=2");
     document.getElementById("wed_chbonls_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("wed_chbonls_plus").addEventListener("click", function(){
     s = document.getElementById("wed_chbonls_val").value;
     if(parseInt(s) == 10) return;
      $("#lab").load("js_change.php?value="+s+"&day=3&item=Chick_boneless&ldo=1");
     document.getElementById("wed_chbonls_val").value = parseInt(s) + 1;
    
});

 
</script>



                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/03.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CHICKEN KEEMA</h5>
                <p style="color:red;">₹165 / 500 g</p>
                <button id="wed_chkee_minus" class="btn btn-default btn-sm" >-</button>

                <?php $wed = $data[3]['Chick_keema']; echo '<textarea readonly id="wed_chkee_val" type="input" value = "'.$wed.'size="5px">'.$wed.'</textarea>'; ?>

                <button id="wed_chkee_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("wed_chkee_minus").addEventListener("click", function(){
     s = document.getElementById("wed_chkee_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Chick_keema&ldo=2");
     document.getElementById("wed_chkee_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("wed_chkee_plus").addEventListener("click", function(){
     s = document.getElementById("wed_chkee_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Chick_keema&ldo=1");
     document.getElementById("wed_chkee_val").value = parseInt(s) + 1;
    
});

 
</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/04.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>WHOLE SKINLESS CHICKEN</h5>
                <p style="color:red;">₹ 190 ~ 1 Kg</p>
                 <button id="wed_chwh_minus" class="btn btn-default btn-sm" >-</button>

                <?php $wed = $data[3]['Chick_whole_skinless']; echo '<textarea readonly id="wed_chwh_val" type="input" value = "'.$wed.'size="5px">'.$wed.'</textarea>'; ?>

                <button id="wed_chwh_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("wed_chwh_minus").addEventListener("click", function(){
     s = document.getElementById("wed_chwh_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Chick_whole_skinless&ldo=2");
     document.getElementById("wed_chwh_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("wed_chwh_plus").addEventListener("click", function(){
     s = document.getElementById("wed_chwh_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Chick_whole_skinless&ldo=1");
     document.getElementById("wed_chwh_val").value = parseInt(s) + 1;
    
});

 
</script>






<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/06.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CHICKEN BREAST</h5>
                <p style="color:red;">₹ 160 / 500 g</p>
                 <button id="wed_chbr_minus" class="btn btn-default btn-sm" >-</button>

               <?php $wed = $data[3]['Chick_breast']; echo '<textarea readonly id="wed_chbr_val" type="input" value = "'.$wed.'size="5px">'.$wed.'</textarea>'; ?>

                <button id="wed_chbr_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("wed_chbr_minus").addEventListener("click", function(){
     s = document.getElementById("wed_chbr_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Chick_breast&ldo=2");
     document.getElementById("wed_chbr_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("wed_chbr_plus").addEventListener("click", function(){
     s = document.getElementById("wed_chbr_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Chick_breast&ldo=1");
     document.getElementById("wed_chbr_val").value = parseInt(s) + 1;
    
});

 
</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/07.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CHICKEN CUT</h5>
                <p style="color:red;">₹ 105 / 500 g</p>
                  <button id="wed_chc_minus" class="btn btn-default btn-sm" >-</button>

                <?php $wed = $data[3]['Chick_cut']; echo '<textarea readonly id="wed_chc_val" type="input" value = "'.$wed.'size="5px">'.$wed.'</textarea>'; ?>

                <button id="wed_chc_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("wed_chc_minus").addEventListener("click", function(){
     s = document.getElementById("wed_chc_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Chick_cut&ldo=2");
     document.getElementById("wed_chc_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("wed_chc_plus").addEventListener("click", function(){
     s = document.getElementById("wed_chc_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Chick_cut&ldo=1");
     document.getElementById("wed_chc_val").value = parseInt(s) + 1;
    
});

 
</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/08.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>WHOLE SKIN CHICKEN</h5>
                <p style="color:red;">₹ 190 ~ 1 Kg</p>
                  <button id="wed_chwhsk_minus" class="btn btn-default btn-sm" >-</button>

                <?php $wed = $data[3]['Chick_whole_skin']; echo '<textarea readonly id="wed_chwhsk_val" type="input" value = "'.$wed.'" size="5px">'.$wed.'</textarea>'; ?>

                <button id="wed_chwhsk_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("wed_chwhsk_minus").addEventListener("click", function(){
     s = document.getElementById("wed_chwhsk_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Chick_whole_skin&ldo=2");
     document.getElementById("wed_chwhsk_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("wed_chwhsk_plus").addEventListener("click", function(){
     s = document.getElementById("wed_chwhsk_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Chick_whole_skin&ldo=1");
     document.getElementById("wed_chwhsk_val").value = parseInt(s) + 1;
    
});

</script>



<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/26.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CHICKEN 8 Pc CUT</h5>
                <p style="color:red;">₹ 190 ~ 1 Kg</p>
 <button id="wed_ch8pc_minus" class="btn btn-default btn-sm" >-</button>

                 <?php $wed = $data[3]['Chick_8pc_cut']; echo '<textarea readonly id="wed_ch8pc_val" type="input" value = "'.$wed.'size="5px">'.$wed.'</textarea>'; ?>

                <button id="wed_ch8pc_plus" class="btn btn-default btn-sm" >+</button>               
</div>

<script>

document.getElementById("wed_ch8pc_minus").addEventListener("click", function(){
     s = document.getElementById("wed_ch8pc_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Chick_8pc_cut&ldo=2");
     document.getElementById("wed_ch8pc_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("wed_ch8pc_plus").addEventListener("click", function(){
     s = document.getElementById("wed_ch8pc_val").value;
     if(parseInt(s) == 10) return;
      $("#lab").load("js_change.php?value="+s+"&day=3&item=Chick_8pc_cut&ldo=1");
     document.getElementById("wed_ch8pc_val").value = parseInt(s) + 1;
    
});

 
</script>





<div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/09.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>MUTTON CHOPS (BONE)</h5>
                <p style="color:red;">₹ 270 / 500 g</p>
                <button id="wed_muttchbn_minus" class="btn btn-default btn-sm" >-</button>

                <?php $wed = $data[3]['Mutt_chop_bone']; echo '<textarea readonly id="wed_muttchbn_val" type="input" value = "'.$wed.'size="5px">'.$wed.'</textarea>'; ?>

                <button id="wed_muttchbn_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("wed_muttchbn_minus").addEventListener("click", function(){
     s = document.getElementById("wed_muttchbn_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Mutt_chop_bone&ldo=2");
     document.getElementById("wed_muttchbn_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("wed_muttchbn_plus").addEventListener("click", function(){
     s = document.getElementById("wed_muttchbn_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Mutt_chop_bone&ldo=1");
     document.getElementById("wed_muttchbn_val").value = parseInt(s) + 1;
    
});

 
</script>


                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/10.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>MUTTON CHOPS (B/L)</h5>
                <p style="color:red;">₹ 335 / 500 g</p>
                 <button id="wed_muttch_minus" class="btn btn-default btn-sm" >-</button>

                <?php $wed = $data[3]['Mutt_chop_bl']; echo '<textarea readonly id="wed_muttch_val" type="input" value = "'.$wed.'size="5px">'.$wed.'</textarea>'; ?>

                <button id="wed_muttch_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("wed_muttch_minus").addEventListener("click", function(){
     s = document.getElementById("wed_muttch_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Mutt_chop_bl&ldo=2");
     document.getElementById("wed_muttch_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("wed_muttch_plus").addEventListener("click", function(){
     s = document.getElementById("wed_muttch_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Mutt_chop_bl&ldo=1");
     document.getElementById("wed_muttch_val").value = parseInt(s) + 1;
    
});

 
</script>




                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/11.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>MUTTON KEEMA</h5>
                <p style="color:red;">₹ 335 / 1 Kg</p>
               <button id="wed_muttkee_minus" class="btn btn-default btn-sm" >-</button>

                <?php $wed = $data[3]['Mutt_keema']; echo '<textarea readonly id="wed_muttkee_val" type="input" value = "'.$wed.'size="5px">'.$wed.'</textarea>'; ?>

                <button id="wed_muttkee_plus" class="btn btn-default btn-sm" >+</button>
</div>


<script>

document.getElementById("wed_muttkee_minus").addEventListener("click", function(){
     s = document.getElementById("wed_muttkee_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Mutt_keema&ldo=2");
     document.getElementById("wed_muttkee_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("wed_muttkee_plus").addEventListener("click", function(){
     s = document.getElementById("wed_muttkee_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Mutt_keema&ldo=1");
     document.getElementById("wed_muttkee_val").value = parseInt(s) + 1;
    
});

 
</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/12.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>ROHU </h5>
                <p style="color:red;">₹ 110 / 500 g</p>
                <button id="wed_rohu_minus" class="btn btn-default btn-sm" >-</button>

                <?php $wed = $data[3]['Rohu']; echo '<textarea readonly id="wed_rohu_val" type="input" value = "'.$wed.'size="5px">'.$wed.'</textarea>'; ?>

                <button id="wed_rohu_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("wed_rohu_minus").addEventListener("click", function(){
     s = document.getElementById("wed_rohu_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Rohu&ldo=2");
     document.getElementById("wed_rohu_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("wed_rohu_plus").addEventListener("click", function(){
     s = document.getElementById("wed_rohu_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Rohu&ldo=1");
     document.getElementById("wed_rohu_val").value = parseInt(s) + 1;
    
});

 
</script>



<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/13.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CATLA </h5>
                <p style="color:red;">₹ 110 / 500 g</p>
                <button id="wed_catla_minus" class="btn btn-default btn-sm" >-</button>

                <?php $wed = $data[3]['Catla']; echo '<textarea readonly id="wed_catla_val" type="input" value = "'.$wed.'size="5px">'.$wed.'</textarea>'; ?>

                <button id="wed_catla_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("wed_catla_minus").addEventListener("click", function(){
     s = document.getElementById("wed_catla_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Catla&ldo=2");
     document.getElementById("wed_catla_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("wed_catla_plus").addEventListener("click", function(){
     s = document.getElementById("wed_catla_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Catla&ldo=1");
     document.getElementById("wed_catla_val").value = parseInt(s) + 1;
    
});

 
</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/14.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>SALMON </h5>
                <p style="color:red;">₹ 580 / 500 g</p>
                <button id="wed_salmon_minus" class="btn btn-default btn-sm" >-</button>

                <?php $wed = $data[3]['Salmon']; echo '<textarea readonly id="wed_salmon_val" type="input" value = "'.$wed.'size="5px">'.$wed.'</textarea>'; ?>
                
                <button id="wed_salmon_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("wed_salmon_minus").addEventListener("click", function(){
     s = document.getElementById("wed_salmon_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Salmon&ldo=2");
     document.getElementById("wed_salmon_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("wed_salmon_plus").addEventListener("click", function(){
     s = document.getElementById("wed_salmon_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Salmon&ldo=1");
     document.getElementById("wed_salmon_val").value = parseInt(s) + 1;
    
});

 
</script>



<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/15.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>PRAWNS </h5>
                <p style="color:red;">₹ 610 / 500 g</p>
                <button id="wed_prawn_minus" class="btn btn-default btn-sm" >-</button>

                <?php $wed = $data[3]['Prawns']; echo '<textarea readonly id="wed_prawn_val" type="input" value = "'.$wed.'size="5px">'.$wed.'</textarea>'; ?>

                <button id="wed_prawn_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("wed_prawn_minus").addEventListener("click", function(){
     s = document.getElementById("wed_prawn_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Prawns&ldo=2");
     document.getElementById("wed_prawn_val").value = parseInt(s) - 1;
         
});

document.getElementById("wed_prawn_plus").addEventListener("click", function(){
     s = document.getElementById("wed_prawn_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Prawns&ldo=1");
     document.getElementById("wed_prawn_val").value = parseInt(s) + 1;
    
});

 
</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/16.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>WHITE POMPHRET FISH</h5>
                <p style="color:red;">₹ 785 / 500 g</p>
                <button id="wed_pomphret_minus" class="btn btn-default btn-sm" >-</button>

                <?php $wed = $data[3]['Pomphret']; echo '<textarea readonly id="wed_pomphret_val" type="input" value = "'.$wed.'size="5px">'.$wed.'</textarea>'; ?>
                
                <button id="wed_pomphret_plus" class="btn btn-default btn-sm" >+</button>
</div>


<script>

document.getElementById("wed_pomphret_minus").addEventListener("click", function(){
     s = document.getElementById("wed_pomphret_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Pomphret&ldo=2");
     document.getElementById("wed_pomphret_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("wed_pomphret_plus").addEventListener("click", function(){
     s = document.getElementById("wed_pomphret_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Pomphret&ldo=1");
     document.getElementById("wed_pomphret_val").value = parseInt(s) + 1;
    
});

</script>


<div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/31.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>PANEER</h5>
                <p style="color:red;">₹ 140 / 500 g</p>
                   <button id="wed_paneer_minus" class="btn btn-default btn-sm" >-</button>

                <?php $wed = $data[3]['Paneer']; echo '<textarea readonly id="wed_paneer_val" type="input" value = "'.$wed.'size="5px">'.$wed.'</textarea>'; ?>

                <button id="wed_paneer_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("wed_paneer_minus").addEventListener("click", function(){
     s = document.getElementById("wed_paneer_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Paneer&ldo=2");
     document.getElementById("wed_paneer_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("wed_paneer_plus").addEventListener("click", function(){
     s = document.getElementById("wed_paneer_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Paneer&ldo=1");
     document.getElementById("wed_paneer_val").value = parseInt(s) + 1;
    
});

 
</script>




                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/32.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>FRESH CHEESE</h5>
                <p style="color:red;">₹ 57 / 200 g</p>
                 <button id="wed_cheese_minus" class="btn btn-default btn-sm" >-</button>

                <?php $wed = $data[3]['Cheese']; echo '<textarea readonly id="wed_cheese_val" type="input" value = "'.$wed.'size="5px">'.$wed.'</textarea>'; ?>

                <button id="wed_cheese_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("wed_cheese_minus").addEventListener("click", function(){
     s = document.getElementById("wed_cheese_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Cheese&ldo=2");
     document.getElementById("wed_cheese_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("wed_cheese_plus").addEventListener("click", function(){
     s = document.getElementById("wed_cheese_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Cheese&ldo=1");
     document.getElementById("wed_cheese_val").value = parseInt(s) + 1;
    
});

 
</script>


                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/33.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>SINGLE TONED MILK</h5>
                <p style="color:red;">₹ 45 / 1 L</p>
                 <button id="wed_smilk_minus" class="btn btn-default btn-sm" >-</button>

                 <?php $wed = $data[3]['Stmilk']; echo '<textarea readonly id="wed_smilk_val" type="input" value = "'.$wed.'size="5px">'.$wed.'</textarea>'; ?>

                <button id="wed_smilk_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("wed_smilk_minus").addEventListener("click", function(){
     s = document.getElementById("wed_smilk_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Stmilk&ldo=2");
     document.getElementById("wed_smilk_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("wed_smilk_plus").addEventListener("click", function(){
     s = document.getElementById("wed_smilk_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Stmilk&ldo=1");
     document.getElementById("wed_smilk_val").value = parseInt(s) + 1;
    
});

 
</script>



<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/34.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>DOUBLE TONED MILK</h5>
                <p style="color:red;">₹ 45 / 1 L</p>
                  <button id="wed_dmilk_minus" class="btn btn-default btn-sm" >-</button>

                 <?php $wed = $data[3]['Dtmilk']; echo '<textarea readonly id="wed_dmilk_val" type="input" value = "'.$wed.'size="5px">'.$wed.'</textarea>'; ?>

                <button id="wed_dmilk_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("wed_dmilk_minus").addEventListener("click", function(){
     s = document.getElementById("wed_dmilk_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Dtmilk&ldo=2");
     document.getElementById("wed_dmilk_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("wed_dmilk_plus").addEventListener("click", function(){
     s = document.getElementById("wed_dmilk_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Dtmilk&ldo=1");
     document.getElementById("wed_dmilk_val").value = parseInt(s) + 1;
    
});

 
</script>



<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/36.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>SOUR CURD</h5>
                <p style="color:red;">₹ 50 / 500 g</p>
              <button id="wed_socurd_minus" class="btn btn-default btn-sm" >-</button>

                 <?php $wed = $data[3]['Sour_Curd']; echo '<textarea readonly id="wed_socurd_val" type="input" value = "'.$wed.'size="5px">'.$wed.'</textarea>'; ?>

                <button id="wed_socurd_plus" class="btn btn-default btn-sm" >+</button>
</div>
<script>
document.getElementById("wed_socurd_minus").addEventListener("click", function(){
     s = document.getElementById("wed_socurd_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Sour_Curd&ldo=2");
     document.getElementById("wed_socurd_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("wed_socurd_plus").addEventListener("click", function(){
     s = document.getElementById("wed_socurd_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Sour_Curd&ldo=1");
     document.getElementById("wed_socurd_val").value = parseInt(s) + 1;
    
});

</script>



<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/37.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>SWEET CURD</h5>
                <p style="color:red;">₹ 80 / 500 g</p>
                <button id="wed_swcurd_minus" class="btn btn-default btn-sm" >-</button>

                 <?php $wed = $data[3]['Sweet_Curd']; echo '<textarea readonly id="wed_swcurd_val" type="input" value = "'.$wed.'size="5px">'.$wed.'</textarea>'; ?>

                <button id="wed_swcurd_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>
document.getElementById("wed_swcurd_minus").addEventListener("click", function(){
     s = document.getElementById("wed_swcurd_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Sweet_Curd&ldo=2");
     document.getElementById("wed_swcurd_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("wed_swcurd_plus").addEventListener("click", function(){
     s = document.getElementById("wed_swcurd_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Sweet_Curd&ldo=1");
     document.getElementById("wed_swcurd_val").value = parseInt(s) + 1;
    
});

</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/38.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>PORK RIBS</h5>
                <p style="color:red;">₹ 350 / 500 g</p>
                <button id="wed_poribs_minus" class="btn btn-default btn-sm" >-</button>

                 <?php $wed = $data[3]['Pork_ribs']; echo '<textarea readonly id="wed_poribs_val" type="input" value = "'.$wed.'size="5px">'.$wed.'</textarea>'; ?>

                <button id="wed_poribs_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>
document.getElementById("wed_poribs_minus").addEventListener("click", function(){
     s = document.getElementById("wed_poribs_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Pork_ribs&ldo=2");
     document.getElementById("wed_poribs_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("wed_poribs_plus").addEventListener("click", function(){
     s = document.getElementById("wed_poribs_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Pork_ribs&ldo=1");
     document.getElementById("wed_poribs_val").value = parseInt(s) + 1;
    
});

</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/39.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>PORK CHOPS (BONELESS)</h5>
                <p style="color:red;">₹ 320 / 500 g</p>
                 <button id="wed_pochops_minus" class="btn btn-default btn-sm" >-</button>

                <?php $wed = $data[3]['Pork_chops_bl']; echo '<textarea readonly id="wed_pochops_val" type="input" value = "'.$wed.'size="5px">'.$wed.'</textarea>'; ?>

                <button id="wed_pochops_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>
document.getElementById("wed_pochops_minus").addEventListener("click", function(){
     s = document.getElementById("wed_pochops_val").value;
     if(parseInt(s) == 0) return;
      $("#lab").load("js_change.php?value="+s+"&day=3&item=Pork_chops_bl&ldo=2");
     document.getElementById("wed_pochops_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("wed_pochops_plus").addEventListener("click", function(){
     s = document.getElementById("wed_pochops_val").value;
     if(parseInt(s) == 10) return;
      $("#lab").load("js_change.php?value="+s+"&day=3&item=Pork_chops_bl&ldo=1");
     document.getElementById("wed_pochops_val").value = parseInt(s) + 1;
    
});

</script>

                <img src="img/portfolio/40.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>PORK CHOPS (BONE)</h5>
                <p style="color:red;">₹ 290 / 500 g</p>
                 <button id="wed_pochopsb_minus" class="btn btn-default btn-sm" >-</button>

                <?php $wed = $data[3]['Pork_chops_bn']; echo '<textarea readonly id="wed_pochopsb_val" type="input" value = "'.$wed.'size="5px">'.$wed.'</textarea>'; ?>

                <button id="wed_pochopsb_plus" class="btn btn-default btn-sm" >+</button>

<script>
document.getElementById("wed_pochopsb_minus").addEventListener("click", function(){
     s = document.getElementById("wed_pochopsb_val").value;
     if(parseInt(s) == 0) return;
      $("#lab").load("js_change.php?value="+s+"&day=3&item=Pork_chops_bn&ldo=2");
     document.getElementById("wed_pochopsb_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("wed_pochopsb_plus").addEventListener("click", function(){
     s = document.getElementById("wed_pochopsb_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=3&item=Pork_chops_bn&ldo=1");
     document.getElementById("wed_pochopsb_val").value = parseInt(s) + 1;
    
});

</script>
</section>

















  <section id="content4">
    <br>
  <hr>
    
            <div class="col-md-3 product-model-sec">
            <img src="img/portfolio/41.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>BASMATI RICE</h5>
                <p style="color:red;">₹ 77 / 500 g</p>
                <button id="thu_basmati_minus" class="btn btn-default btn-sm" >-</button>

                <?php $thu = $data[4]['Basmati']; echo '<textarea readonly id="thu_basmati_val" type="input" value = "'.$thu.'size="5px">'.$thu.'</textarea>'; ?>

                <button id="thu_basmati_plus" class="btn btn-default btn-sm" >+</button>
            </div>
<div id="lab"></div>
            <script>

document.getElementById("thu_basmati_minus").addEventListener("click", function(){
     s = document.getElementById("thu_basmati_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Basmati&ldo=2");
     document.getElementById("thu_basmati_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("thu_basmati_plus").addEventListener("click", function(){
     s = document.getElementById("thu_basmati_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Basmati&ldo=1");
     document.getElementById("thu_basmati_val").value = parseInt(s) + 1;
});

 
</script>


<div class="col-md-3 product-model-sec">
                <img src="img/portfolio/42.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>BASKATI RICE</h5>
                <p style="color:red;">₹ 28 / 500 g</p>
                 <button id="thu_baskati_minus" class="btn btn-default btn-sm" >-</button>

                 <?php $thu = $data[4]['Baskati']; echo '<textarea readonly id="thu_baskati_val" type="input" value = "'.$thu.'size="5px">'.$thu.'</textarea>'; ?>
                 
                <button id="thu_baskati_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("thu_baskati_minus").addEventListener("click", function(){
     s = document.getElementById("thu_baskati_val").value;
     if(parseInt(s) == 0) return;
      $("#lab").load("js_change.php?value="+s+"&day=4&item=Baskati&ldo=2");
     document.getElementById("thu_baskati_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("thu_baskati_plus").addEventListener("click", function(){
     s = document.getElementById("thu_baskati_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Baskati&ldo=1");
     document.getElementById("thu_baskati_val").value = parseInt(s) + 1;
    
});

 
</script>


<div class="col-md-3 product-model-sec">
                <img src="img/portfolio/43.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>MOONG DAL</h5>
                <p style="color:red;">₹ 56 / 500 g</p>
                <button id="thu_moong_minus" class="btn btn-default btn-sm" >-</button>

                <?php $thu = $data[4]['Moong']; echo '<textarea readonly id="thu_moong_val" type="input" value = "'.$thu.'size="5px">'.$thu.'</textarea>'; ?>
                
                <button id="thu_moong_plus" class="btn btn-default btn-sm" >+</button>
</div>


<script>

document.getElementById("thu_moong_minus").addEventListener("click", function(){
     s = document.getElementById("thu_moong_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Moong&ldo=2");
     document.getElementById("thu_moong_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("thu_moong_plus").addEventListener("click", function(){
     s = document.getElementById("thu_moong_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Moong&ldo=1");
     document.getElementById("thu_moong_val").value = parseInt(s) + 1;
    
});

 
</script>





                <div class="col-md-3 product-model-sec">
                <img src="img/portfolio/44.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>MASOOR DAL</h5>
                <p style="color:red;">₹ 55 / 500 g</p>
                <button id="thu_masoor_minus" class="btn btn-default btn-sm" >-</button>

                <?php $thu = $data[4]['Masoor']; echo '<textarea readonly id="thu_masoor_val" type="input" value = "'.$thu.'size="5px">'.$thu.'</textarea>'; ?>

                <button id="thu_masoor_plus" class="btn btn-default btn-sm" >+</button>
</div>



<script>

document.getElementById("thu_masoor_minus").addEventListener("click", function(){
     s = document.getElementById("thu_masoor_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Masoor&ldo=2");
     document.getElementById("thu_masoor_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("thu_masoor_plus").addEventListener("click", function(){
     s = document.getElementById("thu_masoor_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Masoor&ldo=1");
     document.getElementById("thu_masoor_val").value = parseInt(s) + 1;
    
});

 
</script>


</br>


                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/45.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CHANA DAL</h5>
                <p style="color:red;">₹ 45 / 500 g</p>
                 <button id="thu_chana_minus" class="btn btn-default btn-sm" >-</button>
                <?php $thu = $data[4]['Chana']; echo '<textarea readonly id="thu_chana_val" type="input" value = "'.$thu.'size="5px">'.$thu.'</textarea>'; ?>

                <button id="thu_chana_plus" class="btn btn-default btn-sm" >+</button>
</div>


<script>

document.getElementById("thu_chana_minus").addEventListener("click", function(){
     s = document.getElementById("thu_chana_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Chana&ldo=2");
     document.getElementById("thu_chana_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("thu_chana_plus").addEventListener("click", function(){
     s = document.getElementById("thu_chana_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Chana&ldo=1");
     document.getElementById("thu_chana_val").value = parseInt(s) + 1;
    
});

 
</script>


                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/46.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>ARHAR DAL</h5>
                <p style="color:red;">₹ 87 / 500 g</p>
                 <button id="thu_arhar_minus" class="btn btn-default btn-sm" >-</button>

                <?php $thu = $data[4]['Arhar']; echo '<textarea readonly id="thu_arhar_val" type="input" value = "'.$thu.'size="5px">'.$thu.'</textarea>'; ?>

                <button id="thu_arhar_plus" class="btn btn-default btn-sm" >+</button>
</div>


<script>

document.getElementById("thu_arhar_minus").addEventListener("click", function(){
     s = document.getElementById("thu_arhar_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Arhar&ldo=2");
     document.getElementById("thu_arhar_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("thu_arhar_plus").addEventListener("click", function(){
     s = document.getElementById("thu_arhar_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Arhar&ldo=1");
     document.getElementById("thu_arhar_val").value = parseInt(s) + 1;
    
});

 
</script>



                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/47.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>POTATO</h5>
                <p style="color:red;">₹ 25 / 1 Kg</p>
                 <button id="thu_potato_minus" class="btn btn-default btn-sm" >-</button>
                    <?php $thu = $data[4]['Potato']; echo '<textarea readonly id="thu_potato_val" type="input" value = "'.$thu.'size="5px">'.$thu.'</textarea>'; ?>

                <button id="thu_potato_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("thu_potato_minus").addEventListener("click", function(){
     s = document.getElementById("thu_potato_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Potato&ldo=2");
     document.getElementById("thu_poatato_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("thu_potato_plus").addEventListener("click", function(){
     s = document.getElementById("thu_potato_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Potato&ldo=1");
     document.getElementById("thu_potato_val").value = parseInt(s) + 1;
    
});

 
</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/48.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>ONION</h5>
                <p style="color:red;">₹ 135 / 500 g</p>
                <button id="thu_onion_minus" class="btn btn-default btn-sm" >-</button>

                <?php $thu = $data[4]['Onion']; echo '<textarea readonly id="thu_onion_val" type="input" value = "'.$thu.'size="5px">'.$thu.'</textarea>'; ?>

                <button id="thu_onion_plus" class="btn btn-default btn-sm" >+</button>
</div>


<script>

document.getElementById("thu_onion_minus").addEventListener("click", function(){
     s = document.getElementById("thu_onion_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Onion&ldo=2");
     document.getElementById("thu_onion_val").value = parseInt(s) - 1;
     
    
});
document.getElementById("thu_onion_plus").addEventListener("click", function(){
     s = document.getElementById("thu_onion_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Onion&ldo=1");
     document.getElementById("thu_onion_val").value = parseInt(s) + 1;
    
});

 
</script>


<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/49.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>TOMATO</h5>
                <p style="color:red;">₹ 135 / 500 g</p>
               <button id="thu_tomato_minus" class="btn btn-default btn-sm" >-</button>

                <?php $thu = $data[4]['Tomato']; echo '<textarea readonly id="thu_tomato_val" type="input" value = "'.$thu.'size="5px">'.$thu.'</textarea>'; ?>

                <button id="thu_tomato_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("thu_tomato_minus").addEventListener("click", function(){
     s = document.getElementById("thu_tomato_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Tomato&ldo=2");
     document.getElementById("thu_tomato_val").value = parseInt(s) - 1;
         
});

document.getElementById("thu_tomato_plus").addEventListener("click", function(){
     s = document.getElementById("thu_tomato_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Tomato&ldo=1");
     document.getElementById("thu_tomato_val").value = parseInt(s) + 1;
     
});

 
</script>



<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/50.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>GINGER</h5>
                <p style="color:red;">₹ 135 / 500 g</p>
                 <button id="thu_ginger_minus" class="btn btn-default btn-sm" >-</button>

                <?php $thu = $data[4]['Ginger']; echo '<textarea readonly id="thu_ginger_val" type="input" value = "'.$thu.'size="5px">'.$thu.'</textarea>'; ?>
                
                <button id="thu_ginger_plus" class="btn btn-default btn-sm" >+</button>
            
</div>



<script>

document.getElementById("thu_ginger_minus").addEventListener("click", function(){
     s = document.getElementById("thu_ginger_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Ginger&ldo=2");
     document.getElementById("thu_ginger_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("thu_ginger_plus").addEventListener("click", function(){
     s = document.getElementById("thu_ginger_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Ginger&ldo=1");
     document.getElementById("thu_ginger_val").value = parseInt(s) + 1;
    
});

 
</script>


<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/51.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>GARLIC</h5>
                <p style="color:red;">₹ 135 / 500 g</p>
                <button id="thu_garlic_minus" class="btn btn-default btn-sm" >-</button>

                <?php $thu = $data[4]['Garlic']; echo '<textarea readonly id="thu_garlic_val" type="input" value = "'.$thu.'size="5px">'.$thu.'</textarea>'; ?>
               

                <button id="thu_garlic_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("thu_garlic_minus").addEventListener("click", function(){
     s = document.getElementById("thu_garlic_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Garlic&ldo=2");
     document.getElementById("thu_garlic_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("thu_garlic_plus").addEventListener("click", function(){
     s = document.getElementById("thu_garlic_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Garlic&ldo=1");
     document.getElementById("thu_garlic_val").value = parseInt(s) + 1;
    
});

 
</script>



<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/52.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CHILLI</h5>
                <p style="color:red;">₹ 135 / 500 g</p>
                    <button id="thu_chilli_minus" class="btn btn-default btn-sm" >-</button>

                <?php $thu = $data[4]['Chilli']; echo '<textarea readonly id="thu_chilli_val" type="input" value = "'.$thu.'size="5px">'.$thu.'</textarea>'; ?>

                <button id="thu_chilli_plus" class="btn btn-default btn-sm" >+</button>
</div>


<script>

document.getElementById("thu_chilli_minus").addEventListener("click", function(){
     s = document.getElementById("thu_chilli_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Chilli&ldo=2");
     document.getElementById("thu_chilli_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("thu_chilli_plus").addEventListener("click", function(){
     s = document.getElementById("thu_chilli_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Chilli&ldo=1");
     document.getElementById("thu_chilli_val").value = parseInt(s) + 1;
    
});

 
</script>


<div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/01.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CHICKEN DRUMSTICKS</h5>
                <p style="color:red;">₹ 135 / 500 g</p>
                  <button id="thu_drum_minus" class="btn btn-default btn-sm" >-</button>

                <?php $thu = $data[4]['Chick_drums']; echo '<textarea readonly id="thu_drum_val" type="input" value = "'.$thu.'size="5px">'.$thu.'</textarea>'; ?>

                <button id="thu_drum_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("thu_drum_minus").addEventListener("click", function(){
     s = document.getElementById("thu_drum_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Chick_drums&ldo=2");
     document.getElementById("thu_drum_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("thu_drum_plus").addEventListener("click", function(){
     s = document.getElementById("thu_drum_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Chick_drums&ldo=1");
     document.getElementById("thu_drum_val").value = parseInt(s) + 1;
    
});

 
</script>

                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/02.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CHICKEN BONELESS</h5>
                <p style="color:red;">₹ 160 / 500 g</p>
                  <button id="thu_chbonls_minus" class="btn btn-default btn-sm" >-</button>
            <?php $thu = $data[4]['Chick_boneless']; echo '<textarea readonly id="thu_chbonls_val" type="input" value = "'.$thu.'size="5px">'.$thu.'</textarea>'; ?>

                <button id="thu_chbonls_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("thu_chbonls_minus").addEventListener("click", function(){
     s = document.getElementById("thu_chbonls_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Chick_boneless&ldo=2");
     document.getElementById("thu_chbonls_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("thu_chbonls_plus").addEventListener("click", function(){
     s = document.getElementById("thu_chbonls_val").value;
     if(parseInt(s) == 10) return;
      $("#lab").load("js_change.php?value="+s+"&day=4&item=Chick_boneless&ldo=1");
     document.getElementById("thu_chbonls_val").value = parseInt(s) + 1;
    
});

 
</script>



                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/03.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CHICKEN KEEMA</h5>
                <p style="color:red;">₹165 / 500 g</p>
                <button id="thu_chkee_minus" class="btn btn-default btn-sm" >-</button>

                <?php $thu = $data[4]['Chick_keema']; echo '<textarea readonly id="thu_chkee_val" type="input" value = "'.$thu.'size="5px">'.$thu.'</textarea>'; ?>

                <button id="thu_chkee_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("thu_chkee_minus").addEventListener("click", function(){
     s = document.getElementById("thu_chkee_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Chick_keema&ldo=2");
     document.getElementById("thu_chkee_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("thu_chkee_plus").addEventListener("click", function(){
     s = document.getElementById("thu_chkee_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Chick_keema&ldo=1");
     document.getElementById("thu_chkee_val").value = parseInt(s) + 1;
    
});

 
</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/04.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>WHOLE SKINLESS CHICKEN</h5>
                <p style="color:red;">₹ 190 ~ 1 Kg</p>
                 <button id="thu_chwh_minus" class="btn btn-default btn-sm" >-</button>

                <?php $thu = $data[4]['Chick_whole_skinless']; echo '<textarea readonly id="thu_chwh_val" type="input" value = "'.$thu.'size="5px">'.$thu.'</textarea>'; ?>

                <button id="thu_chwh_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("thu_chwh_minus").addEventListener("click", function(){
     s = document.getElementById("thu_chwh_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Chick_whole_skinless&ldo=2");
     document.getElementById("thu_chwh_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("thu_chwh_plus").addEventListener("click", function(){
     s = document.getElementById("thu_chwh_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Chick_whole_skinless&ldo=1");
     document.getElementById("thu_chwh_val").value = parseInt(s) + 1;
    
});

 
</script>






<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/06.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CHICKEN BREAST</h5>
                <p style="color:red;">₹ 160 / 500 g</p>
                 <button id="thu_chbr_minus" class="btn btn-default btn-sm" >-</button>

               <?php $thu = $data[4]['Chick_breast']; echo '<textarea readonly id="thu_chbr_val" type="input" value = "'.$thu.'size="5px">'.$thu.'</textarea>'; ?>

                <button id="thu_chbr_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("thu_chbr_minus").addEventListener("click", function(){
     s = document.getElementById("thu_chbr_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Chick_breast&ldo=2");
     document.getElementById("thu_chbr_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("thu_chbr_plus").addEventListener("click", function(){
     s = document.getElementById("thu_chbr_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Chick_breast&ldo=1");
     document.getElementById("thu_chbr_val").value = parseInt(s) + 1;
    
});

 
</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/07.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CHICKEN CUT</h5>
                <p style="color:red;">₹ 105 / 500 g</p>
                  <button id="thu_chc_minus" class="btn btn-default btn-sm" >-</button>

                <?php $thu = $data[4]['Chick_cut']; echo '<textarea readonly id="thu_chc_val" type="input" value = "'.$thu.'size="5px">'.$thu.'</textarea>'; ?>

                <button id="thu_chc_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("thu_chc_minus").addEventListener("click", function(){
     s = document.getElementById("thu_chc_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Chick_cut&ldo=2");
     document.getElementById("thu_chc_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("thu_chc_plus").addEventListener("click", function(){
     s = document.getElementById("thu_chc_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Chick_cut&ldo=1");
     document.getElementById("thu_chc_val").value = parseInt(s) + 1;
    
});

 
</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/08.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>WHOLE SKIN CHICKEN</h5>
                <p style="color:red;">₹ 190 ~ 1 Kg</p>
                  <button id="thu_chwhsk_minus" class="btn btn-default btn-sm" >-</button>

                <?php $thu = $data[4]['Chick_whole_skin']; echo '<textarea readonly id="thu_chwhsk_val" type="input" value = "'.$thu.'" size="5px">'.$thu.'</textarea>'; ?>

                <button id="thu_chwhsk_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("thu_chwhsk_minus").addEventListener("click", function(){
     s = document.getElementById("thu_chwhsk_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Chick_whole_skin&ldo=2");
     document.getElementById("thu_chwhsk_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("thu_chwhsk_plus").addEventListener("click", function(){
     s = document.getElementById("thu_chwhsk_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Chick_whole_skin&ldo=1");
     document.getElementById("thu_chwhsk_val").value = parseInt(s) + 1;
    
});

</script>



<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/26.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CHICKEN 8 Pc CUT</h5>
                <p style="color:red;">₹ 190 ~ 1 Kg</p>
 <button id="thu_ch8pc_minus" class="btn btn-default btn-sm" >-</button>

                 <?php $thu = $data[4]['Chick_8pc_cut']; echo '<textarea readonly id="thu_ch8pc_val" type="input" value = "'.$thu.'size="5px">'.$thu.'</textarea>'; ?>

                <button id="thu_ch8pc_plus" class="btn btn-default btn-sm" >+</button>               
</div>

<script>

document.getElementById("thu_ch8pc_minus").addEventListener("click", function(){
     s = document.getElementById("thu_ch8pc_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Chick_8pc_cut&ldo=2");
     document.getElementById("thu_ch8pc_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("thu_ch8pc_plus").addEventListener("click", function(){
     s = document.getElementById("thu_ch8pc_val").value;
     if(parseInt(s) == 10) return;
      $("#lab").load("js_change.php?value="+s+"&day=4&item=Chick_8pc_cut&ldo=1");
     document.getElementById("thu_ch8pc_val").value = parseInt(s) + 1;
    
});

 
</script>





<div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/09.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>MUTTON CHOPS (BONE)</h5>
                <p style="color:red;">₹ 270 / 500 g</p>
                <button id="thu_muttchbn_minus" class="btn btn-default btn-sm" >-</button>

                <?php $thu = $data[4]['Mutt_chop_bone']; echo '<textarea readonly id="thu_muttchbn_val" type="input" value = "'.$thu.'size="5px">'.$thu.'</textarea>'; ?>

                <button id="thu_muttchbn_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("thu_muttchbn_minus").addEventListener("click", function(){
     s = document.getElementById("thu_muttchbn_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Mutt_chop_bone&ldo=2");
     document.getElementById("thu_muttchbn_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("thu_muttchbn_plus").addEventListener("click", function(){
     s = document.getElementById("thu_muttchbn_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Mutt_chop_bone&ldo=1");
     document.getElementById("thu_muttchbn_val").value = parseInt(s) + 1;
    
});

 
</script>


                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/10.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>MUTTON CHOPS (B/L)</h5>
                <p style="color:red;">₹ 335 / 500 g</p>
                 <button id="thu_muttch_minus" class="btn btn-default btn-sm" >-</button>

                <?php $thu = $data[4]['Mutt_chop_bl']; echo '<textarea readonly id="thu_muttch_val" type="input" value = "'.$thu.'size="5px">'.$thu.'</textarea>'; ?>

                <button id="thu_muttch_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("thu_muttch_minus").addEventListener("click", function(){
     s = document.getElementById("thu_muttch_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Mutt_chop_bl&ldo=2");
     document.getElementById("thu_muttch_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("thu_muttch_plus").addEventListener("click", function(){
     s = document.getElementById("thu_muttch_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Mutt_chop_bl&ldo=1");
     document.getElementById("thu_muttch_val").value = parseInt(s) + 1;
    
});

 
</script>




                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/11.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>MUTTON KEEMA</h5>
                <p style="color:red;">₹ 335 / 1 Kg</p>
               <button id="thu_muttkee_minus" class="btn btn-default btn-sm" >-</button>

                <?php $thu = $data[4]['Mutt_keema']; echo '<textarea readonly id="thu_muttkee_val" type="input" value = "'.$thu.'size="5px">'.$thu.'</textarea>'; ?>

                <button id="thu_muttkee_plus" class="btn btn-default btn-sm" >+</button>
</div>


<script>

document.getElementById("thu_muttkee_minus").addEventListener("click", function(){
     s = document.getElementById("thu_muttkee_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Mutt_keema&ldo=2");
     document.getElementById("thu_muttkee_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("thu_muttkee_plus").addEventListener("click", function(){
     s = document.getElementById("thu_muttkee_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Mutt_keema&ldo=1");
     document.getElementById("thu_muttkee_val").value = parseInt(s) + 1;
    
});

 
</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/12.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>ROHU </h5>
                <p style="color:red;">₹ 110 / 500 g</p>
                <button id="thu_rohu_minus" class="btn btn-default btn-sm" >-</button>

                <?php $thu = $data[4]['Rohu']; echo '<textarea readonly id="thu_rohu_val" type="input" value = "'.$thu.'size="5px">'.$thu.'</textarea>'; ?>

                <button id="thu_rohu_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("thu_rohu_minus").addEventListener("click", function(){
     s = document.getElementById("thu_rohu_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Rohu&ldo=2");
     document.getElementById("thu_rohu_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("thu_rohu_plus").addEventListener("click", function(){
     s = document.getElementById("thu_rohu_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Rohu&ldo=1");
     document.getElementById("thu_rohu_val").value = parseInt(s) + 1;
    
});

 
</script>



<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/13.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CATLA </h5>
                <p style="color:red;">₹ 110 / 500 g</p>
                <button id="thu_catla_minus" class="btn btn-default btn-sm" >-</button>

                <?php $thu = $data[4]['Catla']; echo '<textarea readonly id="thu_catla_val" type="input" value = "'.$thu.'size="5px">'.$thu.'</textarea>'; ?>

                <button id="thu_catla_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("thu_catla_minus").addEventListener("click", function(){
     s = document.getElementById("thu_catla_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Catla&ldo=2");
     document.getElementById("thu_catla_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("thu_catla_plus").addEventListener("click", function(){
     s = document.getElementById("thu_catla_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Catla&ldo=1");
     document.getElementById("thu_catla_val").value = parseInt(s) + 1;
    
});

 
</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/14.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>SALMON </h5>
                <p style="color:red;">₹ 580 / 500 g</p>
                <button id="thu_salmon_minus" class="btn btn-default btn-sm" >-</button>

                <?php $thu = $data[4]['Salmon']; echo '<textarea readonly id="thu_salmon_val" type="input" value = "'.$thu.'size="5px">'.$thu.'</textarea>'; ?>
                
                <button id="thu_salmon_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("thu_salmon_minus").addEventListener("click", function(){
     s = document.getElementById("thu_salmon_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Salmon&ldo=2");
     document.getElementById("thu_salmon_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("thu_salmon_plus").addEventListener("click", function(){
     s = document.getElementById("thu_salmon_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Salmon&ldo=1");
     document.getElementById("thu_salmon_val").value = parseInt(s) + 1;
    
});

 
</script>



<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/15.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>PRAWNS </h5>
                <p style="color:red;">₹ 610 / 500 g</p>
                <button id="thu_prawn_minus" class="btn btn-default btn-sm" >-</button>

                <?php $thu = $data[4]['Prawns']; echo '<textarea readonly id="thu_prawn_val" type="input" value = "'.$thu.'size="5px">'.$thu.'</textarea>'; ?>

                <button id="thu_prawn_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("thu_prawn_minus").addEventListener("click", function(){
     s = document.getElementById("thu_prawn_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Prawns&ldo=2");
     document.getElementById("thu_prawn_val").value = parseInt(s) - 1;
         
});

document.getElementById("thu_prawn_plus").addEventListener("click", function(){
     s = document.getElementById("thu_prawn_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Prawns&ldo=1");
     document.getElementById("thu_prawn_val").value = parseInt(s) + 1;
    
});

 
</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/16.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>WHITE POMPHRET FISH</h5>
                <p style="color:red;">₹ 785 / 500 g</p>
                <button id="thu_pomphret_minus" class="btn btn-default btn-sm" >-</button>

                <?php $thu = $data[4]['Pomphret']; echo '<textarea readonly id="thu_pomphret_val" type="input" value = "'.$thu.'size="5px">'.$thu.'</textarea>'; ?>
                
                <button id="thu_pomphret_plus" class="btn btn-default btn-sm" >+</button>
</div>


<script>

document.getElementById("thu_pomphret_minus").addEventListener("click", function(){
     s = document.getElementById("thu_pomphret_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Pomphret&ldo=2");
     document.getElementById("thu_pomphret_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("thu_pomphret_plus").addEventListener("click", function(){
     s = document.getElementById("thu_pomphret_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Pomphret&ldo=1");
     document.getElementById("thu_pomphret_val").value = parseInt(s) + 1;
    
});

</script>


<div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/31.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>PANEER</h5>
                <p style="color:red;">₹ 140 / 500 g</p>
                   <button id="thu_paneer_minus" class="btn btn-default btn-sm" >-</button>

                <?php $thu = $data[4]['Paneer']; echo '<textarea readonly id="thu_paneer_val" type="input" value = "'.$thu.'size="5px">'.$thu.'</textarea>'; ?>

                <button id="thu_paneer_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("thu_paneer_minus").addEventListener("click", function(){
     s = document.getElementById("thu_paneer_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Paneer&ldo=2");
     document.getElementById("thu_paneer_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("thu_paneer_plus").addEventListener("click", function(){
     s = document.getElementById("thu_paneer_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Paneer&ldo=1");
     document.getElementById("thu_paneer_val").value = parseInt(s) + 1;
    
});

 
</script>




                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/32.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>FRESH CHEESE</h5>
                <p style="color:red;">₹ 57 / 200 g</p>
                 <button id="thu_cheese_minus" class="btn btn-default btn-sm" >-</button>

                <?php $thu = $data[4]['Cheese']; echo '<textarea readonly id="thu_cheese_val" type="input" value = "'.$thu.'size="5px">'.$thu.'</textarea>'; ?>

                <button id="thu_cheese_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("thu_cheese_minus").addEventListener("click", function(){
     s = document.getElementById("thu_cheese_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Cheese&ldo=2");
     document.getElementById("thu_cheese_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("thu_cheese_plus").addEventListener("click", function(){
     s = document.getElementById("thu_cheese_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Cheese&ldo=1");
     document.getElementById("thu_cheese_val").value = parseInt(s) + 1;
    
});

 
</script>


                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/33.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>SINGLE TONED MILK</h5>
                <p style="color:red;">₹ 45 / 1 L</p>
                 <button id="thu_smilk_minus" class="btn btn-default btn-sm" >-</button>

                 <?php $thu = $data[4]['Stmilk']; echo '<textarea readonly id="thu_smilk_val" type="input" value = "'.$thu.'size="5px">'.$thu.'</textarea>'; ?>

                <button id="thu_smilk_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("thu_smilk_minus").addEventListener("click", function(){
     s = document.getElementById("thu_smilk_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Stmilk&ldo=2");
     document.getElementById("thu_smilk_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("thu_smilk_plus").addEventListener("click", function(){
     s = document.getElementById("thu_smilk_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Stmilk&ldo=1");
     document.getElementById("thu_smilk_val").value = parseInt(s) + 1;
    
});

 
</script>



<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/34.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>DOUBLE TONED MILK</h5>
                <p style="color:red;">₹ 45 / 1 L</p>
                  <button id="thu_dmilk_minus" class="btn btn-default btn-sm" >-</button>

                 <?php $thu = $data[4]['Dtmilk']; echo '<textarea readonly id="thu_dmilk_val" type="input" value = "'.$thu.'size="5px">'.$thu.'</textarea>'; ?>

                <button id="thu_dmilk_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("thu_dmilk_minus").addEventListener("click", function(){
     s = document.getElementById("thu_dmilk_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Dtmilk&ldo=2");
     document.getElementById("thu_dmilk_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("thu_dmilk_plus").addEventListener("click", function(){
     s = document.getElementById("thu_dmilk_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Dtmilk&ldo=1");
     document.getElementById("thu_dmilk_val").value = parseInt(s) + 1;
    
});

 
</script>



<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/36.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>SOUR CURD</h5>
                <p style="color:red;">₹ 50 / 500 g</p>
              <button id="thu_socurd_minus" class="btn btn-default btn-sm" >-</button>

                 <?php $thu = $data[4]['Sour_Curd']; echo '<textarea readonly id="thu_socurd_val" type="input" value = "'.$thu.'size="5px">'.$thu.'</textarea>'; ?>

                <button id="thu_socurd_plus" class="btn btn-default btn-sm" >+</button>
</div>
<script>
document.getElementById("thu_socurd_minus").addEventListener("click", function(){
     s = document.getElementById("thu_socurd_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Sour_Curd&ldo=2");
     document.getElementById("thu_socurd_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("thu_socurd_plus").addEventListener("click", function(){
     s = document.getElementById("thu_socurd_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Sour_Curd&ldo=1");
     document.getElementById("thu_socurd_val").value = parseInt(s) + 1;
    
});

</script>



<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/37.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>SWEET CURD</h5>
                <p style="color:red;">₹ 80 / 500 g</p>
                <button id="thu_swcurd_minus" class="btn btn-default btn-sm" >-</button>

                 <?php $thu = $data[4]['Sweet_Curd']; echo '<textarea readonly id="thu_swcurd_val" type="input" value = "'.$thu.'size="5px">'.$thu.'</textarea>'; ?>

                <button id="thu_swcurd_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>
document.getElementById("thu_swcurd_minus").addEventListener("click", function(){
     s = document.getElementById("thu_swcurd_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Sweet_Curd&ldo=2");
     document.getElementById("thu_swcurd_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("thu_swcurd_plus").addEventListener("click", function(){
     s = document.getElementById("thu_swcurd_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Sweet_Curd&ldo=1");
     document.getElementById("thu_swcurd_val").value = parseInt(s) + 1;
    
});

</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/38.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>PORK RIBS</h5>
                <p style="color:red;">₹ 350 / 500 g</p>
                <button id="thu_poribs_minus" class="btn btn-default btn-sm" >-</button>

                 <?php $thu = $data[4]['Pork_ribs']; echo '<textarea readonly id="thu_poribs_val" type="input" value = "'.$thu.'size="5px">'.$thu.'</textarea>'; ?>

                <button id="thu_poribs_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>
document.getElementById("thu_poribs_minus").addEventListener("click", function(){
     s = document.getElementById("thu_poribs_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Pork_ribs&ldo=2");
     document.getElementById("thu_poribs_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("thu_poribs_plus").addEventListener("click", function(){
     s = document.getElementById("thu_poribs_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Pork_ribs&ldo=1");
     document.getElementById("thu_poribs_val").value = parseInt(s) + 1;
    
});

</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/39.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>PORK CHOPS (BONELESS)</h5>
                <p style="color:red;">₹ 320 / 500 g</p>
                 <button id="thu_pochops_minus" class="btn btn-default btn-sm" >-</button>

                <?php $thu = $data[4]['Pork_chops_bl']; echo '<textarea readonly id="thu_pochops_val" type="input" value = "'.$thu.'size="5px">'.$thu.'</textarea>'; ?>

                <button id="thu_pochops_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>
document.getElementById("thu_pochops_minus").addEventListener("click", function(){
     s = document.getElementById("thu_pochops_val").value;
     if(parseInt(s) == 0) return;
      $("#lab").load("js_change.php?value="+s+"&day=4&item=Pork_chops_bl&ldo=2");
     document.getElementById("thu_pochops_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("thu_pochops_plus").addEventListener("click", function(){
     s = document.getElementById("thu_pochops_val").value;
     if(parseInt(s) == 10) return;
      $("#lab").load("js_change.php?value="+s+"&day=4&item=Pork_chops_bl&ldo=1");
     document.getElementById("thu_pochops_val").value = parseInt(s) + 1;
    
});

</script>

                <img src="img/portfolio/40.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>PORK CHOPS (BONE)</h5>
                <p style="color:red;">₹ 290 / 500 g</p>
                 <button id="thu_pochopsb_minus" class="btn btn-default btn-sm" >-</button>

                <?php $thu = $data[4]['Pork_chops_bn']; echo '<textarea readonly id="thu_pochopsb_val" type="input" value = "'.$thu.'size="5px">'.$thu.'</textarea>'; ?>

                <button id="thu_pochopsb_plus" class="btn btn-default btn-sm" >+</button>

<script>
document.getElementById("thu_pochopsb_minus").addEventListener("click", function(){
     s = document.getElementById("thu_pochopsb_val").value;
     if(parseInt(s) == 0) return;
      $("#lab").load("js_change.php?value="+s+"&day=4&item=Pork_chops_bn&ldo=2");
     document.getElementById("thu_pochopsb_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("thu_pochopsb_plus").addEventListener("click", function(){
     s = document.getElementById("thu_pochopsb_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=4&item=Pork_chops_bn&ldo=1");
     document.getElementById("thu_pochopsb_val").value = parseInt(s) + 1;
    
});

</script>
  </section>




































  <section id="content5">
    <br>
  <hr>
    
            <div class="col-md-3 product-model-sec">
            <img src="img/portfolio/41.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>BASMATI RICE</h5>
                <p style="color:red;">₹ 77 / 500 g</p>
                <button id="fri_basmati_minus" class="btn btn-default btn-sm" >-</button>

                <?php $fri = $data[5]['Basmati']; echo '<textarea readonly id="fri_basmati_val" type="input" value = "'.$fri.'size="5px">'.$fri.'</textarea>'; ?>

                <button id="fri_basmati_plus" class="btn btn-default btn-sm" >+</button>
            </div>
<div id="lab"></div>
            <script>

document.getElementById("fri_basmati_minus").addEventListener("click", function(){
     s = document.getElementById("fri_basmati_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Basmati&ldo=2");
     document.getElementById("fri_basmati_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("fri_basmati_plus").addEventListener("click", function(){
     s = document.getElementById("fri_basmati_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Basmati&ldo=1");
     document.getElementById("fri_basmati_val").value = parseInt(s) + 1;
});

 
</script>


<div class="col-md-3 product-model-sec">
                <img src="img/portfolio/42.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>BASKATI RICE</h5>
                <p style="color:red;">₹ 28 / 500 g</p>
                 <button id="fri_baskati_minus" class="btn btn-default btn-sm" >-</button>

                 <?php $fri = $data[5]['Baskati']; echo '<textarea readonly id="fri_baskati_val" type="input" value = "'.$fri.'size="5px">'.$fri.'</textarea>'; ?>
                 
                <button id="fri_baskati_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("fri_baskati_minus").addEventListener("click", function(){
     s = document.getElementById("fri_baskati_val").value;
     if(parseInt(s) == 0) return;
      $("#lab").load("js_change.php?value="+s+"&day=5&item=Baskati&ldo=2");
     document.getElementById("fri_baskati_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("fri_baskati_plus").addEventListener("click", function(){
     s = document.getElementById("fri_baskati_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Baskati&ldo=1");
     document.getElementById("fri_baskati_val").value = parseInt(s) + 1;
    
});

 
</script>


<div class="col-md-3 product-model-sec">
                <img src="img/portfolio/43.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>MOONG DAL</h5>
                <p style="color:red;">₹ 56 / 500 g</p>
                <button id="fri_moong_minus" class="btn btn-default btn-sm" >-</button>

                <?php $fri = $data[5]['Moong']; echo '<textarea readonly id="fri_moong_val" type="input" value = "'.$fri.'size="5px">'.$fri.'</textarea>'; ?>
                
                <button id="fri_moong_plus" class="btn btn-default btn-sm" >+</button>
</div>


<script>

document.getElementById("fri_moong_minus").addEventListener("click", function(){
     s = document.getElementById("fri_moong_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Moong&ldo=2");
     document.getElementById("fri_moong_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("fri_moong_plus").addEventListener("click", function(){
     s = document.getElementById("fri_moong_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Moong&ldo=1");
     document.getElementById("fri_moong_val").value = parseInt(s) + 1;
    
});

 
</script>





                <div class="col-md-3 product-model-sec">
                <img src="img/portfolio/44.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>MASOOR DAL</h5>
                <p style="color:red;">₹ 55 / 500 g</p>
                <button id="fri_masoor_minus" class="btn btn-default btn-sm" >-</button>

                <?php $fri = $data[5]['Masoor']; echo '<textarea readonly id="fri_masoor_val" type="input" value = "'.$fri.'size="5px">'.$fri.'</textarea>'; ?>

                <button id="fri_masoor_plus" class="btn btn-default btn-sm" >+</button>
</div>



<script>

document.getElementById("fri_masoor_minus").addEventListener("click", function(){
     s = document.getElementById("fri_masoor_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Masoor&ldo=2");
     document.getElementById("fri_masoor_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("fri_masoor_plus").addEventListener("click", function(){
     s = document.getElementById("fri_masoor_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Masoor&ldo=1");
     document.getElementById("fri_masoor_val").value = parseInt(s) + 1;
    
});

 
</script>


</br>


                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/45.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CHANA DAL</h5>
                <p style="color:red;">₹ 45 / 500 g</p>
                 <button id="fri_chana_minus" class="btn btn-default btn-sm" >-</button>
                <?php $fri = $data[5]['Chana']; echo '<textarea readonly id="fri_chana_val" type="input" value = "'.$fri.'size="5px">'.$fri.'</textarea>'; ?>

                <button id="fri_chana_plus" class="btn btn-default btn-sm" >+</button>
</div>


<script>

document.getElementById("fri_chana_minus").addEventListener("click", function(){
     s = document.getElementById("fri_chana_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Chana&ldo=2");
     document.getElementById("fri_chana_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("fri_chana_plus").addEventListener("click", function(){
     s = document.getElementById("fri_chana_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Chana&ldo=1");
     document.getElementById("fri_chana_val").value = parseInt(s) + 1;
    
});

 
</script>


                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/46.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>ARHAR DAL</h5>
                <p style="color:red;">₹ 87 / 500 g</p>
                 <button id="fri_arhar_minus" class="btn btn-default btn-sm" >-</button>

                <?php $fri = $data[5]['Arhar']; echo '<textarea readonly id="fri_arhar_val" type="input" value = "'.$fri.'size="5px">'.$fri.'</textarea>'; ?>

                <button id="fri_arhar_plus" class="btn btn-default btn-sm" >+</button>
</div>


<script>

document.getElementById("fri_arhar_minus").addEventListener("click", function(){
     s = document.getElementById("fri_arhar_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Arhar&ldo=2");
     document.getElementById("fri_arhar_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("fri_arhar_plus").addEventListener("click", function(){
     s = document.getElementById("fri_arhar_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Arhar&ldo=1");
     document.getElementById("fri_arhar_val").value = parseInt(s) + 1;
    
});

 
</script>



                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/47.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>POTATO</h5>
                <p style="color:red;">₹ 25 / 1 Kg</p>
                 <button id="fri_potato_minus" class="btn btn-default btn-sm" >-</button>
                    <?php $fri = $data[5]['Potato']; echo '<textarea readonly id="fri_potato_val" type="input" value = "'.$fri.'size="5px">'.$fri.'</textarea>'; ?>

                <button id="fri_potato_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("fri_potato_minus").addEventListener("click", function(){
     s = document.getElementById("fri_potato_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Potato&ldo=2");
     document.getElementById("fri_poatato_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("fri_potato_plus").addEventListener("click", function(){
     s = document.getElementById("fri_potato_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Potato&ldo=1");
     document.getElementById("fri_potato_val").value = parseInt(s) + 1;
    
});

 
</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/48.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>ONION</h5>
                <p style="color:red;">₹ 135 / 500 g</p>
                <button id="fri_onion_minus" class="btn btn-default btn-sm" >-</button>

                <?php $fri = $data[5]['Onion']; echo '<textarea readonly id="fri_onion_val" type="input" value = "'.$fri.'size="5px">'.$fri.'</textarea>'; ?>

                <button id="fri_onion_plus" class="btn btn-default btn-sm" >+</button>
</div>


<script>

document.getElementById("fri_onion_minus").addEventListener("click", function(){
     s = document.getElementById("fri_onion_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Onion&ldo=2");
     document.getElementById("fri_onion_val").value = parseInt(s) - 1;
     
    
});
document.getElementById("fri_onion_plus").addEventListener("click", function(){
     s = document.getElementById("fri_onion_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Onion&ldo=1");
     document.getElementById("fri_onion_val").value = parseInt(s) + 1;
    
});

 
</script>


<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/49.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>TOMATO</h5>
                <p style="color:red;">₹ 135 / 500 g</p>
               <button id="fri_tomato_minus" class="btn btn-default btn-sm" >-</button>

                <?php $fri = $data[5]['Tomato']; echo '<textarea readonly id="fri_tomato_val" type="input" value = "'.$fri.'size="5px">'.$fri.'</textarea>'; ?>

                <button id="fri_tomato_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("fri_tomato_minus").addEventListener("click", function(){
     s = document.getElementById("fri_tomato_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Tomato&ldo=2");
     document.getElementById("fri_tomato_val").value = parseInt(s) - 1;
         
});

document.getElementById("fri_tomato_plus").addEventListener("click", function(){
     s = document.getElementById("fri_tomato_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Tomato&ldo=1");
     document.getElementById("fri_tomato_val").value = parseInt(s) + 1;
     
});

 
</script>



<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/50.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>GINGER</h5>
                <p style="color:red;">₹ 135 / 500 g</p>
                 <button id="fri_ginger_minus" class="btn btn-default btn-sm" >-</button>

                <?php $fri = $data[5]['Ginger']; echo '<textarea readonly id="fri_ginger_val" type="input" value = "'.$fri.'size="5px">'.$fri.'</textarea>'; ?>
                
                <button id="fri_ginger_plus" class="btn btn-default btn-sm" >+</button>
            
</div>



<script>

document.getElementById("fri_ginger_minus").addEventListener("click", function(){
     s = document.getElementById("fri_ginger_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Ginger&ldo=2");
     document.getElementById("fri_ginger_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("fri_ginger_plus").addEventListener("click", function(){
     s = document.getElementById("fri_ginger_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Ginger&ldo=1");
     document.getElementById("fri_ginger_val").value = parseInt(s) + 1;
    
});

 
</script>


<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/51.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>GARLIC</h5>
                <p style="color:red;">₹ 135 / 500 g</p>
                <button id="fri_garlic_minus" class="btn btn-default btn-sm" >-</button>

                <?php $fri = $data[5]['Garlic']; echo '<textarea readonly id="fri_garlic_val" type="input" value = "'.$fri.'size="5px">'.$fri.'</textarea>'; ?>
               

                <button id="fri_garlic_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("fri_garlic_minus").addEventListener("click", function(){
     s = document.getElementById("fri_garlic_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Garlic&ldo=2");
     document.getElementById("fri_garlic_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("fri_garlic_plus").addEventListener("click", function(){
     s = document.getElementById("fri_garlic_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Garlic&ldo=1");
     document.getElementById("fri_garlic_val").value = parseInt(s) + 1;
    
});

 
</script>



<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/52.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CHILLI</h5>
                <p style="color:red;">₹ 135 / 500 g</p>
                    <button id="fri_chilli_minus" class="btn btn-default btn-sm" >-</button>

                <?php $fri = $data[5]['Chilli']; echo '<textarea readonly id="fri_chilli_val" type="input" value = "'.$fri.'size="5px">'.$fri.'</textarea>'; ?>

                <button id="fri_chilli_plus" class="btn btn-default btn-sm" >+</button>
</div>


<script>

document.getElementById("fri_chilli_minus").addEventListener("click", function(){
     s = document.getElementById("fri_chilli_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Chilli&ldo=2");
     document.getElementById("fri_chilli_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("fri_chilli_plus").addEventListener("click", function(){
     s = document.getElementById("fri_chilli_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Chilli&ldo=1");
     document.getElementById("fri_chilli_val").value = parseInt(s) + 1;
    
});

 
</script>


<div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/01.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CHICKEN DRUMSTICKS</h5>
                <p style="color:red;">₹ 135 / 500 g</p>
                  <button id="fri_drum_minus" class="btn btn-default btn-sm" >-</button>

                <?php $fri = $data[5]['Chick_drums']; echo '<textarea readonly id="fri_drum_val" type="input" value = "'.$fri.'size="5px">'.$fri.'</textarea>'; ?>

                <button id="fri_drum_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("fri_drum_minus").addEventListener("click", function(){
     s = document.getElementById("fri_drum_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Chick_drums&ldo=2");
     document.getElementById("fri_drum_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("fri_drum_plus").addEventListener("click", function(){
     s = document.getElementById("fri_drum_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Chick_drums&ldo=1");
     document.getElementById("fri_drum_val").value = parseInt(s) + 1;
    
});

 
</script>

                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/02.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CHICKEN BONELESS</h5>
                <p style="color:red;">₹ 160 / 500 g</p>
                  <button id="fri_chbonls_minus" class="btn btn-default btn-sm" >-</button>
            <?php $fri = $data[5]['Chick_boneless']; echo '<textarea readonly id="fri_chbonls_val" type="input" value = "'.$fri.'size="5px">'.$fri.'</textarea>'; ?>

                <button id="fri_chbonls_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("fri_chbonls_minus").addEventListener("click", function(){
     s = document.getElementById("fri_chbonls_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Chick_boneless&ldo=2");
     document.getElementById("fri_chbonls_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("fri_chbonls_plus").addEventListener("click", function(){
     s = document.getElementById("fri_chbonls_val").value;
     if(parseInt(s) == 10) return;
      $("#lab").load("js_change.php?value="+s+"&day=5&item=Chick_boneless&ldo=1");
     document.getElementById("fri_chbonls_val").value = parseInt(s) + 1;
    
});

 
</script>



                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/03.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CHICKEN KEEMA</h5>
                <p style="color:red;">₹165 / 500 g</p>
                <button id="fri_chkee_minus" class="btn btn-default btn-sm" >-</button>

                <?php $fri = $data[5]['Chick_keema']; echo '<textarea readonly id="fri_chkee_val" type="input" value = "'.$fri.'size="5px">'.$fri.'</textarea>'; ?>

                <button id="fri_chkee_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("fri_chkee_minus").addEventListener("click", function(){
     s = document.getElementById("fri_chkee_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Chick_keema&ldo=2");
     document.getElementById("fri_chkee_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("fri_chkee_plus").addEventListener("click", function(){
     s = document.getElementById("fri_chkee_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Chick_keema&ldo=1");
     document.getElementById("fri_chkee_val").value = parseInt(s) + 1;
    
});

 
</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/04.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>WHOLE SKINLESS CHICKEN</h5>
                <p style="color:red;">₹ 190 ~ 1 Kg</p>
                 <button id="fri_chwh_minus" class="btn btn-default btn-sm" >-</button>

                <?php $fri = $data[5]['Chick_whole_skinless']; echo '<textarea readonly id="fri_chwh_val" type="input" value = "'.$fri.'size="5px">'.$fri.'</textarea>'; ?>

                <button id="fri_chwh_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("fri_chwh_minus").addEventListener("click", function(){
     s = document.getElementById("fri_chwh_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Chick_whole_skinless&ldo=2");
     document.getElementById("fri_chwh_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("fri_chwh_plus").addEventListener("click", function(){
     s = document.getElementById("fri_chwh_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Chick_whole_skinless&ldo=1");
     document.getElementById("fri_chwh_val").value = parseInt(s) + 1;
    
});

 
</script>






<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/06.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CHICKEN BREAST</h5>
                <p style="color:red;">₹ 160 / 500 g</p>
                 <button id="fri_chbr_minus" class="btn btn-default btn-sm" >-</button>

               <?php $fri = $data[5]['Chick_breast']; echo '<textarea readonly id="fri_chbr_val" type="input" value = "'.$fri.'size="5px">'.$fri.'</textarea>'; ?>

                <button id="fri_chbr_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("fri_chbr_minus").addEventListener("click", function(){
     s = document.getElementById("fri_chbr_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Chick_breast&ldo=2");
     document.getElementById("fri_chbr_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("fri_chbr_plus").addEventListener("click", function(){
     s = document.getElementById("fri_chbr_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Chick_breast&ldo=1");
     document.getElementById("fri_chbr_val").value = parseInt(s) + 1;
    
});

 
</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/07.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CHICKEN CUT</h5>
                <p style="color:red;">₹ 105 / 500 g</p>
                  <button id="fri_chc_minus" class="btn btn-default btn-sm" >-</button>

                <?php $fri = $data[5]['Chick_cut']; echo '<textarea readonly id="fri_chc_val" type="input" value = "'.$fri.'size="5px">'.$fri.'</textarea>'; ?>

                <button id="fri_chc_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("fri_chc_minus").addEventListener("click", function(){
     s = document.getElementById("fri_chc_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Chick_cut&ldo=2");
     document.getElementById("fri_chc_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("fri_chc_plus").addEventListener("click", function(){
     s = document.getElementById("fri_chc_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Chick_cut&ldo=1");
     document.getElementById("fri_chc_val").value = parseInt(s) + 1;
    
});

 
</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/08.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>WHOLE SKIN CHICKEN</h5>
                <p style="color:red;">₹ 190 ~ 1 Kg</p>
                  <button id="fri_chwhsk_minus" class="btn btn-default btn-sm" >-</button>

                <?php $fri = $data[5]['Chick_whole_skin']; echo '<textarea readonly id="fri_chwhsk_val" type="input" value = "'.$fri.'" size="5px">'.$fri.'</textarea>'; ?>

                <button id="fri_chwhsk_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("fri_chwhsk_minus").addEventListener("click", function(){
     s = document.getElementById("fri_chwhsk_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Chick_whole_skin&ldo=2");
     document.getElementById("fri_chwhsk_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("fri_chwhsk_plus").addEventListener("click", function(){
     s = document.getElementById("fri_chwhsk_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Chick_whole_skin&ldo=1");
     document.getElementById("fri_chwhsk_val").value = parseInt(s) + 1;
    
});

</script>



<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/26.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CHICKEN 8 Pc CUT</h5>
                <p style="color:red;">₹ 190 ~ 1 Kg</p>
 <button id="fri_ch8pc_minus" class="btn btn-default btn-sm" >-</button>

                 <?php $fri = $data[5]['Chick_8pc_cut']; echo '<textarea readonly id="fri_ch8pc_val" type="input" value = "'.$fri.'size="5px">'.$fri.'</textarea>'; ?>

                <button id="fri_ch8pc_plus" class="btn btn-default btn-sm" >+</button>               
</div>

<script>

document.getElementById("fri_ch8pc_minus").addEventListener("click", function(){
     s = document.getElementById("fri_ch8pc_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Chick_8pc_cut&ldo=2");
     document.getElementById("fri_ch8pc_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("fri_ch8pc_plus").addEventListener("click", function(){
     s = document.getElementById("fri_ch8pc_val").value;
     if(parseInt(s) == 10) return;
      $("#lab").load("js_change.php?value="+s+"&day=5&item=Chick_8pc_cut&ldo=1");
     document.getElementById("fri_ch8pc_val").value = parseInt(s) + 1;
    
});

 
</script>





<div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/09.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>MUTTON CHOPS (BONE)</h5>
                <p style="color:red;">₹ 270 / 500 g</p>
                <button id="fri_muttchbn_minus" class="btn btn-default btn-sm" >-</button>

                <?php $fri = $data[5]['Mutt_chop_bone']; echo '<textarea readonly id="fri_muttchbn_val" type="input" value = "'.$fri.'size="5px">'.$fri.'</textarea>'; ?>

                <button id="fri_muttchbn_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("fri_muttchbn_minus").addEventListener("click", function(){
     s = document.getElementById("fri_muttchbn_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Mutt_chop_bone&ldo=2");
     document.getElementById("fri_muttchbn_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("fri_muttchbn_plus").addEventListener("click", function(){
     s = document.getElementById("fri_muttchbn_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Mutt_chop_bone&ldo=1");
     document.getElementById("fri_muttchbn_val").value = parseInt(s) + 1;
    
});

 
</script>


                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/10.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>MUTTON CHOPS (B/L)</h5>
                <p style="color:red;">₹ 335 / 500 g</p>
                 <button id="fri_muttch_minus" class="btn btn-default btn-sm" >-</button>

                <?php $fri = $data[5]['Mutt_chop_bl']; echo '<textarea readonly id="fri_muttch_val" type="input" value = "'.$fri.'size="5px">'.$fri.'</textarea>'; ?>

                <button id="fri_muttch_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("fri_muttch_minus").addEventListener("click", function(){
     s = document.getElementById("fri_muttch_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Mutt_chop_bl&ldo=2");
     document.getElementById("fri_muttch_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("fri_muttch_plus").addEventListener("click", function(){
     s = document.getElementById("fri_muttch_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Mutt_chop_bl&ldo=1");
     document.getElementById("fri_muttch_val").value = parseInt(s) + 1;
    
});

 
</script>




                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/11.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>MUTTON KEEMA</h5>
                <p style="color:red;">₹ 335 / 1 Kg</p>
               <button id="fri_muttkee_minus" class="btn btn-default btn-sm" >-</button>

                <?php $fri = $data[5]['Mutt_keema']; echo '<textarea readonly id="fri_muttkee_val" type="input" value = "'.$fri.'size="5px">'.$fri.'</textarea>'; ?>

                <button id="fri_muttkee_plus" class="btn btn-default btn-sm" >+</button>
</div>


<script>

document.getElementById("fri_muttkee_minus").addEventListener("click", function(){
     s = document.getElementById("fri_muttkee_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Mutt_keema&ldo=2");
     document.getElementById("fri_muttkee_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("fri_muttkee_plus").addEventListener("click", function(){
     s = document.getElementById("fri_muttkee_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Mutt_keema&ldo=1");
     document.getElementById("fri_muttkee_val").value = parseInt(s) + 1;
    
});

 
</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/12.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>ROHU </h5>
                <p style="color:red;">₹ 110 / 500 g</p>
                <button id="fri_rohu_minus" class="btn btn-default btn-sm" >-</button>

                <?php $fri = $data[5]['Rohu']; echo '<textarea readonly id="fri_rohu_val" type="input" value = "'.$fri.'size="5px">'.$fri.'</textarea>'; ?>

                <button id="fri_rohu_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("fri_rohu_minus").addEventListener("click", function(){
     s = document.getElementById("fri_rohu_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Rohu&ldo=2");
     document.getElementById("fri_rohu_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("fri_rohu_plus").addEventListener("click", function(){
     s = document.getElementById("fri_rohu_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Rohu&ldo=1");
     document.getElementById("fri_rohu_val").value = parseInt(s) + 1;
    
});

 
</script>



<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/13.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CATLA </h5>
                <p style="color:red;">₹ 110 / 500 g</p>
                <button id="fri_catla_minus" class="btn btn-default btn-sm" >-</button>

                <?php $fri = $data[5]['Catla']; echo '<textarea readonly id="fri_catla_val" type="input" value = "'.$fri.'size="5px">'.$fri.'</textarea>'; ?>

                <button id="fri_catla_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("fri_catla_minus").addEventListener("click", function(){
     s = document.getElementById("fri_catla_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Catla&ldo=2");
     document.getElementById("fri_catla_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("fri_catla_plus").addEventListener("click", function(){
     s = document.getElementById("fri_catla_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Catla&ldo=1");
     document.getElementById("fri_catla_val").value = parseInt(s) + 1;
    
});

 
</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/14.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>SALMON </h5>
                <p style="color:red;">₹ 580 / 500 g</p>
                <button id="fri_salmon_minus" class="btn btn-default btn-sm" >-</button>

                <?php $fri = $data[5]['Salmon']; echo '<textarea readonly id="fri_salmon_val" type="input" value = "'.$fri.'size="5px">'.$fri.'</textarea>'; ?>
                
                <button id="fri_salmon_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("fri_salmon_minus").addEventListener("click", function(){
     s = document.getElementById("fri_salmon_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Salmon&ldo=2");
     document.getElementById("fri_salmon_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("fri_salmon_plus").addEventListener("click", function(){
     s = document.getElementById("fri_salmon_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Salmon&ldo=1");
     document.getElementById("fri_salmon_val").value = parseInt(s) + 1;
    
});

 
</script>



<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/15.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>PRAWNS </h5>
                <p style="color:red;">₹ 610 / 500 g</p>
                <button id="fri_prawn_minus" class="btn btn-default btn-sm" >-</button>

                <?php $fri = $data[5]['Prawns']; echo '<textarea readonly id="fri_prawn_val" type="input" value = "'.$fri.'size="5px">'.$fri.'</textarea>'; ?>

                <button id="fri_prawn_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("fri_prawn_minus").addEventListener("click", function(){
     s = document.getElementById("fri_prawn_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Prawns&ldo=2");
     document.getElementById("fri_prawn_val").value = parseInt(s) - 1;
         
});

document.getElementById("fri_prawn_plus").addEventListener("click", function(){
     s = document.getElementById("fri_prawn_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Prawns&ldo=1");
     document.getElementById("fri_prawn_val").value = parseInt(s) + 1;
    
});

 
</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/16.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>WHITE POMPHRET FISH</h5>
                <p style="color:red;">₹ 785 / 500 g</p>
                <button id="fri_pomphret_minus" class="btn btn-default btn-sm" >-</button>

                <?php $fri = $data[5]['Pomphret']; echo '<textarea readonly id="fri_pomphret_val" type="input" value = "'.$fri.'size="5px">'.$fri.'</textarea>'; ?>
                
                <button id="fri_pomphret_plus" class="btn btn-default btn-sm" >+</button>
</div>


<script>

document.getElementById("fri_pomphret_minus").addEventListener("click", function(){
     s = document.getElementById("fri_pomphret_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Pomphret&ldo=2");
     document.getElementById("fri_pomphret_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("fri_pomphret_plus").addEventListener("click", function(){
     s = document.getElementById("fri_pomphret_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Pomphret&ldo=1");
     document.getElementById("fri_pomphret_val").value = parseInt(s) + 1;
    
});

</script>


<div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/31.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>PANEER</h5>
                <p style="color:red;">₹ 140 / 500 g</p>
                   <button id="fri_paneer_minus" class="btn btn-default btn-sm" >-</button>

                <?php $fri = $data[5]['Paneer']; echo '<textarea readonly id="fri_paneer_val" type="input" value = "'.$fri.'size="5px">'.$fri.'</textarea>'; ?>

                <button id="fri_paneer_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("fri_paneer_minus").addEventListener("click", function(){
     s = document.getElementById("fri_paneer_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Paneer&ldo=2");
     document.getElementById("fri_paneer_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("fri_paneer_plus").addEventListener("click", function(){
     s = document.getElementById("fri_paneer_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Paneer&ldo=1");
     document.getElementById("fri_paneer_val").value = parseInt(s) + 1;
    
});

 
</script>




                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/32.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>FRESH CHEESE</h5>
                <p style="color:red;">₹ 57 / 200 g</p>
                 <button id="fri_cheese_minus" class="btn btn-default btn-sm" >-</button>

                <?php $fri = $data[5]['Cheese']; echo '<textarea readonly id="fri_cheese_val" type="input" value = "'.$fri.'size="5px">'.$fri.'</textarea>'; ?>

                <button id="fri_cheese_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("fri_cheese_minus").addEventListener("click", function(){
     s = document.getElementById("fri_cheese_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Cheese&ldo=2");
     document.getElementById("fri_cheese_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("fri_cheese_plus").addEventListener("click", function(){
     s = document.getElementById("fri_cheese_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Cheese&ldo=1");
     document.getElementById("fri_cheese_val").value = parseInt(s) + 1;
    
});

 
</script>


                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/33.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>SINGLE TONED MILK</h5>
                <p style="color:red;">₹ 45 / 1 L</p>
                 <button id="fri_smilk_minus" class="btn btn-default btn-sm" >-</button>

                 <?php $fri = $data[5]['Stmilk']; echo '<textarea readonly id="fri_smilk_val" type="input" value = "'.$fri.'size="5px">'.$fri.'</textarea>'; ?>

                <button id="fri_smilk_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("fri_smilk_minus").addEventListener("click", function(){
     s = document.getElementById("fri_smilk_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Stmilk&ldo=2");
     document.getElementById("fri_smilk_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("fri_smilk_plus").addEventListener("click", function(){
     s = document.getElementById("fri_smilk_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Stmilk&ldo=1");
     document.getElementById("fri_smilk_val").value = parseInt(s) + 1;
    
});

 
</script>



<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/34.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>DOUBLE TONED MILK</h5>
                <p style="color:red;">₹ 45 / 1 L</p>
                  <button id="fri_dmilk_minus" class="btn btn-default btn-sm" >-</button>

                 <?php $fri = $data[5]['Dtmilk']; echo '<textarea readonly id="fri_dmilk_val" type="input" value = "'.$fri.'size="5px">'.$fri.'</textarea>'; ?>

                <button id="fri_dmilk_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("fri_dmilk_minus").addEventListener("click", function(){
     s = document.getElementById("fri_dmilk_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Dtmilk&ldo=2");
     document.getElementById("fri_dmilk_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("fri_dmilk_plus").addEventListener("click", function(){
     s = document.getElementById("fri_dmilk_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Dtmilk&ldo=1");
     document.getElementById("fri_dmilk_val").value = parseInt(s) + 1;
    
});

 
</script>



<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/36.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>SOUR CURD</h5>
                <p style="color:red;">₹ 50 / 500 g</p>
              <button id="fri_socurd_minus" class="btn btn-default btn-sm" >-</button>

                 <?php $fri = $data[5]['Sour_Curd']; echo '<textarea readonly id="fri_socurd_val" type="input" value = "'.$fri.'size="5px">'.$fri.'</textarea>'; ?>

                <button id="fri_socurd_plus" class="btn btn-default btn-sm" >+</button>
</div>
<script>
document.getElementById("fri_socurd_minus").addEventListener("click", function(){
     s = document.getElementById("fri_socurd_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Sour_Curd&ldo=2");
     document.getElementById("fri_socurd_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("fri_socurd_plus").addEventListener("click", function(){
     s = document.getElementById("fri_socurd_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Sour_Curd&ldo=1");
     document.getElementById("fri_socurd_val").value = parseInt(s) + 1;
    
});

</script>



<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/37.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>SWEET CURD</h5>
                <p style="color:red;">₹ 80 / 500 g</p>
                <button id="fri_swcurd_minus" class="btn btn-default btn-sm" >-</button>

                 <?php $fri = $data[5]['Sweet_Curd']; echo '<textarea readonly id="fri_swcurd_val" type="input" value = "'.$fri.'size="5px">'.$fri.'</textarea>'; ?>

                <button id="fri_swcurd_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>
document.getElementById("fri_swcurd_minus").addEventListener("click", function(){
     s = document.getElementById("fri_swcurd_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Sweet_Curd&ldo=2");
     document.getElementById("fri_swcurd_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("fri_swcurd_plus").addEventListener("click", function(){
     s = document.getElementById("fri_swcurd_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Sweet_Curd&ldo=1");
     document.getElementById("fri_swcurd_val").value = parseInt(s) + 1;
    
});

</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/38.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>PORK RIBS</h5>
                <p style="color:red;">₹ 350 / 500 g</p>
                <button id="fri_poribs_minus" class="btn btn-default btn-sm" >-</button>

                 <?php $fri = $data[5]['Pork_ribs']; echo '<textarea readonly id="fri_poribs_val" type="input" value = "'.$fri.'size="5px">'.$fri.'</textarea>'; ?>

                <button id="fri_poribs_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>
document.getElementById("fri_poribs_minus").addEventListener("click", function(){
     s = document.getElementById("fri_poribs_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Pork_ribs&ldo=2");
     document.getElementById("fri_poribs_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("fri_poribs_plus").addEventListener("click", function(){
     s = document.getElementById("fri_poribs_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Pork_ribs&ldo=1");
     document.getElementById("fri_poribs_val").value = parseInt(s) + 1;
    
});

</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/39.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>PORK CHOPS (BONELESS)</h5>
                <p style="color:red;">₹ 320 / 500 g</p>
                 <button id="fri_pochops_minus" class="btn btn-default btn-sm" >-</button>

                <?php $fri = $data[5]['Pork_chops_bl']; echo '<textarea readonly id="fri_pochops_val" type="input" value = "'.$fri.'size="5px">'.$fri.'</textarea>'; ?>

                <button id="fri_pochops_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>
document.getElementById("fri_pochops_minus").addEventListener("click", function(){
     s = document.getElementById("fri_pochops_val").value;
     if(parseInt(s) == 0) return;
      $("#lab").load("js_change.php?value="+s+"&day=5&item=Pork_chops_bl&ldo=2");
     document.getElementById("fri_pochops_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("fri_pochops_plus").addEventListener("click", function(){
     s = document.getElementById("fri_pochops_val").value;
     if(parseInt(s) == 10) return;
      $("#lab").load("js_change.php?value="+s+"&day=5&item=Pork_chops_bl&ldo=1");
     document.getElementById("fri_pochops_val").value = parseInt(s) + 1;
    
});

</script>

                <img src="img/portfolio/40.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>PORK CHOPS (BONE)</h5>
                <p style="color:red;">₹ 290 / 500 g</p>
                 <button id="fri_pochopsb_minus" class="btn btn-default btn-sm" >-</button>

                <?php $fri = $data[5]['Pork_chops_bn']; echo '<textarea readonly id="fri_pochopsb_val" type="input" value = "'.$fri.'size="5px">'.$fri.'</textarea>'; ?>

                <button id="fri_pochopsb_plus" class="btn btn-default btn-sm" >+</button>

<script>
document.getElementById("fri_pochopsb_minus").addEventListener("click", function(){
     s = document.getElementById("fri_pochopsb_val").value;
     if(parseInt(s) == 0) return;
      $("#lab").load("js_change.php?value="+s+"&day=5&item=Pork_chops_bn&ldo=2");
     document.getElementById("fri_pochopsb_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("fri_pochopsb_plus").addEventListener("click", function(){
     s = document.getElementById("fri_pochopsb_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=5&item=Pork_chops_bn&ldo=1");
     document.getElementById("fri_pochopsb_val").value = parseInt(s) + 1;
    
});

</script>
  </section>






































  <section id="content6">
    <br>
  <hr>
    
            <div class="col-md-3 product-model-sec">
            <img src="img/portfolio/41.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>BASMATI RICE</h5>
                <p style="color:red;">₹ 77 / 500 g</p>
                <button id="sat_basmati_minus" class="btn btn-default btn-sm" >-</button>

                <?php $sat = $data[6]['Basmati']; echo '<textarea readonly id="sat_basmati_val" type="input" value = "'.$sat.'size="5px">'.$sat.'</textarea>'; ?>

                <button id="sat_basmati_plus" class="btn btn-default btn-sm" >+</button>
            </div>
<div id="lab"></div>
            <script>

document.getElementById("sat_basmati_minus").addEventListener("click", function(){
     s = document.getElementById("sat_basmati_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Basmati&ldo=2");
     document.getElementById("sat_basmati_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sat_basmati_plus").addEventListener("click", function(){
     s = document.getElementById("sat_basmati_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Basmati&ldo=1");
     document.getElementById("sat_basmati_val").value = parseInt(s) + 1;
});

 
</script>


<div class="col-md-3 product-model-sec">
                <img src="img/portfolio/42.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>BASKATI RICE</h5>
                <p style="color:red;">₹ 28 / 500 g</p>
                 <button id="sat_baskati_minus" class="btn btn-default btn-sm" >-</button>

                 <?php $sat = $data[6]['Baskati']; echo '<textarea readonly id="sat_baskati_val" type="input" value = "'.$sat.'size="5px">'.$sat.'</textarea>'; ?>
                 
                <button id="sat_baskati_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("sat_baskati_minus").addEventListener("click", function(){
     s = document.getElementById("sat_baskati_val").value;
     if(parseInt(s) == 0) return;
      $("#lab").load("js_change.php?value="+s+"&day=6&item=Baskati&ldo=2");
     document.getElementById("sat_baskati_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sat_baskati_plus").addEventListener("click", function(){
     s = document.getElementById("sat_baskati_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Baskati&ldo=1");
     document.getElementById("sat_baskati_val").value = parseInt(s) + 1;
    
});

 
</script>


<div class="col-md-3 product-model-sec">
                <img src="img/portfolio/43.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>MOONG DAL</h5>
                <p style="color:red;">₹ 56 / 500 g</p>
                <button id="sat_moong_minus" class="btn btn-default btn-sm" >-</button>

                <?php $sat = $data[6]['Moong']; echo '<textarea readonly id="sat_moong_val" type="input" value = "'.$sat.'size="5px">'.$sat.'</textarea>'; ?>
                
                <button id="sat_moong_plus" class="btn btn-default btn-sm" >+</button>
</div>


<script>

document.getElementById("sat_moong_minus").addEventListener("click", function(){
     s = document.getElementById("sat_moong_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Moong&ldo=2");
     document.getElementById("sat_moong_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sat_moong_plus").addEventListener("click", function(){
     s = document.getElementById("sat_moong_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Moong&ldo=1");
     document.getElementById("sat_moong_val").value = parseInt(s) + 1;
    
});

 
</script>





                <div class="col-md-3 product-model-sec">
                <img src="img/portfolio/44.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>MASOOR DAL</h5>
                <p style="color:red;">₹ 55 / 500 g</p>
                <button id="sat_masoor_minus" class="btn btn-default btn-sm" >-</button>

                <?php $sat = $data[6]['Masoor']; echo '<textarea readonly id="sat_masoor_val" type="input" value = "'.$sat.'size="5px">'.$sat.'</textarea>'; ?>

                <button id="sat_masoor_plus" class="btn btn-default btn-sm" >+</button>
</div>



<script>

document.getElementById("sat_masoor_minus").addEventListener("click", function(){
     s = document.getElementById("sat_masoor_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Masoor&ldo=2");
     document.getElementById("sat_masoor_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sat_masoor_plus").addEventListener("click", function(){
     s = document.getElementById("sat_masoor_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Masoor&ldo=1");
     document.getElementById("sat_masoor_val").value = parseInt(s) + 1;
    
});

 
</script>


</br>


                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/45.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CHANA DAL</h5>
                <p style="color:red;">₹ 45 / 500 g</p>
                 <button id="sat_chana_minus" class="btn btn-default btn-sm" >-</button>
                <?php $sat = $data[6]['Chana']; echo '<textarea readonly id="sat_chana_val" type="input" value = "'.$sat.'size="5px">'.$sat.'</textarea>'; ?>

                <button id="sat_chana_plus" class="btn btn-default btn-sm" >+</button>
</div>


<script>

document.getElementById("sat_chana_minus").addEventListener("click", function(){
     s = document.getElementById("sat_chana_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Chana&ldo=2");
     document.getElementById("sat_chana_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sat_chana_plus").addEventListener("click", function(){
     s = document.getElementById("sat_chana_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Chana&ldo=1");
     document.getElementById("sat_chana_val").value = parseInt(s) + 1;
    
});

 
</script>


                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/46.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>ARHAR DAL</h5>
                <p style="color:red;">₹ 87 / 500 g</p>
                 <button id="sat_arhar_minus" class="btn btn-default btn-sm" >-</button>

                <?php $sat = $data[6]['Arhar']; echo '<textarea readonly id="sat_arhar_val" type="input" value = "'.$sat.'size="5px">'.$sat.'</textarea>'; ?>

                <button id="sat_arhar_plus" class="btn btn-default btn-sm" >+</button>
</div>


<script>

document.getElementById("sat_arhar_minus").addEventListener("click", function(){
     s = document.getElementById("sat_arhar_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Arhar&ldo=2");
     document.getElementById("sat_arhar_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sat_arhar_plus").addEventListener("click", function(){
     s = document.getElementById("sat_arhar_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Arhar&ldo=1");
     document.getElementById("sat_arhar_val").value = parseInt(s) + 1;
    
});

 
</script>



                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/47.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>POTATO</h5>
                <p style="color:red;">₹ 25 / 1 Kg</p>
                 <button id="sat_potato_minus" class="btn btn-default btn-sm" >-</button>
                    <?php $sat = $data[6]['Potato']; echo '<textarea readonly id="sat_potato_val" type="input" value = "'.$sat.'size="5px">'.$sat.'</textarea>'; ?>

                <button id="sat_potato_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("sat_potato_minus").addEventListener("click", function(){
     s = document.getElementById("sat_potato_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Potato&ldo=2");
     document.getElementById("sat_poatato_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sat_potato_plus").addEventListener("click", function(){
     s = document.getElementById("sat_potato_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Potato&ldo=1");
     document.getElementById("sat_potato_val").value = parseInt(s) + 1;
    
});

 
</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/48.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>ONION</h5>
                <p style="color:red;">₹ 135 / 500 g</p>
                <button id="sat_onion_minus" class="btn btn-default btn-sm" >-</button>

                <?php $sat = $data[6]['Onion']; echo '<textarea readonly id="sat_onion_val" type="input" value = "'.$sat.'size="5px">'.$sat.'</textarea>'; ?>

                <button id="sat_onion_plus" class="btn btn-default btn-sm" >+</button>
</div>


<script>

document.getElementById("sat_onion_minus").addEventListener("click", function(){
     s = document.getElementById("sat_onion_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Onion&ldo=2");
     document.getElementById("sat_onion_val").value = parseInt(s) - 1;
     
    
});
document.getElementById("sat_onion_plus").addEventListener("click", function(){
     s = document.getElementById("sat_onion_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Onion&ldo=1");
     document.getElementById("sat_onion_val").value = parseInt(s) + 1;
    
});

 
</script>


<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/49.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>TOMATO</h5>
                <p style="color:red;">₹ 135 / 500 g</p>
               <button id="sat_tomato_minus" class="btn btn-default btn-sm" >-</button>

                <?php $sat = $data[6]['Tomato']; echo '<textarea readonly id="sat_tomato_val" type="input" value = "'.$sat.'size="5px">'.$sat.'</textarea>'; ?>

                <button id="sat_tomato_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("sat_tomato_minus").addEventListener("click", function(){
     s = document.getElementById("sat_tomato_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Tomato&ldo=2");
     document.getElementById("sat_tomato_val").value = parseInt(s) - 1;
         
});

document.getElementById("sat_tomato_plus").addEventListener("click", function(){
     s = document.getElementById("sat_tomato_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Tomato&ldo=1");
     document.getElementById("sat_tomato_val").value = parseInt(s) + 1;
     
});

 
</script>



<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/50.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>GINGER</h5>
                <p style="color:red;">₹ 135 / 500 g</p>
                 <button id="sat_ginger_minus" class="btn btn-default btn-sm" >-</button>

                <?php $sat = $data[6]['Ginger']; echo '<textarea readonly id="sat_ginger_val" type="input" value = "'.$sat.'size="5px">'.$sat.'</textarea>'; ?>
                
                <button id="sat_ginger_plus" class="btn btn-default btn-sm" >+</button>
            
</div>



<script>

document.getElementById("sat_ginger_minus").addEventListener("click", function(){
     s = document.getElementById("sat_ginger_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Ginger&ldo=2");
     document.getElementById("sat_ginger_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sat_ginger_plus").addEventListener("click", function(){
     s = document.getElementById("sat_ginger_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Ginger&ldo=1");
     document.getElementById("sat_ginger_val").value = parseInt(s) + 1;
    
});

 
</script>


<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/51.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>GARLIC</h5>
                <p style="color:red;">₹ 135 / 500 g</p>
                <button id="sat_garlic_minus" class="btn btn-default btn-sm" >-</button>

                <?php $sat = $data[6]['Garlic']; echo '<textarea readonly id="sat_garlic_val" type="input" value = "'.$sat.'size="5px">'.$sat.'</textarea>'; ?>
               

                <button id="sat_garlic_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("sat_garlic_minus").addEventListener("click", function(){
     s = document.getElementById("sat_garlic_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Garlic&ldo=2");
     document.getElementById("sat_garlic_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sat_garlic_plus").addEventListener("click", function(){
     s = document.getElementById("sat_garlic_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Garlic&ldo=1");
     document.getElementById("sat_garlic_val").value = parseInt(s) + 1;
    
});

 
</script>



<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/52.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CHILLI</h5>
                <p style="color:red;">₹ 135 / 500 g</p>
                    <button id="sat_chilli_minus" class="btn btn-default btn-sm" >-</button>

                <?php $sat = $data[6]['Chilli']; echo '<textarea readonly id="sat_chilli_val" type="input" value = "'.$sat.'size="5px">'.$sat.'</textarea>'; ?>

                <button id="sat_chilli_plus" class="btn btn-default btn-sm" >+</button>
</div>


<script>

document.getElementById("sat_chilli_minus").addEventListener("click", function(){
     s = document.getElementById("sat_chilli_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Chilli&ldo=2");
     document.getElementById("sat_chilli_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sat_chilli_plus").addEventListener("click", function(){
     s = document.getElementById("sat_chilli_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Chilli&ldo=1");
     document.getElementById("sat_chilli_val").value = parseInt(s) + 1;
    
});

 
</script>


<div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/01.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CHICKEN DRUMSTICKS</h5>
                <p style="color:red;">₹ 135 / 500 g</p>
                  <button id="sat_drum_minus" class="btn btn-default btn-sm" >-</button>

                <?php $sat = $data[6]['Chick_drums']; echo '<textarea readonly id="sat_drum_val" type="input" value = "'.$sat.'size="5px">'.$sat.'</textarea>'; ?>

                <button id="sat_drum_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("sat_drum_minus").addEventListener("click", function(){
     s = document.getElementById("sat_drum_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Chick_drums&ldo=2");
     document.getElementById("sat_drum_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sat_drum_plus").addEventListener("click", function(){
     s = document.getElementById("sat_drum_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Chick_drums&ldo=1");
     document.getElementById("sat_drum_val").value = parseInt(s) + 1;
    
});

 
</script>

                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/02.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CHICKEN BONELESS</h5>
                <p style="color:red;">₹ 160 / 500 g</p>
                  <button id="sat_chbonls_minus" class="btn btn-default btn-sm" >-</button>
            <?php $sat = $data[6]['Chick_boneless']; echo '<textarea readonly id="sat_chbonls_val" type="input" value = "'.$sat.'size="5px">'.$sat.'</textarea>'; ?>

                <button id="sat_chbonls_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("sat_chbonls_minus").addEventListener("click", function(){
     s = document.getElementById("sat_chbonls_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Chick_boneless&ldo=2");
     document.getElementById("sat_chbonls_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sat_chbonls_plus").addEventListener("click", function(){
     s = document.getElementById("sat_chbonls_val").value;
     if(parseInt(s) == 10) return;
      $("#lab").load("js_change.php?value="+s+"&day=6&item=Chick_boneless&ldo=1");
     document.getElementById("sat_chbonls_val").value = parseInt(s) + 1;
    
});

 
</script>



                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/03.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CHICKEN KEEMA</h5>
                <p style="color:red;">₹165 / 500 g</p>
                <button id="sat_chkee_minus" class="btn btn-default btn-sm" >-</button>

                <?php $sat = $data[6]['Chick_keema']; echo '<textarea readonly id="sat_chkee_val" type="input" value = "'.$sat.'size="5px">'.$sat.'</textarea>'; ?>

                <button id="sat_chkee_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("sat_chkee_minus").addEventListener("click", function(){
     s = document.getElementById("sat_chkee_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Chick_keema&ldo=2");
     document.getElementById("sat_chkee_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sat_chkee_plus").addEventListener("click", function(){
     s = document.getElementById("sat_chkee_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Chick_keema&ldo=1");
     document.getElementById("sat_chkee_val").value = parseInt(s) + 1;
    
});

 
</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/04.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>WHOLE SKINLESS CHICKEN</h5>
                <p style="color:red;">₹ 190 ~ 1 Kg</p>
                 <button id="sat_chwh_minus" class="btn btn-default btn-sm" >-</button>

                <?php $sat = $data[6]['Chick_whole_skinless']; echo '<textarea readonly id="sat_chwh_val" type="input" value = "'.$sat.'size="5px">'.$sat.'</textarea>'; ?>

                <button id="sat_chwh_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("sat_chwh_minus").addEventListener("click", function(){
     s = document.getElementById("sat_chwh_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Chick_whole_skinless&ldo=2");
     document.getElementById("sat_chwh_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sat_chwh_plus").addEventListener("click", function(){
     s = document.getElementById("sat_chwh_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Chick_whole_skinless&ldo=1");
     document.getElementById("sat_chwh_val").value = parseInt(s) + 1;
    
});

 
</script>






<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/06.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CHICKEN BREAST</h5>
                <p style="color:red;">₹ 160 / 500 g</p>
                 <button id="sat_chbr_minus" class="btn btn-default btn-sm" >-</button>

               <?php $sat = $data[6]['Chick_breast']; echo '<textarea readonly id="sat_chbr_val" type="input" value = "'.$sat.'size="5px">'.$sat.'</textarea>'; ?>

                <button id="sat_chbr_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("sat_chbr_minus").addEventListener("click", function(){
     s = document.getElementById("sat_chbr_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Chick_breast&ldo=2");
     document.getElementById("sat_chbr_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sat_chbr_plus").addEventListener("click", function(){
     s = document.getElementById("sat_chbr_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Chick_breast&ldo=1");
     document.getElementById("sat_chbr_val").value = parseInt(s) + 1;
    
});

 
</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/07.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CHICKEN CUT</h5>
                <p style="color:red;">₹ 105 / 500 g</p>
                  <button id="sat_chc_minus" class="btn btn-default btn-sm" >-</button>

                <?php $sat = $data[6]['Chick_cut']; echo '<textarea readonly id="sat_chc_val" type="input" value = "'.$sat.'size="5px">'.$sat.'</textarea>'; ?>

                <button id="sat_chc_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("sat_chc_minus").addEventListener("click", function(){
     s = document.getElementById("sat_chc_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Chick_cut&ldo=2");
     document.getElementById("sat_chc_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sat_chc_plus").addEventListener("click", function(){
     s = document.getElementById("sat_chc_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Chick_cut&ldo=1");
     document.getElementById("sat_chc_val").value = parseInt(s) + 1;
    
});

 
</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/08.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>WHOLE SKIN CHICKEN</h5>
                <p style="color:red;">₹ 190 ~ 1 Kg</p>
                  <button id="sat_chwhsk_minus" class="btn btn-default btn-sm" >-</button>

                <?php $sat = $data[6]['Chick_whole_skin']; echo '<textarea readonly id="sat_chwhsk_val" type="input" value = "'.$sat.'" size="5px">'.$sat.'</textarea>'; ?>

                <button id="sat_chwhsk_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("sat_chwhsk_minus").addEventListener("click", function(){
     s = document.getElementById("sat_chwhsk_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Chick_whole_skin&ldo=2");
     document.getElementById("sat_chwhsk_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sat_chwhsk_plus").addEventListener("click", function(){
     s = document.getElementById("sat_chwhsk_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Chick_whole_skin&ldo=1");
     document.getElementById("sat_chwhsk_val").value = parseInt(s) + 1;
    
});

</script>



<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/26.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CHICKEN 8 Pc CUT</h5>
                <p style="color:red;">₹ 190 ~ 1 Kg</p>
 <button id="sat_ch8pc_minus" class="btn btn-default btn-sm" >-</button>

                 <?php $sat = $data[6]['Chick_8pc_cut']; echo '<textarea readonly id="sat_ch8pc_val" type="input" value = "'.$sat.'size="5px">'.$sat.'</textarea>'; ?>

                <button id="sat_ch8pc_plus" class="btn btn-default btn-sm" >+</button>               
</div>

<script>

document.getElementById("sat_ch8pc_minus").addEventListener("click", function(){
     s = document.getElementById("sat_ch8pc_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Chick_8pc_cut&ldo=2");
     document.getElementById("sat_ch8pc_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sat_ch8pc_plus").addEventListener("click", function(){
     s = document.getElementById("sat_ch8pc_val").value;
     if(parseInt(s) == 10) return;
      $("#lab").load("js_change.php?value="+s+"&day=6&item=Chick_8pc_cut&ldo=1");
     document.getElementById("sat_ch8pc_val").value = parseInt(s) + 1;
    
});

 
</script>





<div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/09.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>MUTTON CHOPS (BONE)</h5>
                <p style="color:red;">₹ 270 / 500 g</p>
                <button id="sat_muttchbn_minus" class="btn btn-default btn-sm" >-</button>

                <?php $sat = $data[6]['Mutt_chop_bone']; echo '<textarea readonly id="sat_muttchbn_val" type="input" value = "'.$sat.'size="5px">'.$sat.'</textarea>'; ?>

                <button id="sat_muttchbn_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("sat_muttchbn_minus").addEventListener("click", function(){
     s = document.getElementById("sat_muttchbn_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Mutt_chop_bone&ldo=2");
     document.getElementById("sat_muttchbn_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sat_muttchbn_plus").addEventListener("click", function(){
     s = document.getElementById("sat_muttchbn_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Mutt_chop_bone&ldo=1");
     document.getElementById("sat_muttchbn_val").value = parseInt(s) + 1;
    
});

 
</script>


                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/10.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>MUTTON CHOPS (B/L)</h5>
                <p style="color:red;">₹ 335 / 500 g</p>
                 <button id="sat_muttch_minus" class="btn btn-default btn-sm" >-</button>

                <?php $sat = $data[6]['Mutt_chop_bl']; echo '<textarea readonly id="sat_muttch_val" type="input" value = "'.$sat.'size="5px">'.$sat.'</textarea>'; ?>

                <button id="sat_muttch_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("sat_muttch_minus").addEventListener("click", function(){
     s = document.getElementById("sat_muttch_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Mutt_chop_bl&ldo=2");
     document.getElementById("sat_muttch_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sat_muttch_plus").addEventListener("click", function(){
     s = document.getElementById("sat_muttch_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Mutt_chop_bl&ldo=1");
     document.getElementById("sat_muttch_val").value = parseInt(s) + 1;
    
});

 
</script>




                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/11.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>MUTTON KEEMA</h5>
                <p style="color:red;">₹ 335 / 1 Kg</p>
               <button id="sat_muttkee_minus" class="btn btn-default btn-sm" >-</button>

                <?php $sat = $data[6]['Mutt_keema']; echo '<textarea readonly id="sat_muttkee_val" type="input" value = "'.$sat.'size="5px">'.$sat.'</textarea>'; ?>

                <button id="sat_muttkee_plus" class="btn btn-default btn-sm" >+</button>
</div>


<script>

document.getElementById("sat_muttkee_minus").addEventListener("click", function(){
     s = document.getElementById("sat_muttkee_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Mutt_keema&ldo=2");
     document.getElementById("sat_muttkee_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sat_muttkee_plus").addEventListener("click", function(){
     s = document.getElementById("sat_muttkee_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Mutt_keema&ldo=1");
     document.getElementById("sat_muttkee_val").value = parseInt(s) + 1;
    
});

 
</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/12.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>ROHU </h5>
                <p style="color:red;">₹ 110 / 500 g</p>
                <button id="sat_rohu_minus" class="btn btn-default btn-sm" >-</button>

                <?php $sat = $data[6]['Rohu']; echo '<textarea readonly id="sat_rohu_val" type="input" value = "'.$sat.'size="5px">'.$sat.'</textarea>'; ?>

                <button id="sat_rohu_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("sat_rohu_minus").addEventListener("click", function(){
     s = document.getElementById("sat_rohu_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Rohu&ldo=2");
     document.getElementById("sat_rohu_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sat_rohu_plus").addEventListener("click", function(){
     s = document.getElementById("sat_rohu_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Rohu&ldo=1");
     document.getElementById("sat_rohu_val").value = parseInt(s) + 1;
    
});

 
</script>



<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/13.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CATLA </h5>
                <p style="color:red;">₹ 110 / 500 g</p>
                <button id="sat_catla_minus" class="btn btn-default btn-sm" >-</button>

                <?php $sat = $data[6]['Catla']; echo '<textarea readonly id="sat_catla_val" type="input" value = "'.$sat.'size="5px">'.$sat.'</textarea>'; ?>

                <button id="sat_catla_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("sat_catla_minus").addEventListener("click", function(){
     s = document.getElementById("sat_catla_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Catla&ldo=2");
     document.getElementById("sat_catla_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sat_catla_plus").addEventListener("click", function(){
     s = document.getElementById("sat_catla_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Catla&ldo=1");
     document.getElementById("sat_catla_val").value = parseInt(s) + 1;
    
});

 
</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/14.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>SALMON </h5>
                <p style="color:red;">₹ 580 / 500 g</p>
                <button id="sat_salmon_minus" class="btn btn-default btn-sm" >-</button>

                <?php $sat = $data[6]['Salmon']; echo '<textarea readonly id="sat_salmon_val" type="input" value = "'.$sat.'size="5px">'.$sat.'</textarea>'; ?>
                
                <button id="sat_salmon_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("sat_salmon_minus").addEventListener("click", function(){
     s = document.getElementById("sat_salmon_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Salmon&ldo=2");
     document.getElementById("sat_salmon_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sat_salmon_plus").addEventListener("click", function(){
     s = document.getElementById("sat_salmon_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Salmon&ldo=1");
     document.getElementById("sat_salmon_val").value = parseInt(s) + 1;
    
});

 
</script>



<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/15.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>PRAWNS </h5>
                <p style="color:red;">₹ 610 / 500 g</p>
                <button id="sat_prawn_minus" class="btn btn-default btn-sm" >-</button>

                <?php $sat = $data[6]['Prawns']; echo '<textarea readonly id="sat_prawn_val" type="input" value = "'.$sat.'size="5px">'.$sat.'</textarea>'; ?>

                <button id="sat_prawn_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("sat_prawn_minus").addEventListener("click", function(){
     s = document.getElementById("sat_prawn_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Prawns&ldo=2");
     document.getElementById("sat_prawn_val").value = parseInt(s) - 1;
         
});

document.getElementById("sat_prawn_plus").addEventListener("click", function(){
     s = document.getElementById("sat_prawn_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Prawns&ldo=1");
     document.getElementById("sat_prawn_val").value = parseInt(s) + 1;
    
});

 
</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/16.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>WHITE POMPHRET FISH</h5>
                <p style="color:red;">₹ 785 / 500 g</p>
                <button id="sat_pomphret_minus" class="btn btn-default btn-sm" >-</button>

                <?php $sat = $data[6]['Pomphret']; echo '<textarea readonly id="sat_pomphret_val" type="input" value = "'.$sat.'size="5px">'.$sat.'</textarea>'; ?>
                
                <button id="sat_pomphret_plus" class="btn btn-default btn-sm" >+</button>
</div>


<script>

document.getElementById("sat_pomphret_minus").addEventListener("click", function(){
     s = document.getElementById("sat_pomphret_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Pomphret&ldo=2");
     document.getElementById("sat_pomphret_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sat_pomphret_plus").addEventListener("click", function(){
     s = document.getElementById("sat_pomphret_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Pomphret&ldo=1");
     document.getElementById("sat_pomphret_val").value = parseInt(s) + 1;
    
});

</script>


<div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/31.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>PANEER</h5>
                <p style="color:red;">₹ 140 / 500 g</p>
                   <button id="sat_paneer_minus" class="btn btn-default btn-sm" >-</button>

                <?php $sat = $data[6]['Paneer']; echo '<textarea readonly id="sat_paneer_val" type="input" value = "'.$sat.'size="5px">'.$sat.'</textarea>'; ?>

                <button id="sat_paneer_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("sat_paneer_minus").addEventListener("click", function(){
     s = document.getElementById("sat_paneer_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Paneer&ldo=2");
     document.getElementById("sat_paneer_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sat_paneer_plus").addEventListener("click", function(){
     s = document.getElementById("sat_paneer_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Paneer&ldo=1");
     document.getElementById("sat_paneer_val").value = parseInt(s) + 1;
    
});

 
</script>




                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/32.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>FRESH CHEESE</h5>
                <p style="color:red;">₹ 57 / 200 g</p>
                 <button id="sat_cheese_minus" class="btn btn-default btn-sm" >-</button>

                <?php $sat = $data[6]['Cheese']; echo '<textarea readonly id="sat_cheese_val" type="input" value = "'.$sat.'size="5px">'.$sat.'</textarea>'; ?>

                <button id="sat_cheese_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("sat_cheese_minus").addEventListener("click", function(){
     s = document.getElementById("sat_cheese_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Cheese&ldo=2");
     document.getElementById("sat_cheese_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sat_cheese_plus").addEventListener("click", function(){
     s = document.getElementById("sat_cheese_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Cheese&ldo=1");
     document.getElementById("sat_cheese_val").value = parseInt(s) + 1;
    
});

 
</script>


                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/33.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>SINGLE TONED MILK</h5>
                <p style="color:red;">₹ 45 / 1 L</p>
                 <button id="sat_smilk_minus" class="btn btn-default btn-sm" >-</button>

                 <?php $sat = $data[6]['Stmilk']; echo '<textarea readonly id="sat_smilk_val" type="input" value = "'.$sat.'size="5px">'.$sat.'</textarea>'; ?>

                <button id="sat_smilk_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("sat_smilk_minus").addEventListener("click", function(){
     s = document.getElementById("sat_smilk_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Stmilk&ldo=2");
     document.getElementById("sat_smilk_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sat_smilk_plus").addEventListener("click", function(){
     s = document.getElementById("sat_smilk_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Stmilk&ldo=1");
     document.getElementById("sat_smilk_val").value = parseInt(s) + 1;
    
});

 
</script>



<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/34.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>DOUBLE TONED MILK</h5>
                <p style="color:red;">₹ 45 / 1 L</p>
                  <button id="sat_dmilk_minus" class="btn btn-default btn-sm" >-</button>

                 <?php $sat = $data[6]['Dtmilk']; echo '<textarea readonly id="sat_dmilk_val" type="input" value = "'.$sat.'size="5px">'.$sat.'</textarea>'; ?>

                <button id="sat_dmilk_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("sat_dmilk_minus").addEventListener("click", function(){
     s = document.getElementById("sat_dmilk_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Dtmilk&ldo=2");
     document.getElementById("sat_dmilk_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sat_dmilk_plus").addEventListener("click", function(){
     s = document.getElementById("sat_dmilk_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Dtmilk&ldo=1");
     document.getElementById("sat_dmilk_val").value = parseInt(s) + 1;
    
});

 
</script>



<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/36.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>SOUR CURD</h5>
                <p style="color:red;">₹ 50 / 500 g</p>
              <button id="sat_socurd_minus" class="btn btn-default btn-sm" >-</button>

                 <?php $sat = $data[6]['Sour_Curd']; echo '<textarea readonly id="sat_socurd_val" type="input" value = "'.$sat.'size="5px">'.$sat.'</textarea>'; ?>

                <button id="sat_socurd_plus" class="btn btn-default btn-sm" >+</button>
</div>
<script>
document.getElementById("sat_socurd_minus").addEventListener("click", function(){
     s = document.getElementById("sat_socurd_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Sour_Curd&ldo=2");
     document.getElementById("sat_socurd_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sat_socurd_plus").addEventListener("click", function(){
     s = document.getElementById("sat_socurd_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Sour_Curd&ldo=1");
     document.getElementById("sat_socurd_val").value = parseInt(s) + 1;
    
});

</script>



<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/37.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>SWEET CURD</h5>
                <p style="color:red;">₹ 80 / 500 g</p>
                <button id="sat_swcurd_minus" class="btn btn-default btn-sm" >-</button>

                 <?php $sat = $data[6]['Sweet_Curd']; echo '<textarea readonly id="sat_swcurd_val" type="input" value = "'.$sat.'size="5px">'.$sat.'</textarea>'; ?>

                <button id="sat_swcurd_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>
document.getElementById("sat_swcurd_minus").addEventListener("click", function(){
     s = document.getElementById("sat_swcurd_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Sweet_Curd&ldo=2");
     document.getElementById("sat_swcurd_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sat_swcurd_plus").addEventListener("click", function(){
     s = document.getElementById("sat_swcurd_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Sweet_Curd&ldo=1");
     document.getElementById("sat_swcurd_val").value = parseInt(s) + 1;
    
});

</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/38.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>PORK RIBS</h5>
                <p style="color:red;">₹ 350 / 500 g</p>
                <button id="sat_poribs_minus" class="btn btn-default btn-sm" >-</button>

                 <?php $sat = $data[6]['Pork_ribs']; echo '<textarea readonly id="sat_poribs_val" type="input" value = "'.$sat.'size="5px">'.$sat.'</textarea>'; ?>

                <button id="sat_poribs_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>
document.getElementById("sat_poribs_minus").addEventListener("click", function(){
     s = document.getElementById("sat_poribs_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Pork_ribs&ldo=2");
     document.getElementById("sat_poribs_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sat_poribs_plus").addEventListener("click", function(){
     s = document.getElementById("sat_poribs_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Pork_ribs&ldo=1");
     document.getElementById("sat_poribs_val").value = parseInt(s) + 1;
    
});

</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/39.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>PORK CHOPS (BONELESS)</h5>
                <p style="color:red;">₹ 320 / 500 g</p>
                 <button id="sat_pochops_minus" class="btn btn-default btn-sm" >-</button>

                <?php $sat = $data[6]['Pork_chops_bl']; echo '<textarea readonly id="sat_pochops_val" type="input" value = "'.$sat.'size="5px">'.$sat.'</textarea>'; ?>

                <button id="sat_pochops_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>
document.getElementById("sat_pochops_minus").addEventListener("click", function(){
     s = document.getElementById("sat_pochops_val").value;
     if(parseInt(s) == 0) return;
      $("#lab").load("js_change.php?value="+s+"&day=6&item=Pork_chops_bl&ldo=2");
     document.getElementById("sat_pochops_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sat_pochops_plus").addEventListener("click", function(){
     s = document.getElementById("sat_pochops_val").value;
     if(parseInt(s) == 10) return;
      $("#lab").load("js_change.php?value="+s+"&day=6&item=Pork_chops_bl&ldo=1");
     document.getElementById("sat_pochops_val").value = parseInt(s) + 1;
    
});

</script>

                <img src="img/portfolio/40.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>PORK CHOPS (BONE)</h5>
                <p style="color:red;">₹ 290 / 500 g</p>
                 <button id="sat_pochopsb_minus" class="btn btn-default btn-sm" >-</button>

                <?php $sat = $data[6]['Pork_chops_bn']; echo '<textarea readonly id="sat_pochopsb_val" type="input" value = "'.$sat.'size="5px">'.$sat.'</textarea>'; ?>

                <button id="sat_pochopsb_plus" class="btn btn-default btn-sm" >+</button>

<script>
document.getElementById("sat_pochopsb_minus").addEventListener("click", function(){
     s = document.getElementById("sat_pochopsb_val").value;
     if(parseInt(s) == 0) return;
      $("#lab").load("js_change.php?value="+s+"&day=6&item=Pork_chops_bn&ldo=2");
     document.getElementById("sat_pochopsb_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sat_pochopsb_plus").addEventListener("click", function(){
     s = document.getElementById("sat_pochopsb_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=6&item=Pork_chops_bn&ldo=1");
     document.getElementById("sat_pochopsb_val").value = parseInt(s) + 1;
    
});

</script>
  </section>






















  <section id="content7">
    <br>
  <hr>
    
            <div class="col-md-3 product-model-sec">
            <img src="img/portfolio/41.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>BASMATI RICE</h5>
                <p style="color:red;">₹ 77 / 500 g</p>
                <button id="sun_basmati_minus" class="btn btn-default btn-sm" >-</button>

                <?php $sun = $data[7]['Basmati']; echo '<textarea readonly id="sun_basmati_val" type="input" value = "'.$sun.'size="5px">'.$sun.'</textarea>'; ?>

                <button id="sun_basmati_plus" class="btn btn-default btn-sm" >+</button>
            </div>
<div id="lab"></div>
            <script>

document.getElementById("sun_basmati_minus").addEventListener("click", function(){
     s = document.getElementById("sun_basmati_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Basmati&ldo=2");
     document.getElementById("sun_basmati_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sun_basmati_plus").addEventListener("click", function(){
     s = document.getElementById("sun_basmati_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Basmati&ldo=1");
     document.getElementById("sun_basmati_val").value = parseInt(s) + 1;
});

 
</script>


<div class="col-md-3 product-model-sec">
                <img src="img/portfolio/42.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>BASKATI RICE</h5>
                <p style="color:red;">₹ 28 / 500 g</p>
                 <button id="sun_baskati_minus" class="btn btn-default btn-sm" >-</button>

                 <?php $sun = $data[7]['Baskati']; echo '<textarea readonly id="sun_baskati_val" type="input" value = "'.$sun.'size="5px">'.$sun.'</textarea>'; ?>
                 
                <button id="sun_baskati_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("sun_baskati_minus").addEventListener("click", function(){
     s = document.getElementById("sun_baskati_val").value;
     if(parseInt(s) == 0) return;
      $("#lab").load("js_change.php?value="+s+"&day=7&item=Baskati&ldo=2");
     document.getElementById("sun_baskati_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sun_baskati_plus").addEventListener("click", function(){
     s = document.getElementById("sun_baskati_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Baskati&ldo=1");
     document.getElementById("sun_baskati_val").value = parseInt(s) + 1;
    
});

 
</script>


<div class="col-md-3 product-model-sec">
                <img src="img/portfolio/43.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>MOONG DAL</h5>
                <p style="color:red;">₹ 56 / 500 g</p>
                <button id="sun_moong_minus" class="btn btn-default btn-sm" >-</button>

                <?php $sun = $data[7]['Moong']; echo '<textarea readonly id="sun_moong_val" type="input" value = "'.$sun.'size="5px">'.$sun.'</textarea>'; ?>
                
                <button id="sun_moong_plus" class="btn btn-default btn-sm" >+</button>
</div>


<script>

document.getElementById("sun_moong_minus").addEventListener("click", function(){
     s = document.getElementById("sun_moong_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Moong&ldo=2");
     document.getElementById("sun_moong_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sun_moong_plus").addEventListener("click", function(){
     s = document.getElementById("sun_moong_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Moong&ldo=1");
     document.getElementById("sun_moong_val").value = parseInt(s) + 1;
    
});

 
</script>





                <div class="col-md-3 product-model-sec">
                <img src="img/portfolio/44.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>MASOOR DAL</h5>
                <p style="color:red;">₹ 55 / 500 g</p>
                <button id="sun_masoor_minus" class="btn btn-default btn-sm" >-</button>

                <?php $sun = $data[7]['Masoor']; echo '<textarea readonly id="sun_masoor_val" type="input" value = "'.$sun.'size="5px">'.$sun.'</textarea>'; ?>

                <button id="sun_masoor_plus" class="btn btn-default btn-sm" >+</button>
</div>



<script>

document.getElementById("sun_masoor_minus").addEventListener("click", function(){
     s = document.getElementById("sun_masoor_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Masoor&ldo=2");
     document.getElementById("sun_masoor_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sun_masoor_plus").addEventListener("click", function(){
     s = document.getElementById("sun_masoor_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Masoor&ldo=1");
     document.getElementById("sun_masoor_val").value = parseInt(s) + 1;
    
});

 
</script>


</br>


                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/45.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CHANA DAL</h5>
                <p style="color:red;">₹ 45 / 500 g</p>
                 <button id="sun_chana_minus" class="btn btn-default btn-sm" >-</button>
                <?php $sun = $data[7]['Chana']; echo '<textarea readonly id="sun_chana_val" type="input" value = "'.$sun.'size="5px">'.$sun.'</textarea>'; ?>

                <button id="sun_chana_plus" class="btn btn-default btn-sm" >+</button>
</div>


<script>

document.getElementById("sun_chana_minus").addEventListener("click", function(){
     s = document.getElementById("sun_chana_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Chana&ldo=2");
     document.getElementById("sun_chana_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sun_chana_plus").addEventListener("click", function(){
     s = document.getElementById("sun_chana_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Chana&ldo=1");
     document.getElementById("sun_chana_val").value = parseInt(s) + 1;
    
});

 
</script>


                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/46.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>ARHAR DAL</h5>
                <p style="color:red;">₹ 87 / 500 g</p>
                 <button id="sun_arhar_minus" class="btn btn-default btn-sm" >-</button>

                <?php $sun = $data[7]['Arhar']; echo '<textarea readonly id="sun_arhar_val" type="input" value = "'.$sun.'size="5px">'.$sun.'</textarea>'; ?>

                <button id="sun_arhar_plus" class="btn btn-default btn-sm" >+</button>
</div>


<script>

document.getElementById("sun_arhar_minus").addEventListener("click", function(){
     s = document.getElementById("sun_arhar_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Arhar&ldo=2");
     document.getElementById("sun_arhar_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sun_arhar_plus").addEventListener("click", function(){
     s = document.getElementById("sun_arhar_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Arhar&ldo=1");
     document.getElementById("sun_arhar_val").value = parseInt(s) + 1;
    
});

 
</script>



                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/47.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>POTATO</h5>
                <p style="color:red;">₹ 25 / 1 Kg</p>
                 <button id="sun_potato_minus" class="btn btn-default btn-sm" >-</button>
                    <?php $sun = $data[7]['Potato']; echo '<textarea readonly id="sun_potato_val" type="input" value = "'.$sun.'size="5px">'.$sun.'</textarea>'; ?>

                <button id="sun_potato_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("sun_potato_minus").addEventListener("click", function(){
     s = document.getElementById("sun_potato_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Potato&ldo=2");
     document.getElementById("sun_poatato_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sun_potato_plus").addEventListener("click", function(){
     s = document.getElementById("sun_potato_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Potato&ldo=1");
     document.getElementById("sun_potato_val").value = parseInt(s) + 1;
    
});

 
</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/48.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>ONION</h5>
                <p style="color:red;">₹ 135 / 500 g</p>
                <button id="sun_onion_minus" class="btn btn-default btn-sm" >-</button>

                <?php $sun = $data[7]['Onion']; echo '<textarea readonly id="sun_onion_val" type="input" value = "'.$sun.'size="5px">'.$sun.'</textarea>'; ?>

                <button id="sun_onion_plus" class="btn btn-default btn-sm" >+</button>
</div>


<script>

document.getElementById("sun_onion_minus").addEventListener("click", function(){
     s = document.getElementById("sun_onion_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Onion&ldo=2");
     document.getElementById("sun_onion_val").value = parseInt(s) - 1;
     
    
});
document.getElementById("sun_onion_plus").addEventListener("click", function(){
     s = document.getElementById("sun_onion_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Onion&ldo=1");
     document.getElementById("sun_onion_val").value = parseInt(s) + 1;
    
});

 
</script>


<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/49.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>TOMATO</h5>
                <p style="color:red;">₹ 135 / 500 g</p>
               <button id="sun_tomato_minus" class="btn btn-default btn-sm" >-</button>

                <?php $sun = $data[7]['Tomato']; echo '<textarea readonly id="sun_tomato_val" type="input" value = "'.$sun.'size="5px">'.$sun.'</textarea>'; ?>

                <button id="sun_tomato_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("sun_tomato_minus").addEventListener("click", function(){
     s = document.getElementById("sun_tomato_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Tomato&ldo=2");
     document.getElementById("sun_tomato_val").value = parseInt(s) - 1;
         
});

document.getElementById("sun_tomato_plus").addEventListener("click", function(){
     s = document.getElementById("sun_tomato_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Tomato&ldo=1");
     document.getElementById("sun_tomato_val").value = parseInt(s) + 1;
     
});

 
</script>



<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/50.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>GINGER</h5>
                <p style="color:red;">₹ 135 / 500 g</p>
                 <button id="sun_ginger_minus" class="btn btn-default btn-sm" >-</button>

                <?php $sun = $data[7]['Ginger']; echo '<textarea readonly id="sun_ginger_val" type="input" value = "'.$sun.'size="5px">'.$sun.'</textarea>'; ?>
                
                <button id="sun_ginger_plus" class="btn btn-default btn-sm" >+</button>
            
</div>



<script>

document.getElementById("sun_ginger_minus").addEventListener("click", function(){
     s = document.getElementById("sun_ginger_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Ginger&ldo=2");
     document.getElementById("sun_ginger_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sun_ginger_plus").addEventListener("click", function(){
     s = document.getElementById("sun_ginger_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Ginger&ldo=1");
     document.getElementById("sun_ginger_val").value = parseInt(s) + 1;
    
});

 
</script>


<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/51.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>GARLIC</h5>
                <p style="color:red;">₹ 135 / 500 g</p>
                <button id="sun_garlic_minus" class="btn btn-default btn-sm" >-</button>

                <?php $sun = $data[7]['Garlic']; echo '<textarea readonly id="sun_garlic_val" type="input" value = "'.$sun.'size="5px">'.$sun.'</textarea>'; ?>
               

                <button id="sun_garlic_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("sun_garlic_minus").addEventListener("click", function(){
     s = document.getElementById("sun_garlic_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Garlic&ldo=2");
     document.getElementById("sun_garlic_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sun_garlic_plus").addEventListener("click", function(){
     s = document.getElementById("sun_garlic_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Garlic&ldo=1");
     document.getElementById("sun_garlic_val").value = parseInt(s) + 1;
    
});

 
</script>



<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/52.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CHILLI</h5>
                <p style="color:red;">₹ 135 / 500 g</p>
                    <button id="sun_chilli_minus" class="btn btn-default btn-sm" >-</button>

                <?php $sun = $data[7]['Chilli']; echo '<textarea readonly id="sun_chilli_val" type="input" value = "'.$sun.'size="5px">'.$sun.'</textarea>'; ?>

                <button id="sun_chilli_plus" class="btn btn-default btn-sm" >+</button>
</div>


<script>

document.getElementById("sun_chilli_minus").addEventListener("click", function(){
     s = document.getElementById("sun_chilli_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Chilli&ldo=2");
     document.getElementById("sun_chilli_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sun_chilli_plus").addEventListener("click", function(){
     s = document.getElementById("sun_chilli_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Chilli&ldo=1");
     document.getElementById("sun_chilli_val").value = parseInt(s) + 1;
    
});

 
</script>


<div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/01.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CHICKEN DRUMSTICKS</h5>
                <p style="color:red;">₹ 135 / 500 g</p>
                  <button id="sun_drum_minus" class="btn btn-default btn-sm" >-</button>

                <?php $sun = $data[7]['Chick_drums']; echo '<textarea readonly id="sun_drum_val" type="input" value = "'.$sun.'size="5px">'.$sun.'</textarea>'; ?>

                <button id="sun_drum_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("sun_drum_minus").addEventListener("click", function(){
     s = document.getElementById("sun_drum_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Chick_drums&ldo=2");
     document.getElementById("sun_drum_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sun_drum_plus").addEventListener("click", function(){
     s = document.getElementById("sun_drum_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Chick_drums&ldo=1");
     document.getElementById("sun_drum_val").value = parseInt(s) + 1;
    
});

 
</script>

                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/02.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CHICKEN BONELESS</h5>
                <p style="color:red;">₹ 160 / 500 g</p>
                  <button id="sun_chbonls_minus" class="btn btn-default btn-sm" >-</button>
            <?php $sun = $data[7]['Chick_boneless']; echo '<textarea readonly id="sun_chbonls_val" type="input" value = "'.$sun.'size="5px">'.$sun.'</textarea>'; ?>

                <button id="sun_chbonls_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("sun_chbonls_minus").addEventListener("click", function(){
     s = document.getElementById("sun_chbonls_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Chick_boneless&ldo=2");
     document.getElementById("sun_chbonls_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sun_chbonls_plus").addEventListener("click", function(){
     s = document.getElementById("sun_chbonls_val").value;
     if(parseInt(s) == 10) return;
      $("#lab").load("js_change.php?value="+s+"&day=7&item=Chick_boneless&ldo=1");
     document.getElementById("sun_chbonls_val").value = parseInt(s) + 1;
    
});

 
</script>



                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/03.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CHICKEN KEEMA</h5>
                <p style="color:red;">₹165 / 500 g</p>
                <button id="sun_chkee_minus" class="btn btn-default btn-sm" >-</button>

                <?php $sun = $data[7]['Chick_keema']; echo '<textarea readonly id="sun_chkee_val" type="input" value = "'.$sun.'size="5px">'.$sun.'</textarea>'; ?>

                <button id="sun_chkee_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("sun_chkee_minus").addEventListener("click", function(){
     s = document.getElementById("sun_chkee_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Chick_keema&ldo=2");
     document.getElementById("sun_chkee_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sun_chkee_plus").addEventListener("click", function(){
     s = document.getElementById("sun_chkee_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Chick_keema&ldo=1");
     document.getElementById("sun_chkee_val").value = parseInt(s) + 1;
    
});

 
</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/04.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>WHOLE SKINLESS CHICKEN</h5>
                <p style="color:red;">₹ 190 ~ 1 Kg</p>
                 <button id="sun_chwh_minus" class="btn btn-default btn-sm" >-</button>

                <?php $sun = $data[7]['Chick_whole_skinless']; echo '<textarea readonly id="sun_chwh_val" type="input" value = "'.$sun.'size="5px">'.$sun.'</textarea>'; ?>

                <button id="sun_chwh_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("sun_chwh_minus").addEventListener("click", function(){
     s = document.getElementById("sun_chwh_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Chick_whole_skinless&ldo=2");
     document.getElementById("sun_chwh_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sun_chwh_plus").addEventListener("click", function(){
     s = document.getElementById("sun_chwh_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Chick_whole_skinless&ldo=1");
     document.getElementById("sun_chwh_val").value = parseInt(s) + 1;
    
});

 
</script>






<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/06.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CHICKEN BREAST</h5>
                <p style="color:red;">₹ 160 / 500 g</p>
                 <button id="sun_chbr_minus" class="btn btn-default btn-sm" >-</button>

               <?php $sun = $data[7]['Chick_breast']; echo '<textarea readonly id="sun_chbr_val" type="input" value = "'.$sun.'size="5px">'.$sun.'</textarea>'; ?>

                <button id="sun_chbr_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("sun_chbr_minus").addEventListener("click", function(){
     s = document.getElementById("sun_chbr_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Chick_breast&ldo=2");
     document.getElementById("sun_chbr_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sun_chbr_plus").addEventListener("click", function(){
     s = document.getElementById("sun_chbr_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Chick_breast&ldo=1");
     document.getElementById("sun_chbr_val").value = parseInt(s) + 1;
    
});

 
</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/07.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CHICKEN CUT</h5>
                <p style="color:red;">₹ 105 / 500 g</p>
                  <button id="sun_chc_minus" class="btn btn-default btn-sm" >-</button>

                <?php $sun = $data[7]['Chick_cut']; echo '<textarea readonly id="sun_chc_val" type="input" value = "'.$sun.'size="5px">'.$sun.'</textarea>'; ?>

                <button id="sun_chc_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("sun_chc_minus").addEventListener("click", function(){
     s = document.getElementById("sun_chc_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Chick_cut&ldo=2");
     document.getElementById("sun_chc_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sun_chc_plus").addEventListener("click", function(){
     s = document.getElementById("sun_chc_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Chick_cut&ldo=1");
     document.getElementById("sun_chc_val").value = parseInt(s) + 1;
    
});

 
</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/08.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>WHOLE SKIN CHICKEN</h5>
                <p style="color:red;">₹ 190 ~ 1 Kg</p>
                  <button id="sun_chwhsk_minus" class="btn btn-default btn-sm" >-</button>

                <?php $sun = $data[7]['Chick_whole_skin']; echo '<textarea readonly id="sun_chwhsk_val" type="input" value = "'.$sun.'" size="5px">'.$sun.'</textarea>'; ?>

                <button id="sun_chwhsk_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("sun_chwhsk_minus").addEventListener("click", function(){
     s = document.getElementById("sun_chwhsk_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Chick_whole_skin&ldo=2");
     document.getElementById("sun_chwhsk_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sun_chwhsk_plus").addEventListener("click", function(){
     s = document.getElementById("sun_chwhsk_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Chick_whole_skin&ldo=1");
     document.getElementById("sun_chwhsk_val").value = parseInt(s) + 1;
    
});

</script>



<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/26.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CHICKEN 8 Pc CUT</h5>
                <p style="color:red;">₹ 190 ~ 1 Kg</p>
 <button id="sun_ch8pc_minus" class="btn btn-default btn-sm" >-</button>

                 <?php $sun = $data[7]['Chick_8pc_cut']; echo '<textarea readonly id="sun_ch8pc_val" type="input" value = "'.$sun.'size="5px">'.$sun.'</textarea>'; ?>

                <button id="sun_ch8pc_plus" class="btn btn-default btn-sm" >+</button>               
</div>

<script>

document.getElementById("sun_ch8pc_minus").addEventListener("click", function(){
     s = document.getElementById("sun_ch8pc_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Chick_8pc_cut&ldo=2");
     document.getElementById("sun_ch8pc_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sun_ch8pc_plus").addEventListener("click", function(){
     s = document.getElementById("sun_ch8pc_val").value;
     if(parseInt(s) == 10) return;
      $("#lab").load("js_change.php?value="+s+"&day=7&item=Chick_8pc_cut&ldo=1");
     document.getElementById("sun_ch8pc_val").value = parseInt(s) + 1;
    
});

 
</script>





<div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/09.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>MUTTON CHOPS (BONE)</h5>
                <p style="color:red;">₹ 270 / 500 g</p>
                <button id="sun_muttchbn_minus" class="btn btn-default btn-sm" >-</button>

                <?php $sun = $data[7]['Mutt_chop_bone']; echo '<textarea readonly id="sun_muttchbn_val" type="input" value = "'.$sun.'size="5px">'.$sun.'</textarea>'; ?>

                <button id="sun_muttchbn_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("sun_muttchbn_minus").addEventListener("click", function(){
     s = document.getElementById("sun_muttchbn_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Mutt_chop_bone&ldo=2");
     document.getElementById("sun_muttchbn_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sun_muttchbn_plus").addEventListener("click", function(){
     s = document.getElementById("sun_muttchbn_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Mutt_chop_bone&ldo=1");
     document.getElementById("sun_muttchbn_val").value = parseInt(s) + 1;
    
});

 
</script>


                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/10.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>MUTTON CHOPS (B/L)</h5>
                <p style="color:red;">₹ 335 / 500 g</p>
                 <button id="sun_muttch_minus" class="btn btn-default btn-sm" >-</button>

                <?php $sun = $data[7]['Mutt_chop_bl']; echo '<textarea readonly id="sun_muttch_val" type="input" value = "'.$sun.'size="5px">'.$sun.'</textarea>'; ?>

                <button id="sun_muttch_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("sun_muttch_minus").addEventListener("click", function(){
     s = document.getElementById("sun_muttch_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Mutt_chop_bl&ldo=2");
     document.getElementById("sun_muttch_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sun_muttch_plus").addEventListener("click", function(){
     s = document.getElementById("sun_muttch_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Mutt_chop_bl&ldo=1");
     document.getElementById("sun_muttch_val").value = parseInt(s) + 1;
    
});

 
</script>




                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/11.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>MUTTON KEEMA</h5>
                <p style="color:red;">₹ 335 / 1 Kg</p>
               <button id="sun_muttkee_minus" class="btn btn-default btn-sm" >-</button>

                <?php $sun = $data[7]['Mutt_keema']; echo '<textarea readonly id="sun_muttkee_val" type="input" value = "'.$sun.'size="5px">'.$sun.'</textarea>'; ?>

                <button id="sun_muttkee_plus" class="btn btn-default btn-sm" >+</button>
</div>


<script>

document.getElementById("sun_muttkee_minus").addEventListener("click", function(){
     s = document.getElementById("sun_muttkee_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Mutt_keema&ldo=2");
     document.getElementById("sun_muttkee_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sun_muttkee_plus").addEventListener("click", function(){
     s = document.getElementById("sun_muttkee_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Mutt_keema&ldo=1");
     document.getElementById("sun_muttkee_val").value = parseInt(s) + 1;
    
});

 
</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/12.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>ROHU </h5>
                <p style="color:red;">₹ 110 / 500 g</p>
                <button id="sun_rohu_minus" class="btn btn-default btn-sm" >-</button>

                <?php $sun = $data[7]['Rohu']; echo '<textarea readonly id="sun_rohu_val" type="input" value = "'.$sun.'size="5px">'.$sun.'</textarea>'; ?>

                <button id="sun_rohu_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("sun_rohu_minus").addEventListener("click", function(){
     s = document.getElementById("sun_rohu_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Rohu&ldo=2");
     document.getElementById("sun_rohu_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sun_rohu_plus").addEventListener("click", function(){
     s = document.getElementById("sun_rohu_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Rohu&ldo=1");
     document.getElementById("sun_rohu_val").value = parseInt(s) + 1;
    
});

 
</script>



<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/13.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>CATLA </h5>
                <p style="color:red;">₹ 110 / 500 g</p>
                <button id="sun_catla_minus" class="btn btn-default btn-sm" >-</button>

                <?php $sun = $data[7]['Catla']; echo '<textarea readonly id="sun_catla_val" type="input" value = "'.$sun.'size="5px">'.$sun.'</textarea>'; ?>

                <button id="sun_catla_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("sun_catla_minus").addEventListener("click", function(){
     s = document.getElementById("sun_catla_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Catla&ldo=2");
     document.getElementById("sun_catla_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sun_catla_plus").addEventListener("click", function(){
     s = document.getElementById("sun_catla_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Catla&ldo=1");
     document.getElementById("sun_catla_val").value = parseInt(s) + 1;
    
});

 
</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/14.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>SALMON </h5>
                <p style="color:red;">₹ 580 / 500 g</p>
                <button id="sun_salmon_minus" class="btn btn-default btn-sm" >-</button>

                <?php $sun = $data[7]['Salmon']; echo '<textarea readonly id="sun_salmon_val" type="input" value = "'.$sun.'size="5px">'.$sun.'</textarea>'; ?>
                
                <button id="sun_salmon_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("sun_salmon_minus").addEventListener("click", function(){
     s = document.getElementById("sun_salmon_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Salmon&ldo=2");
     document.getElementById("sun_salmon_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sun_salmon_plus").addEventListener("click", function(){
     s = document.getElementById("sun_salmon_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Salmon&ldo=1");
     document.getElementById("sun_salmon_val").value = parseInt(s) + 1;
    
});

 
</script>



<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/15.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>PRAWNS </h5>
                <p style="color:red;">₹ 610 / 500 g</p>
                <button id="sun_prawn_minus" class="btn btn-default btn-sm" >-</button>

                <?php $sun = $data[7]['Prawns']; echo '<textarea readonly id="sun_prawn_val" type="input" value = "'.$sun.'size="5px">'.$sun.'</textarea>'; ?>

                <button id="sun_prawn_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("sun_prawn_minus").addEventListener("click", function(){
     s = document.getElementById("sun_prawn_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Prawns&ldo=2");
     document.getElementById("sun_prawn_val").value = parseInt(s) - 1;
         
});

document.getElementById("sun_prawn_plus").addEventListener("click", function(){
     s = document.getElementById("sun_prawn_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Prawns&ldo=1");
     document.getElementById("sun_prawn_val").value = parseInt(s) + 1;
    
});

 
</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/16.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>WHITE POMPHRET FISH</h5>
                <p style="color:red;">₹ 785 / 500 g</p>
                <button id="sun_pomphret_minus" class="btn btn-default btn-sm" >-</button>

                <?php $sun = $data[7]['Pomphret']; echo '<textarea readonly id="sun_pomphret_val" type="input" value = "'.$sun.'size="5px">'.$sun.'</textarea>'; ?>
                
                <button id="sun_pomphret_plus" class="btn btn-default btn-sm" >+</button>
</div>


<script>

document.getElementById("sun_pomphret_minus").addEventListener("click", function(){
     s = document.getElementById("sun_pomphret_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Pomphret&ldo=2");
     document.getElementById("sun_pomphret_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sun_pomphret_plus").addEventListener("click", function(){
     s = document.getElementById("sun_pomphret_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Pomphret&ldo=1");
     document.getElementById("sun_pomphret_val").value = parseInt(s) + 1;
    
});

</script>


<div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/31.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>PANEER</h5>
                <p style="color:red;">₹ 140 / 500 g</p>
                   <button id="sun_paneer_minus" class="btn btn-default btn-sm" >-</button>

                <?php $sun = $data[7]['Paneer']; echo '<textarea readonly id="sun_paneer_val" type="input" value = "'.$sun.'size="5px">'.$sun.'</textarea>'; ?>

                <button id="sun_paneer_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("sun_paneer_minus").addEventListener("click", function(){
     s = document.getElementById("sun_paneer_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Paneer&ldo=2");
     document.getElementById("sun_paneer_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sun_paneer_plus").addEventListener("click", function(){
     s = document.getElementById("sun_paneer_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Paneer&ldo=1");
     document.getElementById("sun_paneer_val").value = parseInt(s) + 1;
    
});

 
</script>




                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/32.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>FRESH CHEESE</h5>
                <p style="color:red;">₹ 57 / 200 g</p>
                 <button id="sun_cheese_minus" class="btn btn-default btn-sm" >-</button>

                <?php $sun = $data[7]['Cheese']; echo '<textarea readonly id="sun_cheese_val" type="input" value = "'.$sun.'size="5px">'.$sun.'</textarea>'; ?>

                <button id="sun_cheese_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("sun_cheese_minus").addEventListener("click", function(){
     s = document.getElementById("sun_cheese_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Cheese&ldo=2");
     document.getElementById("sun_cheese_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sun_cheese_plus").addEventListener("click", function(){
     s = document.getElementById("sun_cheese_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Cheese&ldo=1");
     document.getElementById("sun_cheese_val").value = parseInt(s) + 1;
    
});

 
</script>


                <div class="col-md-3 product-model-sec">
                  <br></br>
                <img src="img/portfolio/33.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>SINGLE TONED MILK</h5>
                <p style="color:red;">₹ 45 / 1 L</p>
                 <button id="sun_smilk_minus" class="btn btn-default btn-sm" >-</button>

                 <?php $sun = $data[7]['Stmilk']; echo '<textarea readonly id="sun_smilk_val" type="input" value = "'.$sun.'size="5px">'.$sun.'</textarea>'; ?>

                <button id="sun_smilk_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("sun_smilk_minus").addEventListener("click", function(){
     s = document.getElementById("sun_smilk_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Stmilk&ldo=2");
     document.getElementById("sun_smilk_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sun_smilk_plus").addEventListener("click", function(){
     s = document.getElementById("sun_smilk_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Stmilk&ldo=1");
     document.getElementById("sun_smilk_val").value = parseInt(s) + 1;
    
});

 
</script>



<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/34.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>DOUBLE TONED MILK</h5>
                <p style="color:red;">₹ 45 / 1 L</p>
                  <button id="sun_dmilk_minus" class="btn btn-default btn-sm" >-</button>

                 <?php $sun = $data[7]['Dtmilk']; echo '<textarea readonly id="sun_dmilk_val" type="input" value = "'.$sun.'size="5px">'.$sun.'</textarea>'; ?>

                <button id="sun_dmilk_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>

document.getElementById("sun_dmilk_minus").addEventListener("click", function(){
     s = document.getElementById("sun_dmilk_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Dtmilk&ldo=2");
     document.getElementById("sun_dmilk_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sun_dmilk_plus").addEventListener("click", function(){
     s = document.getElementById("sun_dmilk_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Dtmilk&ldo=1");
     document.getElementById("sun_dmilk_val").value = parseInt(s) + 1;
    
});

 
</script>



<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/36.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>SOUR CURD</h5>
                <p style="color:red;">₹ 50 / 500 g</p>
              <button id="sun_socurd_minus" class="btn btn-default btn-sm" >-</button>

                 <?php $sun = $data[7]['Sour_Curd']; echo '<textarea readonly id="sun_socurd_val" type="input" value = "'.$sun.'size="5px">'.$sun.'</textarea>'; ?>

                <button id="sun_socurd_plus" class="btn btn-default btn-sm" >+</button>
</div>
<script>
document.getElementById("sun_socurd_minus").addEventListener("click", function(){
     s = document.getElementById("sun_socurd_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Sour_Curd&ldo=2");
     document.getElementById("sun_socurd_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sun_socurd_plus").addEventListener("click", function(){
     s = document.getElementById("sun_socurd_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Sour_Curd&ldo=1");
     document.getElementById("sun_socurd_val").value = parseInt(s) + 1;
    
});

</script>



<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/37.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>SWEET CURD</h5>
                <p style="color:red;">₹ 80 / 500 g</p>
                <button id="sun_swcurd_minus" class="btn btn-default btn-sm" >-</button>

                 <?php $sun = $data[7]['Sweet_Curd']; echo '<textarea readonly id="sun_swcurd_val" type="input" value = "'.$sun.'size="5px">'.$sun.'</textarea>'; ?>

                <button id="sun_swcurd_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>
document.getElementById("sun_swcurd_minus").addEventListener("click", function(){
     s = document.getElementById("sun_swcurd_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Sweet_Curd&ldo=2");
     document.getElementById("sun_swcurd_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sun_swcurd_plus").addEventListener("click", function(){
     s = document.getElementById("sun_swcurd_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Sweet_Curd&ldo=1");
     document.getElementById("sun_swcurd_val").value = parseInt(s) + 1;
    
});

</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/38.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>PORK RIBS</h5>
                <p style="color:red;">₹ 350 / 500 g</p>
                <button id="sun_poribs_minus" class="btn btn-default btn-sm" >-</button>

                 <?php $sun = $data[7]['Pork_ribs']; echo '<textarea readonly id="sun_poribs_val" type="input" value = "'.$sun.'size="5px">'.$sun.'</textarea>'; ?>

                <button id="sun_poribs_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>
document.getElementById("sun_poribs_minus").addEventListener("click", function(){
     s = document.getElementById("sun_poribs_val").value;
     if(parseInt(s) == 0) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Pork_ribs&ldo=2");
     document.getElementById("sun_poribs_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sun_poribs_plus").addEventListener("click", function(){
     s = document.getElementById("sun_poribs_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Pork_ribs&ldo=1");
     document.getElementById("sun_poribs_val").value = parseInt(s) + 1;
    
});

</script>

<div class="col-md-3 product-model-sec">
  <br></br>
                <img src="img/portfolio/39.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>PORK CHOPS (BONELESS)</h5>
                <p style="color:red;">₹ 320 / 500 g</p>
                 <button id="sun_pochops_minus" class="btn btn-default btn-sm" >-</button>

                <?php $sun = $data[7]['Pork_chops_bl']; echo '<textarea readonly id="sun_pochops_val" type="input" value = "'.$sun.'size="5px">'.$sun.'</textarea>'; ?>

                <button id="sun_pochops_plus" class="btn btn-default btn-sm" >+</button>
</div>

<script>
document.getElementById("sun_pochops_minus").addEventListener("click", function(){
     s = document.getElementById("sun_pochops_val").value;
     if(parseInt(s) == 0) return;
      $("#lab").load("js_change.php?value="+s+"&day=7&item=Pork_chops_bl&ldo=2");
     document.getElementById("sun_pochops_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sun_pochops_plus").addEventListener("click", function(){
     s = document.getElementById("sun_pochops_val").value;
     if(parseInt(s) == 10) return;
      $("#lab").load("js_change.php?value="+s+"&day=7&item=Pork_chops_bl&ldo=1");
     document.getElementById("sun_pochops_val").value = parseInt(s) + 1;
    
});

</script>

                <img src="img/portfolio/40.jpg" height="100px" width="100px">
            <h5 style="color:black; font-family:verdana";>PORK CHOPS (BONE)</h5>
                <p style="color:red;">₹ 290 / 500 g</p>
                 <button id="sun_pochopsb_minus" class="btn btn-default btn-sm" >-</button>

                <?php $sun = $data[7]['Pork_chops_bn']; echo '<textarea readonly id="sun_pochopsb_val" type="input" value = "'.$sun.'size="5px">'.$sun.'</textarea>'; ?>

                <button id="sun_pochopsb_plus" class="btn btn-default btn-sm" >+</button>

<script>
document.getElementById("sun_pochopsb_minus").addEventListener("click", function(){
     s = document.getElementById("sun_pochopsb_val").value;
     if(parseInt(s) == 0) return;
      $("#lab").load("js_change.php?value="+s+"&day=7&item=Pork_chops_bn&ldo=2");
     document.getElementById("sun_pochopsb_val").value = parseInt(s) - 1;
     
    
});

document.getElementById("sun_pochopsb_plus").addEventListener("click", function(){
     s = document.getElementById("sun_pochopsb_val").value;
     if(parseInt(s) == 10) return;
     $("#lab").load("js_change.php?value="+s+"&day=7&item=Pork_chops_bn&ldo=1");
     document.getElementById("sun_pochopsb_val").value = parseInt(s) + 1;
    
});

</script>
  </section>
    
  
    
</main>
                 


        </div>
    </div>



<div align="center">
<button id="save" class="btn btn-default btn-sm" ><h5 style="color:orange;">Save and Proceed to Confirm&nbsp&nbsp&nbsp&nbsp >></h5></button></div>
<script>
document.getElementById("save").addEventListener("click", function(){
$newJsonString = json_encode($data);
file_put_contents('subs_json/json_test.json', $newJsonString);
</script>
<br></br>

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