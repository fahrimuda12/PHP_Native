<?php


$name = $_POST['name'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];
$tanggal = $_POST['tanggal'];
$id = $_POST['id'];

require_once("../config.php");


$result = mysqli_query($conn, "INSERT INTO barang(nama,deskripsi,harga,jumlah,tanggal_buat,user_id) VALUES('$name','$deskripsi','$harga','$jumlah','$tanggal','$id')") or die(mysqli_error($conn));

header("location: ../index.php");
