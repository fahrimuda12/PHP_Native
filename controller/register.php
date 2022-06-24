<?php



$name = $_POST['name'];
$username = $_POST['username'];
$age = $_POST['age'];
$email = $_POST['email'];
$pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);


require_once("../config.php");


$result = mysqli_query($conn, "INSERT INTO users(nama,age,email,username,password) VALUES('$name','$age','$email','$username','$pass')") or die(mysqli_error($conn));


header("location: ../index.php");
