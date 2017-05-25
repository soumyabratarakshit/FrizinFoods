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

$sql = "SELECT  userid,username,email,paswrd,verified FROM USERS";
$result = $conn->query($sql);
$flag = -1;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if($row["email"] == $_POST["email"])
            {
              if($row["paswrd"] == $_POST["paswrd"])
                {
                   if($row["verified"] == 1)
                   $flag = 1;
                   else
                   $flag = 0;
                   break;
                }
            }
    }
} else {
    echo "0 results";
}
$conn->close();
if ($flag == -1) {
//echo "";
} 
else if($flag == 0) {
//echo "";
}
else if($flag == 1) {
 $_SESSION["email"] = $_POST["email"];
 $url = "index.php";
 header('Location: '.$url);
} 
?>
