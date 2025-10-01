<?php
session_start();
if (isset($_SESSION["email"])) {
  header("Location: dashboard.php");
  exit();
}


$user_email = "";
$error = "";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $user_email = htmlspecialchars($_POST['email']);
  $password = htmlspecialchars($_POST['password']);
  require_once "includes/db.php";
  $stmt = $conn->prepare("SELECT user_id,name,email,password,created_at FROM users WHERE email=?");
  $stmt->bind_param("s", $user_email);
  $stmt->execute();
  $stmt->bind_result($user_id, $username, $email, $hashed_password, $created_at);
  if ($stmt->fetch()) {
    if (password_verify($password, $hashed_password)) {
      session_start();
      $_SESSION['user_id'] = $user_id;
      $_SESSION['username'] = $username;
      $_SESSION['email'] = $email;
      $_SESSION['created_at'] = $created_at;
      header("Location: dashboard.php");
      exit();
    }
  }
  $stmt->close();
  $error = "Invalid email or password";
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
        <?php if ($error) { ?>
          <div class="error_message_login">
            <p class="p_login" style="text-align: center;color: red;"><strong><?= $error ?></strong></p>
          </div>
        <?php } ?>
        <div class="field input">
          <label for="username">Email</label>
          <input type="text" class="username" id="username" name="email" value="<?= $email ?>" placeholder="Enter your Email" required>
        </div>
        <div class="field input">
          <label for="password">Password*</label>
          <input type="password" class="password" id="password" name="password" value="<?= $password ?>" placeholder="Enter your password" required>
        </div>
        <div class="field">
          <button type="submit" class="btn" name="submit" value="login">Login</button>
        </div>
        <div class="links">
          Don't have an account? <a href="sign.php">Sign Up</a>
        </div>
      </form>
      </form-box>
    </div>
</body>

</html>
