<?php
session_start();
if (isset($_SESSION['username'])) {
   header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link rel="stylesheet" type="text/css" href="../css/style.css">

   <title>Login</title>
</head>

<body>
   <div class="container">
      <form action="../controller/login.php" method="POST" class="login-email">
         <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
         <div class="input-group">
            <input type="email" placeholder="Email" name="email" required>
         </div>
         <div class="input-group">
            <input type="password" placeholder="Password" name="password" required>
         </div>
         <div class="input-group">
            <button name="submit" class="btn">Login</button>
         </div>
         <p class="login-register-text">Anda belum punya akun? <a href="form_register.php">Register</a></p>
      </form>
   </div>

   <?php if (isset($_SESSION['error'])) {
      echo $_SESSION['error'];
      session_destroy();
   }

   ?>
</body>

</html>