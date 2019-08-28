<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "website";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$userlogin_username = mysqli_real_escape_string($conn, $_POST['username']);
$userlogin_password = mysqli_real_escape_string($conn, $_POST['password']);


$sql = "SELECT Password FROM users WHERE Username='$userlogin_username'";
$result = mysqli_query($conn, $sql);
$checkresult = mysqli_num_rows($result);


if ($result == 1) {
    header("Location: ../../login.html?login=$userlogin_username=success");
    $login = 1;
}

else {
   header("Location: ../../login.html?login=$userlogin_username=faild");
   $login=0;
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