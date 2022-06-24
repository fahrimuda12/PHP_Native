<?php

include_once("config.php");



session_start();

if (!isset($_SESSION['username'])) {
   header("Location: view/form_login.php");
}

$id = $_SESSION['id'];

$result = mysqli_query($conn, "SELECT * FROM barang WHERE user_id=$id ORDER BY id ASC");

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
   <title>Dashboard</title>
</head>

<body>
   <!-- <a href="form_add.php">Add New User</a><br /><br /> -->

   <nav class="navbar navbar-expand-lg bg-primary text-uppercase sticky-top" id="mainNav">
      <div class="container">
         <a class="navbar-brand text-white" href="index.php">
            Segeer
         </a>
         <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>

         <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mt-2 py-1 px-2 px-0 px-lg-3 rounded text-black bg-white d-lg-none w-md-25 ms-auto">
               <li><a class="dropdown-item" href="view/form_edit_user.php?id=<?= $_SESSION['id'] ?>">Profile</a></li>
               <li><a class=" dropdown-item" href="controller/logout.php">Logout</a></li>
            </ul>
         </div>

         <ul class="navbar-nav ms-auto d-sm-none d-none d-md-none d-lg-flex">
            <li class="nav-item dropdown">
               <a class="nav-link py-3 px-0 px-lg-3 rounded text-white dropdown-toggle" href="#" role="button" id="navbarDarkDropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="bi bi-person-circle px-2"></i>Hi, <?= $_SESSION['username'] ?>
               </a>
               <ul class="dropdown-menu " aria-labelledby="navbarDarkDropdownMenuLink">
                  <li><a class="dropdown-item" href="view/form_edit_user.php?id=<?= $_SESSION['id'] ?>">Profile</a></li>
                  <li><a class="dropdown-item" href="controller/logout.php">Logout</a></li>
               </ul>
            </li>
         </ul>
      </div>
   </nav>

   <div class="container">
      <div class="row mt-3">
         <h1>Dashboard</h1>
      </div>
      <div class="row my-2">
         <div class="d-flex flex-row-reverse">
            <a class="btn btn-primary" href="view/form_add_barang.php" role="button"><i class="bi bi-plus"></i> Tambah Barang</a>
         </div>
      </div>
      <table class="table table-striped">
         <thead>
            <tr class="table-primary">
               <th scope="col">No</th>
               <th scope="col">Nama</th>
               <th scope="col">Deskripsi</th>
               <th scope="col">Harga</th>
               <th scope="col">Jumlah</th>
               <th scope="col">Tanggal Produksi</th>
               <th scope="col">Aksi</th>
            </tr>
         </thead>
         <tbody>
            <?php
            $i = 1;
            while ($barang = mysqli_fetch_array($result)) :
            ?>
               <tr>
                  <td><?= $i ?> </td>
                  <td><?= $barang['nama'] ?> </td>
                  <td><?= $barang['deskripsi'] ?> </td>
                  <td><?= $barang['harga'] ?> </td>
                  <td><?= $barang['jumlah'] ?> </td>
                  <td><?= $barang['tanggal_buat'] ?> </td>
                  <td><a href="view/form_edit.php?id=<?= $barang['id'] ?>">Edit</a> | <a href="controller/delete_barang.php?id=<?= $barang['id'] ?>">Delete</a></td>
               </tr>
            <?php
               $i++;
            endwhile;
            ?>
         </tbody>
      </table>
   </div>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
</body>

</html>