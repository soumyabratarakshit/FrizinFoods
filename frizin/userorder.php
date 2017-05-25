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
$sql = "select * from USERS where email = '".$_SESSION['email']."'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$usrid = $row["userid"];
$address =$row["address"];
$name = $row["username"];
$pin =$row['pin'];
$mobno = $row['mobno'];
$sql = "select * from Cart where email = '".$_SESSION['email']."'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$order = $row["cart"];
$pay = $_SESSION["pay"];
$email = $_SESSION['email'];

$sql = "insert into user_order(userid,email,orders,pay,address) values ('$usrid','".$_SESSION['email']."','$order','$pay','$address')";
$result = $conn->query($sql);
$url = "useror.php";
 header('Location: '.$url);
?>

