<?php
    // delete the session 
    session_start();
    unset($_SESSION['name']);
    unset($_SESSION['email']);
    unset($_SESSION['class']);
    session_destroy();
    // redirect to login
    header('Location: ../login.php');
?>