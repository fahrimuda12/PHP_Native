<?php
$databaseHost = 'localhost';
$databaseName = 'tes1';
$databaseUser = 'root';
$databasePass = '';


$conn = mysqli_connect($databaseHost, $databaseUser, $databasePass, $databaseName);
if (!$conn) {
   die("Connection error");
}
