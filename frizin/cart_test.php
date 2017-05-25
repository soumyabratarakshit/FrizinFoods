<?php
session_start();
if(isset($_COOKIE["user"]))
    $user = $_COOKIE["user"];
if($user == 0)
    {
    if(isset($_COOKIE["cart"]))
     {
     $guest_cart = $_COOKIE["cart"]; 
     //echo $_COOKIE["cart"]."<br>";
      if($guest_cart == "a")
      $guest_cart = "";
     }
    }
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
if(isset ($_SESSION['email']))
	{
	$email = $_SESSION['email'];
	}
$del = 0;
if(isset ($_GET['del']))
	{
	$del = $_GET['del'];
	}
//echo $del."<br>";
if($user == 1){
$sql = "select cart from Cart where email = '".$email."'" ;
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$cart=$row["cart"];
}
else
	$cart=$guest_cart;
//echo $cart;
if(isset ($_GET['product']))
	{
	$prod_id = $_GET['product'];
	}
//echo "<br>".$prod_id."<br>";
$pack = 0;
if(isset ($_GET['quantity']))
	{
	$pack = $_GET['quantity'];
	}
else if(isset ($_POST['quantity']))
	{
	$pack = $_POST['quantity'];
	}
//echo "<br>".$pack."<br>";
$prod_id = (string)$prod_id;
$pack    = (string)$pack;
if     (strlen($prod_id) == 1) $prod_id = "0000".$prod_id;
else if(strlen($prod_id) == 2) $prod_id = "000".$prod_id;
else if(strlen($prod_id) == 3) $prod_id = "00".$prod_id;
else if(strlen($prod_id) == 4) $prod_id = "0".$prod_id;
else if(strlen($prod_id) == 5) $prod_id = $prod_id;
else $prod_id = "";  

if     (strlen($pack) == 1) $pack = "0".$pack;
else if(strlen($pack) == 2) $pack = $pack;
else $pack = "";



$add_cart = $prod_id.$pack;
//echo "<br>".$add_cart."<br>";
if($del == 1){
	if(strlen($cart) <= 7) $cart = "";
	else {
            if(strpos($cart,$add_cart)>= strlen($cart)-12)
            {$cart = str_replace(("/".$add_cart),"",$cart);
             }
              else $cart=str_replace(($add_cart."/"),"",$cart);
        } 
             
}
else{
	if($cart == "") $cart = $add_cart."";
	else $cart = $cart."/".$add_cart;
}
if($user == 1){
$sql = "UPDATE Cart SET cart = '".$cart."' WHERE email = '".$email."'";

if ($conn->query($sql) === TRUE) {
    //echo "<br>Record updated successfully<br>";
} else {
    //echo "Error updating record: " . $conn->error;
       }
             }
else
{
if(isset($_COOKIE["cart"])){
    setcookie("cart","a",time()-3600);
    setcookie("cart",$cart,time()+(86400));}
}
$conn->close();
//echo "<br>".$cart;
//echo "<br>".$prod_id."<br>"; 
//echo "hju<br>";
//echo $_COOKIE["cart"];
$url = "cart.php";
header('Location: '.$url);
?>
