<?php
   include_once("configuration.php");

   if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $sql = "DELETE FROM user WHERE id = $id";
      $query = mysqli_query($db, $sql);

      if ($query) {
         echo " <script> alert('Data berhasil terhapus!'); document.location.href = 'index.php'; </script>";
      } else {
         die("Failed to delete...");
      }
   } else {
      die("Access denied!");
   }

?>