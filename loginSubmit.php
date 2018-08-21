<?php
// get values from the url
$email = $_POST['email'];
$pass = $_POST['pass'];

// validate user values
if( ! filter_var($email, FILTER_VALIDATE_EMAIL)) die('Invalid email');

// check if email/pass are valid
if($email == 'yair.masri@gmail.com' && $pass == '123456') {
    // pull user infor from DB
    $name = 'Yair';
    $class = 'ROR1000';

    //start the session
    session_start();
    $_SESSION['name'] = 'Yair';
    $_SESSION['email'] = $email;
    $_SESSION['class'] = $class;

    // send to home
    header("Location: home.php?email=$email") ;
} else {
    // send back with error
    header('Location: login.php?error=1') ;
    // print_r($_GET);
}
?>