<html>

<head>
   <title>Add Users</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

   <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
   <div class="container">
      <form action="../controller/register.php" method="POST" class="login-email">
         <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
         <div class="input-group">
            <label for="name">Name</label>
            <input type="text" placeholder="Name" name="name" required>
         </div>
         <div class="input-group">
            <label for="email">Email</label>
            <input type="email" placeholder="Email" name="email" required>
         </div>
         <div class="input-group">
            <label for="age">Age</label>
            <input type="number" placeholder="Age" name="age" required>
         </div>
         <div class="input-group">
            <label for="username">Username</label>
            <input type="text" placeholder="Username" name="username" required>
         </div>
         <div class="input-group">
            <label for="password">Password</label>
            <input type="password" placeholder="Password" name="pass" required>
         </div>
         <div class="input-group">
            <button name="submit" class="btn">Register</button>
         </div>
         <p class="login-register-text">Sudah punya akun? <a href="form_login.php">Login</a></p>
      </form>
   </div>
</body>

</html>