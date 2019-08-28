<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "website";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$user_name = $_POST['name'];
$user_email = $_POST['email'];
$user_username = $_POST['username'];
$user_password = $_POST['password'];

$password_hash = password_hash($user_password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (Name, EMail, Username, Password) VALUES ('$user_name', '$user_email', '$user_username', '$password_hash')";
mysqli_query($conn, $sql);










$mail_form = 'o.neller@web.de';

$email_subject = 'NEUE EMAIL VON LOCALHOST';

$email_body = 'Sie haben einen neuen User in der Datenbank!';

$to = "o.neller@web.de";

mail($to, $email_subject, $email_body);

header("Location: ../../login.html?registration=success");
?>