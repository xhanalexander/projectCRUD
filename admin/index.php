<?php
   include_once("configuration.php");
   $select = mysqli_query($db, "SELECT * FROM user ORDER BY id ASC");
?>

<?php
   session_start();
   if($_SESSION['status']!="login"){
      header("location:../login.php?pesan=belum_login");
   }
?>

<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Inn Booking</title>
   </head>
<body>
   <h1>Inn Booking</h1>

   <a href="logout.php">logout</a>

   <section>
      <table border="1">
         <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Check In</th>
            <th>Check Out</th>
            <th>Tipe</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Update</th>
         </tr>
      <?php
         while ($user_data = mysqli_fetch_array($select)) {
            echo "<tr>";
               echo "<td>" . $user_data['id'] . "</td>";
               echo "<td>" . $user_data['nama'] . "</td>";
               echo "<td>" . $user_data['datang'] . "</td>";
               echo "<td>" . $user_data['pulang'] . "</td>";
               echo "<td>" . $user_data['tipe'] . "</td>";
               echo "<td>" . $user_data['jumlah'] . "</td>";
               echo "<td>" . "Rp" .  $user_data['harga'] . "</td>";
               echo "<td> <a href='update.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
         }
      ?>
      </table>
   </section>

   <p>total : <?php echo mysqli_num_rows($select) ?> </p>

   <button>
      <a href="create.php">
         <span>New Book</span>
      </a>
   </button>
   
</body>
</html>