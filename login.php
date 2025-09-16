<?php
include 'templates/header.php';


$email = "";
$password = "";
$confirm_password = "";


$email_error = "";
$password_error = "";
$confirm_password_error = "";

$error = false;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

}

/*******validate Email*********/
if (!preg_match('/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/', $email)){
    $email_error = "Email format is not valid";
    $error = true;
}

/********validate password********/
if(strlen($password) < 6){
    $password_error = "Password must have at least 6 characters";
    $error = true;
}


/*******validate confirm password*********/
if($confirm_password != $password){
    $confirm_password_error = "Password and Confirm Password do not match";
    $error = true;
}

?>


<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" href="assets/style.css">
    </head>
    <body>

        <div class="container">
            <div class="form-box">
                <header>Login</header>
                <form action="" method="post">
                    <div class="field input">
                        <label for="username">Email</label>
                        <input type="text" class="username" id="username" name = "email" value = "<?=$email ?>" placeholder="Enter your Email" required>
                        <span class="text-danger"><?= $email_error ?></span>
                    </div>
                    <div class="field input">
                        <label for="password">Password*</label>
                        <input type="password" class="password" id="password" name = "password" value = "<?=$password ?>" placeholder="Enter your password"required>
                         <span class="text-danger"><?= $password_error ?></span>
                    </div>
                    <div class="field input">
                        <label for="confirm password">Confirm Password*</label>
                        <input type="password" class="confirm_password" id="confirm_password" name="confirm_password" placeholder="Confirm your password" autocomplete="off" required>
                        <span class="text-danger"><?= $confirm_password_error ?></span>
                    </div>
                    <div class="field">  
                        <input type="submit" class="btn" name="submit" value="Login" placeholder="Enter your name" required>
                    </div>
                    <div class="links">
                        Don't have an account? <a href="sign.php">Sign Up</a>
                    </div>
                </form>
            </form-box>
        </div>
    </body>
</html>