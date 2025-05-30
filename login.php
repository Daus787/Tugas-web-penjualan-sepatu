<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Login Page</title>
  <link rel="stylesheet" href="css/login.css">
</head>

<body>

  <div class="login-container">
    <h1>Login</h1>
    <p>Login to your account</p>
    <form action="proses-login.php" method="post">
      <div class="form-group">
        <label for="username">Username</label>
        <div class="input-icon">
          <img src="https://img.icons8.com/material-sharp/24/user.png" alt="user" />
          <input type="text" id="username" name="username" required />
        </div>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <div class="input-icon">
          <img src="https://img.icons8.com/material-sharp/24/lock--v1.png" alt="lock" />
          <input type="password" id="password" name="password" required />
        </div>
      </div>
      <button type="submit" class="login-button">Login</button>
    </form>
    <div class="options">
      <span>Don't have an account? <a href="Sign_Up.php">Sign Up</a></span>
      <a href="halaman_dashboard_web_penjualan.html">Continue as Guest</a>
    </div>
  </div>
</body>

</html>