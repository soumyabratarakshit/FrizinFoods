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
if(isset($_GET['email'])){
$email = $_GET['email'];
}
$sql = "UPDATE USERS SET verified = true WHERE email = '".$email."'";

if ($conn->query($sql) === TRUE) {
    //echo "Record updated successfully";
} else {
    //echo "Error updating record: " . $conn->error;
}
$conn->close();
$_SESSION["email"] = $_GET["email"];
$url = "index.php";
header('Location: '.$url);
?>
} 

