<?php 
session_start();
if(count($_SESSION)) header("Location: home.php");
$error = isset($_GET['error']); 
?>

<?php include "includes/header.php"; ?>

    <h1>Login</h1>

<?php if($error) { ?>
    <div class="alert alert-danger" role="alert">Your email or password is wrong</div>
<?php } ?>


<form action="controllers/loginSubmit.php" method="post">
    <div class="form-group">
        <input type="text" name="email" placeholder="Type your email" required />
    </div>

    <div class="form-group">
        <input type="password" name="pass" placeholder="Type your password" required/>
    </div>

    <div class="form-group">
        <input type="submit" value="Login"/>
    </div>
</form>

<?php include "includes/footer.php"; ?>