<?php
    session_start();

    if (isset($_SESSION['u_id'])){
        echo(include 'database-contact-include.php');
    }
    else {
        header("Location: login.php");
    }
?>