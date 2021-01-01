<?php
require_once('config/configurations.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.2/css/boxicons.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <link rel="icon" href="../assets/favicon.ico">
    <title>Fur-Store SignIn</title>
</head>

<body>
    <form class="form-signin" method="post" action="signin.php">
        <?php include('config/errors.php'); ?>
        <center>
            <img class="mb-4" src="favicon.ico" alt="" height="100">
            <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        </center>

        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required autofocus><br>

        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-warning btn-block"  name="login_user" type="submit">Sign in</button><br>

        <center>
            <small>Don't have an a/c </small> <a href="sign_up.php" style="color:red;">Sign up Now</a>
            <p class="mt-5 mb-3 text-muted">&copy; 2020</p>
        </center>
    </form>

    <script src="assets/scripts/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/scripts/sign.js"></script>
</body>

</html>