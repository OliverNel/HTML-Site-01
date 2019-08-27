<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "website";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$name = $_POST['name'];;
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO users (Name, EMail, Username, Password) VALUES ('$name', '$email', '$username', '$password')";
mysqli_query($conn, $sql);


$mail_form = 'o.neller@web.de';

$email_subject = 'NEUE EMAIL VON LOCALHOST';

$email_body = 'Sie haben einen neuen User in der Datenbank!';

$to = "o.neller@web.de";

mail($to, $email_subject, $email_body);

header("Location: ../../login.html?registartion=success");

?>