<?php
    session_start();
    if(count($_SESSION)) header("Location: home.php");
    // $msg = isset($_GET["msg"]) ? $_GET["msg"] : '';
    // $msgtxt = "";
?>

<?php include "includes/header.php"; ?>
    <div>
        <h1>Sign Up</h1>

        <form action="controllers/signupSubmit.php" method="post">

            <div class="form-group">
                <input name="email" type="text" placeholder="Email">
            </div>

            <div class="form-group">
                <input name="pass" type="password" placeholder="Password">
            </div>
            <div class="form-group">
                <input name="confirmpass" type="password" placeholder="Confirm Password">
            </div>

            <input type="submit"value="Sign Up" />
        </form>
        <div>Have account? <a href="login.php">Log In</a></div>
    </div>
<?php include "includes/footer.php"; ?>