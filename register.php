<?php
   include("configuration.php");

   $username = $_POST['username'];
   $password = $_POST['password'];

   $sql = "INSERT INTO adminlog (username, password) VALUES ('$username', '$password')";    // Create a new account

   $query = mysqli_query($db, $sql);

   if ($query) {
      echo " <script> alert('Akun Berhasil terbuat'); document.location.href = 'index.php'; </script>";
   } else {
      echo "<h1>Akun Gagal Terbuat</h1>";
   }

?>