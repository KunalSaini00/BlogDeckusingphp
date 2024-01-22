<?php 

    session_start();
    session_unset();
    session_destroy();
    header("location: http://localhost/Blog-Deck/admin-panel/admins/login-admins.php");


?>