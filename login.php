<?php 
session_start();
if(count($_SESSION)) header("Location: home.php");
$error = isset($_GET['error']); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login page</title>
</head>
<style>
    #error {
        color: red;
    }
</style>

<body>
    <?php if ($error) { ?>
    <p id="error">Your email or password is wrong</p>
    <?php } ?>

    <h1>Login</h1>


    <form action="loginSubmit.php" method="post">
        <input type="email" name="email" placeholder="Type your email" required/>
        <input type="password" name="pass" placeholder="Type tour password" required/>
        <input type="submit" name="Login" />

    </form>
</body>

</html>