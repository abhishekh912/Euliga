<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Form</title>
<link rel="stylesheet" href="Form.css">
  <script src="validate.js" ></script>
</head>
<body>
<div class="background-image">
  <div class="container">
    <h2> <img src="avatar.png" alt="Avatar"><br><br>
      Log in</h2><br>
    <span id="error-display"></span>
    <form action="login.php"  onsubmit="return validateForm()" method="post">

      <div class="input-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username">
      </div>
      <div class="input-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password">
      </div>
      <button type="submit" class="btn-login">Login</button>
    </form>
    <p style="text-align:center; margin-top: 5px;">Don't have an account? <a style="text-decoration: none;" href="register.html">Sign up</a></p>
  </div>
</div>

</body>


</html>
