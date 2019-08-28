<?php 
    if(isset($_POST['submit'])) {
        session_unset();
        session_destroy();
        header("Location: ../../index.php?you-are-log-out");
    }
?>