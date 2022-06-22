<?php
   include("configuration.php");

   if (isset($_POST['booking'])) {
      $name = $_POST['nama'];
      $date_in = $_POST['datang'];
      $date_out = $_POST['pulang'];
      $type = $_POST['tipe'];
      $amount = $_POST['jumlah'];
      $price = $_POST['harga'];

      $sql = "INSERT INTO user (nama, datang, pulang, tipe, jumlah, harga) VALUES ('$name', '$date_in', '$date_out', '$type', '$amount', '$price')";
      $query = mysqli_query($db, $sql);

      if ($query) {
         header("Location: index.php");
      } else {
         header("Location: index.php?status=gagal");
      }
   } else {
      die("Akses dilarang!");
   }

?>