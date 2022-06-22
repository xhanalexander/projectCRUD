<?php
   include("configuration.php");

   if (isset($_POST['update'])) {
      $id = $_POST['id'];
      $nama = $_POST['nama'];
      $check_in = $_POST['datang'];
      $check_out = $_POST['pulang'];
      $type = $_POST['tipe'];
      $amount = $_POST['jumlah'];
      $price = $_POST['harga'];

      $sql = "UPDATE user SET nama='$nama', datang='$check_in', pulang='$check_out', tipe='$type', jumlah='$amount', harga='$price' WHERE id=$id";
      $query = mysqli_query($db, $sql);

      if ($query) {
         header("Location: index.php");
      } else {
         die("Gagal menyimpan perubahan!");
      }

   } else {
      die("Forbidden!");
   }

?>