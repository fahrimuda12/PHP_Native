<?php
include_once("../config.php");
session_start();
if (!isset($_SESSION['username'])) {
   header("Location: view/form_login.php");
}
$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM users WHERE id=$id");

while ($user_data = mysqli_fetch_array($result)) {
   $name = $user_data['nama'];
   $email = $user_data['email'];
   $age = $user_data['age'];
   $username = $user_data['username'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
   <title>Edit User Data</title>
</head>

<body>
   <nav class="navbar navbar-expand-lg bg-primary text-uppercase sticky-top" id="mainNav">
      <div class="container">
         <a class="navbar-brand text-white" href="../index.php">
            Segeer
         </a>
         <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>

         <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mt-2 py-1 px-2 px-0 px-lg-3 rounded text-black bg-white d-lg-none w-md-25 ms-auto">
               <li><a class="dropdown-item" href="#">Profile</a></li>
               <li><a class="dropdown-item" href="#">Logout</a></li>
            </ul>
         </div>

         <ul class="navbar-nav ms-auto d-sm-none d-none d-md-none d-lg-flex">
            <li class="nav-item dropdown">
               <a class="nav-link py-3 px-0 px-lg-3 rounded text-white dropdown-toggle" href="#" role="button" id="navbarDarkDropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="bi bi-person-circle px-2"></i>Hi, <?= $_SESSION['username'] ?>
               </a>
               <ul class="dropdown-menu " aria-labelledby="navbarDarkDropdownMenuLink">
                  <li><a class="dropdown-item" href="../view/form_edit_user.php">Profile</a></li>
                  <li><a class="dropdown-item" href="../controller/logout.php">Logout</a></li>
               </ul>
            </li>
         </ul>
      </div>
   </nav>
   <div class="container mt-2">
      <h1>Form Edit</h1>
      <div class="mt-5 mb-3 d-flex">
         <button onclick="history.back()" class="btn btn-primary">Kembali</button>
      </div>
      <form name="update_user" method="post" action="../controller/edit_user.php">
         <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>" placeholder="Harap Input Nama" required>
         </div>
         <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>" placeholder="Harap Input Eamil" required>
         </div>
         <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" class="form-control" id="age" name="age" value="<?php echo $age; ?>" placeholder="Harap Input Umur" required>
         </div>
         <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="<?php echo $username; ?>" placeholder="Harap Input Username" required>
         </div>
         <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="pass" name="pass">
         </div>
         <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
         <input type="hidden" name="id_user" value=<?php echo $_SESSION['id']; ?>>
         <button type="submit" class="btn btn-success">Update</button>
      </form>
   </div>

   <script src="../js/bootstrap.min.js"></script>
   <script src="../js/popper.min.js"></script>
</body>

</html>