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
$cart = "";
if(isset ($_GET['email'])){
	$email = $_GET['email'];
	}
$sql = "SELECT cart FROM Cart where '".$email."' = email";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$cart = $row["cart"];
$cart_arr = explode("/",$cart);
$i = 0;
$tot_price=0;
for($i=0;$i<intval(strlen($cart)/7);$i++){
	$str=$cart_arr[$i];
	$arr=str_split($str,5);
	$p_id = $arr[0]*1;
	$q= $arr[1]*1;
	//echo $p_id."<br>";
	//echo $q."<br><br><br>";
        $sql = "SELECT  itemname,price FROM FOOD_ITEMS where ".$p_id." = orderid";
        $result = $conn->query($sql);	
        $row = $result->fetch_assoc();
        echo $row["itemname"]."   ----> ".$q." pack(s) <br>";
        $ind_price = $row["price"]*$q;
        echo "epp Rs. ".$row["price"]."   ---->subt::  Rs. ".$ind_price."<br><br><br>";
        $tot_price = $tot_price + $ind_price;
	}
echo "<br><br><br>TOTAL:: Rs. ".$tot_price;
$conn->close();
?>
