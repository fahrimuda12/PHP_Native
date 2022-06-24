<?php
include_once("../config.php");
session_start();
if (!isset($_SESSION['username'])) {
   header("Location: view/form_login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
   <title>Tambah Barang</title>
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
               <li><a class="dropdown-item" href="../view/form_edit_user.php">Profile</a></li>
               <li><a class="dropdown-item" href="../controller/logout.php">Logout</a></li>
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
   <div class="container my-2">
      <h1>Form Tambah Barang</h1>
      <div class="mt-5 mb-3 d-flex">
         <button onclick="history.back()" class="btn btn-primary">Kembali</button>
      </div>
      <form name="update_user" method="post" action="../controller/add_barang.php">
         <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Harap Input Nama Barang" required>
         </div>
         <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <div class="form-floating">
               <textarea class="form-control" placeholder="Tambahkan Deskripsi" id="deskripsi" name="deskripsi" style="height: 100px"></textarea>
               <label for="floatingTextarea2">Deskripsi</label>
            </div>
         </div>
         <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control" id="harga" name="harga" placeholder="Harap Input Harga" required>
         </div>
         <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Harap Input Jumlah Barang" required>
         </div>
         <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal Produksi</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Harap Input Tanggal" required>
         </div>
         <input type="text" hidden value="<?= $_SESSION['id'] ?>" name="id">
         <div class="d-flex flex-row-reverse">
            <button type="submit" class="btn btn-success">Tambah</button>
         </div>
      </form>
   </div>

   <script src="../js/bootstrap.min.js"></script>
   <script src="../js/popper.min.js"></script>
</body>

</html>