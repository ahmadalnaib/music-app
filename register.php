<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>narng</title>
</head>
<body>

<div id="container-login">
       <form  action="login.php" method="POST">
       <h2>Login to your account</h2>
      <div>
      <label for="username">username</label>
      <input id="username" type="text" name="username"  required>
      </div>
       <div>
       <label for="password">password</label>
       <input id="password" type="password" name="password"  required>
       </div>

       <button type="submit" name="login" class="btn">Login</button>
       </form>
  </div>

  <div id="container-register">
       <form  action="register.php" method="POST">
       <h2>Create your free account</h2>
      <div>
      <label for="username">username</label>
      <input id="username" type="text" name="username" required>
      </div>

      <div>
      <label for="firstname">first name</label>
      <input id="firstname" type="text" name="firstname"  required>
      </div>

      <div>
      <label for="lastname">last name</label>
      <input id="lastname" type="text" name="lastname" required>
      </div>

      <div>
      <label for="email">email</label>
      <input id="email" type="email" name="email" required>
      </div>
      
      <div>
      <label for="email2"> confirm email</label>
      <input id="email2" type="email" name="email2"  required>
      </div>

       <div>
       <label for="password">password</label>
       <input id="password" type="password" name="password"  required>
       </div>

       <div>
       <label for="password2"> confirm password</label>
       <input id="password2" type="password" name="password2"  required>
       </div>

       <button type="submit" name="register" class="btn">sign up</button>
       </form>
  </div>
</body>
</html>