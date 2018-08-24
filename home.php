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

<?php include "includes/footer.php"; ?>