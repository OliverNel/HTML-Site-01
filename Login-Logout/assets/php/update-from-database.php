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

$user_username1 = $_SESSION['user_username1'];
$user_name = mysqli_real_escape_string($conn, $_POST['name']);
$user_email = mysqli_real_escape_string($conn, $_POST['email']);
$user_permissions = mysqli_real_escape_string($conn, $_POST['permissions']);
$user_username = mysqli_real_escape_string($conn, $_POST['username']);
$user_password = mysqli_real_escape_string($conn, $_POST['password']);

$password_hash = password_hash($user_password, PASSWORD_DEFAULT);

$sql = "SELECT * FROM users WHERE Username='$user_username1'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$u_name = $row['Name'];
$u_email = $row['EMail'];
$u_uname = $row['Username'];
$u_perm = $row['Permissions'];
$u_pass = $row['Password'];









if (isset($user_name)) {
    $sql1 = "UPDATE users SET `Name`='$user_name' WHERE `Name`='$u_name' AND Username='$user_username1';";
    $result1 = mysqli_query($conn, $sql1);
    header('Location: ../../change.php?Name=changed');
}
elseif (isset($user_email)) {
    $sql1 = "UPDATE users SET EMail='$user_email' WHERE EMail='$u_email' AND Username='$user_username1';";
    $result1 = mysqli_query($conn, $sql1);
    header('Location: ../../change.php?EMail=changed');
}
elseif (isset($user_username)) {
    $sql1 = "UPDATE users SET `Username`='$user_username' WHERE `Username`='$u_uname' AND Username='$user_username1';";
    $result1 = mysqli_query($conn, $sql1);
    header('Location: ../../change.php?Username=changed');
}
elseif (isset($user_password)) {
    $sql1 = "UPDATE users SET `Password`='$password_hash' WHERE `Password`='$u_pass' AND Username='$user_username1';";
    $result1 = mysqli_query($conn, $sql1);
    header('Location: ../../change.php?Password=changed');
}
elseif ($user_permissions == 'Benutzer') {
    $user_permissions = 1;
    $sql1 = "UPDATE users SET `Permissions`='$user_permissions' WHERE `Permissions`='$u_perm' AND Username='$user_username1';";
    $result1 = mysqli_query($conn, $sql1);
    header('Location: ../../change.php?Permissions=changed');
}
elseif ($user_permissions == 'Admin') {
    $user_permissions = 2;
    $sql1 = "UPDATE users SET `Permissions`='$user_permissions' WHERE `Permissions`='$u_perm' AND Username='$user_username1';";
    $result1 = mysqli_query($conn, $sql1);
    header('Location: ../../change.php?Permissions=changed');
}
?>