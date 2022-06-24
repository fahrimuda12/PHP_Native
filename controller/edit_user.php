<?php

require_once("../config.php");

$id = $_POST['id'];
$name = $_POST['name'];
$username = $_POST['username'];
$age = $_POST['age'];
$email = $_POST['email'];
if ($_POST['pass'] != null)
   $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);


if (isset($pass)) {
   $result = mysqli_query($conn, "UPDATE users SET nama='$name',age='$age',email='$email',username='$username',password='$pass' WHERE id=$id") or die(mysqli_error($conn));
} else
   $result = mysqli_query($conn, "UPDATE users SET nama='$name',age='$age',email='$email',username='$username' WHERE id=$id") or die(mysqli_error($conn));

header("Location: ../index.php");
