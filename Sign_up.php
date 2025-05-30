<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Sign Up Page</title>
  <link rel="stylesheet" href="css/Sign_up.css">
</head>

<body>
  <div class="signup-container">
    <h1>Sign Up</h1>
    <form action="proses-sign_up.php" method="post">
      <label for="username">Username</label>
      <input type="text" name="username" id="username" required />

      <label for="email">Email</label>
      <input type="email" name="email" id="email" required />

      <label for="password">Password</label>
      <input type="password" name="password" id="password" required />

      <button type="submit" name="sign_up">Sign Up</button>
    </form>
    <p>I'm already a user, <a href="login.php">log in</a></p>
  </div>
</body>

</html>