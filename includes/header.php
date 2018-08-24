<?php $page = ucfirst(str_replace('.php', '', basename($_SERVER['PHP_SELF']))); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$page?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <?php if($page != "Login") { ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">My Project</a>

        <div class="collapse navbar-collapse text-right">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item <?php if($page=="Home") { ?>active<?php } ?>">
                    <a class="nav-link" href="home.php">Home</a>
                </li>
                <li class="nav-item <?php if($page=="Profile") { ?>active<?php } ?>">
                    <a class="nav-link" href="profile.php">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="controllers/logout.php">Logout</a>
                </li>
            <ul>
        </div>
    </nav>
    <?php } ?>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">