<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "website";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$visitor_email = $_POST['email'];
$message = $_POST['text'];
$user_subject = $_POST['subject'];

$sql = "INSERT INTO contact (Vorname, Nachname, EMail, Betreff, Nachricht) VALUES ('$fname', '$lname', '$visitor_email', '$user_subject', '$message')";
mysqli_query($conn, $sql);










$mail_form = 'o.neller@web.de';

$email_subject = 'NEUE EMAIL VON LOCALHOST';

$email_body = 'Sie haben einen neuen Eintrag in der Datenbank!';

$to = "o.neller@web.de";

mail($to, $email_subject, $email_body);

header("Location: ../../index.html?send_message=success");
?>