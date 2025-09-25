<?php
session_start();
if (isset($_SESSION['email'])) {
  header("Location: dashboard.php");
  exit();
}

$username = "";
$email = "";
$password = "";
$confirm_password = "";

$username_error = "";
$email_error = "";
$password_error = "";
$confirm_password_error = "";

$error = false;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

}

/*******validate username*******/
if(empty($username)){
    $username_error = "Username is required";
    $error = true;
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
        <title>Register Page</title>
        <link rel="stylesheet" href="assets/style.css">
    </head>
    <body>
        <div class="container">
            <div class="form-box">
                <header>Register</header>
                <form action="" method="post">
                    <div class="field input">
                        <label for="username">Username</label>
                        <input type="text" class="username" id="username" name="username" placeholder="Enter your username" value="<?= $username ?>" autocomplete="off" required>
                        <span class="text-danger"><?= $username_error ?></span>
                    </div>
                    <div class="field input">
                        <label for="email">Email*</label>
                        <input type="text" class="email" id="email" name="email"  placeholder="Enter your email" value = "<?= $email ?>" autocomplete="off" required>
                        <span class="text-danger"><?= $email_error ?></span>
                    </div>
                    <div class="field input">
                        <label for="password">Password*</label>
                        <input type="password" class="password" id="password" name="password" placeholder="Enter your password" autocomplete="off" required>
                        <span class="text-danger"><?= $password_error ?></span>
                    </div>
                    <div class="field input">
                        <label for="confirm password">Confirm Password*</label>
                        <input type="password" class="confirm_password" id="confirm_password" name="confirm_password" placeholder="Confirm your password" autocomplete="off" required>
                        <span class="text-danger"><?= $confirm_password_error ?></span>
                    </div>
                    <div class="field">  
                        <input type="submit" class="btn" name="submit" value="Login" value="" required>
                        <span class="text-danger"></span>
                    </div>
                    <div class="links">
                        Already have an account?<a href="login.php">Sign In</a>
                    </div>
                </form>
            </form-box>
        </div>
    </body>
</html>