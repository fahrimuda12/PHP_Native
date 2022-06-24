<?php
require_once("../config.php");
session_start();
if (isset($_SESSION['username'])) {
   header("Location: ../index.php");
} else {
   if (isset($_POST['submit'])) {
      $email = $_POST['email'];
      $password = $_POST['password'];

      $sql = "SELECT * FROM users WHERE email='$email'";

      $result = mysqli_query($conn, $sql);

      if ($result->num_rows > 0) {
         $row = mysqli_fetch_assoc($result);
         if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['id'] = $row['id'];
            header("Location: ../index.php");
         } else {

            $_SESSION['error'] = "<script>alert('password Anda salah. Silahkan coba lagi!')</script>";
            header("Location: ../view/form_login.php");
         }
      } else {
         $_SESSION['error'] = "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";

         header("Location: ../view/form_login.php");
      }
   }
}
