<?php
// $content = file_get_contents('data.db');

// $content = file_get_contents('http://google.com');

// echo $content;

// print_r($content);

// file_put_contents('data.db', 'hello user');



// exit;

 session_start();
 if( ! count($_SESSION)) header("Location: login.php");
 $name = $_SESSION['name'];
 $email = $_SESSION['email'];
 $class = $_SESSION['class'];
?>

<?php include "includes/header.php"; ?>

<h1>Home</h1>
<p>Hello <?=$name?>, your current class is <?=$class?></p>

<p>Please read below and do it!!!</p>

<h2>Midterm</h2>

<p>Authentication is important.

Let’s make an app having three main files: a.php, b.php and login.php. You will actually need few more files, but these are ones displaying data (interface).

Make A and B having some lorem ipsum data, we don’t care, as well as the name of the person who is currently logged in and a link to close your session. The login page should have a form that ask for email and password.

If you access to a.php or b.php without starting your session first, you should be redirected to login.php. We don’t want anonymous people searching on this app.

The login page should be able to authenticate your user by checking if the user/pass combination is correct. Store the login info in a file, but do not save passwords in plain text; that will make your project to be completely disqualified.

Also, make it possible for users to create a new user/pass combination, and to logout after you finished working. When you access to both A and B, they should display the email of the person which session is currently open.
</P>

<?php include "includes/footer.php"; ?>