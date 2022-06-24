<?php

require_once("../config.php");
session_start();

$id = $_POST['id'];
$name = $_POST['name'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];
$tanggal = $_POST['tanggal'];
$id_user = $_SESSION['id'];

$result = mysqli_query($conn, "UPDATE barang SET nama='$name', deskripsi='$deskripsi', harga='$harga', jumlah='$jumlah', tanggal_buat='$tanggal' WHERE id=$id") or die(mysqli_error($conn));


header("Location: ../index.php");
