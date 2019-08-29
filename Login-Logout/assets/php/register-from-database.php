<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "website";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$user_name = mysqli_real_escape_string($conn, $_POST['name']);
$user_email = mysqli_real_escape_string($conn, $_POST['email']);
$user_username = mysqli_real_escape_string($conn, $_POST['username']);
$user_password = mysqli_real_escape_string($conn, $_POST['password']);

$password_hash = password_hash($user_password, PASSWORD_DEFAULT);

$sql1 = "SELECT Username FROM users WHERE Username='$user_username'";
$result1 = mysqli_query($conn, $sql1);
$checkresult1 = mysqli_num_rows($result1);

$sql2 = "SELECT EMail FROM users WHERE EMail='$user_email'";
$result2 = mysqli_query($conn, $sql2);
$checkresult2 = mysqli_num_rows($result2);



if ($checkresult1 != 0) {
    echo '<script language="javascript">';
    echo 'alert("Der Username wird bereits verwendet!")';
    echo '</script>';

    echo '<script type="text/javascript">';
    echo 'window.location = "../../login.php?registration=faild=username_already_exist"';
    echo '</script>';
}
elseif ($checkresult2 != 0) {
    echo '<script language="javascript">';
    echo 'alert("Die E-Mail adresse wird bereits verwendet!")';
    echo '</script>';

    echo '<script type="text/javascript">';
    echo 'window.location = "../../login.php?registration=faild=email_already_exist"';
    echo '</script>';
    
}
elseif ($checkresult1 == 0 || $checkresult2 == 0) {
    $sql3 = "INSERT INTO users (Name, EMail, Username, Password) VALUES ('$user_name', '$user_email', '$user_username', '$password_hash')";
    mysqli_query($conn, $sql3);

    
    $mail_form = 'o.neller@web.de';
    $email_subject = 'NEUE EMAIL VON LOCALHOST';
    $email_body = 'Sie haben einen neuen User in der Datenbank!';
    $to = "o.neller@web.de";

    mail($to, $email_subject, $email_body);

    echo '<script language="javascript">';
    echo 'alert("Die Registrierung war erfolgreich!")';
    echo '</script>';

    echo '<script type="text/javascript">';
    echo 'window.location = "../../login.php?registration=sucess"';
    echo '</script>';
}
?>