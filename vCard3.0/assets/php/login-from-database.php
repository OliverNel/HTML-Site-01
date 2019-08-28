<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "website";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$userlogin_username = $_POST['username'];
$userlogin_password = $_POST['password'];



$pdo = new PDO('mysql:host=localhost;dbname=website', 'root', '');
$sql = "SELECT 'Password' FROM users";
foreach ($pdo->query($sql) as $row) {
   $result = password_verify($userlogin_password, $row['Password']);
   echo $result;
}

if ($result == true) {
    header("Location: ../../login.html?login=$userlogin_username=success");
 }

else {
    header("Location: ../../login.html?login=$userlogin_username=faild");
}







// ini_set('SMTP','smtp.web.de');
// ini_set('smtp_port',587);

// $mail_form = 'o.neller@web.de';

// $email_subject = 'NEUE EMAIL VON LOCALHOST';

// $email_body = 'Sie haben einen neuen User in der Datenbank!';

// $to = "o.neller@web.de";

// mail($to, $email_subject, $email_body);

// header("Location: ../../login.html?registration=success");
?>