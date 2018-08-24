<?php
 session_start();
 if( ! count($_SESSION)) header("Location: login.php");
 $name = $_SESSION['name'];
 $email = $_SESSION['email'];
 $class = $_SESSION['class'];
?>

<?php include "includes/header.php"; ?>


<h1>Profile</h1>
<p>Your information :</p>
<ul>
    <li>Name: <?=$name?></li>
    <li>Email: <?=$email?></li>
    <li>Class: <?=$class?></li>
</ul>

<h2>Update your profile</h2>

<form action="controllers/profileUpdate.php" method="post">
    <div class="form-group">
        <input type="text" name="name" placeholder="Type your name" />
    </div>

    <div class="form-group">
        <input type="email"  name="email" placeholder="Type your email" />
    </div>
    
    <div class="form-group">
        <input type="text"  name="class" placeholder="Type your class name" />
    </div>
    
    <div class="form-group">
        <input type="submit"  value = "update" />
    </div>
</form>

    <?php include "includes/footer.php"; ?>
