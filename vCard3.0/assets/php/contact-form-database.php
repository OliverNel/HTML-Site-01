<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "website";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$visitor_email = mysqli_real_escape_string($conn, $_POST['email']);
$message = mysqli_real_escape_string($conn, $_POST['text']);
$user_subject = mysqli_real_escape_string($conn, $_POST['subject']);

$sql = "INSERT INTO contact (Vorname, Nachname, EMail, Betreff, Nachricht) VALUES ('$fname', '$lname', '$visitor_email', '$user_subject', '$message')";
mysqli_query($conn, $sql);







ini_set('SMTP','smtp.web.de');
ini_set('smtp_port',587);

$mail_form = 'o.neller@web.de';

$email_subject = 'NEUE EMAIL VON LOCALHOST';

$email_body = 'Sie haben einen neuen Eintrag in der Datenbank!';

$to = "o.neller@web.de";

mail($to, $email_subject, $email_body);

header("Location: ../../index.html?send_message=success");
?>