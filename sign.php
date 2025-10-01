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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = htmlspecialchars($_POST['username']);
  $email = htmlspecialchars($_POST['email']);
  $password = htmlspecialchars($_POST['password']);
  $confirm_password = htmlspecialchars($_POST['confirm_password']);

  /*******validate username*******/
  if (empty($username)) {
    $username_error = "Username is required";
    $error = true;
  }

  /*******validate Email*********/
  if (!preg_match('/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/', $email)) {
    $email_error = "Email format is not valid";
    $error = true;
  }

  /********validate password********/
  if (strlen($password) < 6) {
    $password_error = "Password must have at least 6 characters";
    $error = true;
  }


  /*******validate confirm password*********/
  if ($confirm_password != $password) {
    $confirm_password_error = "Password and Confirm Password do not match";
    $error = true;
  }


  require_once "includes/db.php";
  //check email already used or not
  if (!$error) {
    $stmt = $conn->prepare("SELECT user_id FROM users WHERE email=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
      $email_error = "Email is already in use.";
      $error = true;
    }
    $stmt->close();
  }

  if (!$error) {
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $created_at = date('Y-m-d H:i:s');

    $stmt = $conn->prepare("INSERT INTO users (name, email, password, created_at) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $username, $email, $hashed_password, $created_at);
    $stmt->execute();
    $user_id = $stmt->insert_id;
    $stmt->close();
    $_SESSION['user_id'] = $user_id;
    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email;
    $_SESSION['created_at'] = $created_at;

    header("location: dashboard.php");
    exit();
  }
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
          <span class="text-danger" style="color: red;"><?= $username_error ?></span>
        </div>
        <div class="field input">
          <label for="email">Email*</label>
          <input type="text" class="email" id="email" name="email" placeholder="Enter your email" value="<?= $email ?>" autocomplete="off" required>
          <span class="text-danger" style="color: red;"><?= $email_error ?></span>
        </div>
        <div class="field input">
          <label for="password">Password*</label>
          <input type="password" class="password" id="password" name="password" placeholder="Enter your password" autocomplete="off" required>
          <span class="text-danger" style="color: red;"><?= $password_error ?></span>
        </div>
        <div class="field input">
          <label for="confirm password">Confirm Password*</label>
          <input type="password" class="confirm_password" id="confirm_password" name="confirm_password" placeholder="Confirm your password" autocomplete="off" required>
          <span class="text-danger" style="color: red;"><?= $confirm_password_error ?></span>
        </div>
        <div class="field">
          <input type="submit" class="btn" name="submit" value="Sign Up" value="" required>
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
