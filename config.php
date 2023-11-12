<?php
  $host = 'localhost';
  $database = 'cv';
  $user = 'ibrahim';
  $pwd = '1';

  $conn = mysqli_connect($host, $user, $pwd, $database);

  if (!$conn) {
    die('gagal melakukan koneksi'.mysqli_connect_error());
  }
?>