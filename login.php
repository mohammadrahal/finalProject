<?php
include "config.php"
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/login.css" />
    <title>Login</title>
  </head>
  <body>
    <div class="login_container">
      <h1>login</h1>
      <form action="" method="POST">
        <div class="input_control">
          <label for="email">email</label>
          <input
            type="email"
            name="email"
            id="email"
            placeholder="example@example.com"
          />
        </div>
        <div class="input_control">
          <label for="password">password</label>
          <input
            type="password"
            name="password"
            id="password"
            placeholder="your password"
          />
        </div>
        <div class="login_btn">
          <button type="submit">login</button>
        </div>
      </form>
    </div>

    <script></script>
  </body>
</html>
