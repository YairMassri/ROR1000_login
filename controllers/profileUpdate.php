<?php

    // get values from the url
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $class = $_POST['class'];

    // validate user values
    if( ! filter_var($email, FILTER_VALIDATE_EMAIL)) die('Invalid email');
    
    // change the sesion data
    session_start();
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['class'] = $class;

    // save the changes in a file
    $session = serialize($_SESSION);
    file_put_contents('../data.db', $session);

    // redirect to the view
    header("Location: ../profile.php");
?>