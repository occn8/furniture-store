<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.2/css/boxicons.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/navbar.css">
    <!-- <link rel="stylesheet" type="text/css" href="../assets/css/style.css"> -->

    <link rel="icon" href="../assets/favicon.ico">
    <title>Fur-Store SignUp</title>
</head>

<body>
    <form method="post" action="signup.php" class="form-signin">
        <center>
            <h1 class="h3 mb-3 font-weight-normal">Please Register</h1>
        </center>
       
        <div class="">

            <div class="form-group">
                <label for="uname" class="text-black">Username </label>
                <input type="text" class="form-control" id="uname" name="username" placeholder="Username" value="<?php echo $username; ?>" required>

            </div>

            <div class="form-group ">
                <label for="email" class="text-black">Email </label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="" required>
            </div>

            <div class="form-group">
                <label for="pass" class="text-black">Password </label>
                <input type="password" class="form-control" id="pass" name="password_1" placeholder="Password" value="" required>
            </div>

            <div class="form-group">
                <label for="repass" class="text-black">Re-type Password </label>
                <input type="password" class="form-control" id="repass" name="password_2" placeholder="Password" value="" required>
            </div>

            <center>
                <button class="btn btn-lg btn-warning btn-block" style="background-color: #59b8b2;" name="reg" type="submit">Register</button><br>

                <small>Already have a/c?</small> <a href="sign_in.php" style="color:red;">Log In Now</a>
            </center>

        </div>
    </form>

    <script src="assets/scripts/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/scripts/sign.js"></script>
</body>

</html>