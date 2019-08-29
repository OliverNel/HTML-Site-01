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

$userlogin_username = mysqli_real_escape_string($conn, $_POST['username']);
$userlogin_password = mysqli_real_escape_string($conn, $_POST['password']);


$sql = "SELECT * FROM users WHERE Username='$userlogin_username' or EMail='$userlogin_username'";
$result = mysqli_query($conn, $sql);
$checkresult = mysqli_num_rows($result);



if ($row = mysqli_fetch_assoc($result)) {
    $verifyresult = password_verify($userlogin_password, $row['Password']);
    if ($verifyresult == true) {
        $_SESSION['u_id'] = $row['id'];
        $_SESSION['u_name'] = $row['Name'];
        $_SESSION['u_email'] = $row['EMail'];
        $_SESSION['u_uname'] = $row['Username'];
        $_SESSION['u_perm'] = $row['Permissions'];
        header("Location: ../../login.php?login=$userlogin_username=success");
    }

    elseif ($verifyresult == false) {
        header("Location: ../../login.php?login=$userlogin_username=faild");
        exit();
    }
}
else {
    header("Location: ../../login.php?login=$userlogin_username=faild");
    exit();
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