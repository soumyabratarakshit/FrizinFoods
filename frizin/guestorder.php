<?php 
session_start();
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
$name = $_POST["name"];
$email = $_POST["email"];
$address = $_POST["address"];
$city = $_POST["city"];
$pin = $_POST["pin"];
$mobno = $_POST["mobno"];
$order = $_COOKIE["cart"];
$pay = $_SESSION["pay"];
$sql = "insert into guest_order(name,email,address,city,pin,mobno,orders,pay) values ('$name','$email','$address','$city','$pin','$mobno','$order','$pay')";
$result = $conn->query($sql);
$url = "guestor.php?name=$name&email=$email&address=$address&city=$city&pin=$pin&mobno=$mobno";
 header('Location: '.$url);
?>

