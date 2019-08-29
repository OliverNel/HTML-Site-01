<?php
    session_start();


    if (isset($_SESSION['u_id'])){
        if ($_SESSION['u_perm'] == 2){
            include 'change-include.php';
        }
        else {
            echo '<script language="javascript">';
            echo 'alert("Du hast keine Berächtigung!")';
            echo '</script>';

            echo '<script type="text/javascript">';
            echo 'window.location = "/login-logout/"';
            echo '</script>';
        }
    }
    else {
        echo '<script language="javascript">';
        echo 'alert("Logge dich zuerst ein!")';
        echo '</script>';

        echo '<script type="text/javascript">';
        echo 'window.location = "/login-logout/login.php"';
        echo '</script>';
    }
?>