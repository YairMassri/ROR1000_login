<?php
 session_start();
 if( ! count($_SESSION)) header("Location: login.php");
 $name = $_SESSION['name'];
 $email = $_SESSION['email'];
 $class = $_SESSION['class'];
?>


<h1>Profile</h1>
<p>Your information :</p>
<ul>
    <li>Name: <?=$name?></li>
    <li>Email: <?=$email?></li>
    <li>Class: <?=$class?></li>
</ul>

<a href="home.php">Home</a>
<a href="logout.php">Logout</a>