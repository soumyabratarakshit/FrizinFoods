<?php
require_once('../php/Mail.php');
$servername = "localhost";
$username = "a7c98f4b_akash";
$password = "root@123";
$dbname = "a7c98f4b_yippix";

$usrname = $_POST["username"];
$email = $_POST["email"];
$address = $_POST["address"];
$pin = $_POST["pin"];
$paswrd = $_POST["paswrd"];
$mobno = $_POST["mobno"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO USERS (username, email, address, pin, paswrd, mobno)
VALUES ('$usrname','$email','$address','$pin','$paswrd',$mobno)";

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "select userid from USERS where email = '".$email."'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$userid = $row["userid"];
$cart="";
$sql = "INSERT INTO Cart (userid,email,cart) values ($userid,'$email','$cart')";
if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

$recipients = $email;
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <FRIZIN>' . "\r\n";
$actual_link = "http://www.frizin.in/activate.php?email=".$email;

$mailmsg = "
<html>
<head>
<title>FRIZIN verification</title>
</head>
<body>
<p>This email contains frizin link!</p>
<p>Click this <a href = '".$actual_link."'>link</a> to activate your FRIZIN account.....and order eatables with 0% delivery charge...!! <br>Sounds fun.. huh</p>
<br>
</body>
</html>
";
/* SMTP server name, port, user/passwd */
$smtpinfo["host"] = "ssl://edu.cloudhostdns.net";
$smtpinfo["port"] = "465";
$smtpinfo["auth"] = true;
$smtpinfo["username"] = "hello@frizin.in";
$smtpinfo["password"] = "Akashdeep1995";
/* Create the mail object using the Mail::factory method */
$mail_object = Mail::factory("smtp", $smtpinfo);
/* Ok send mail */
$mail_object->send($recipients, $headers, $mailmsg);

 $url = "verify.php";
 header('Location: '.$url);
?>