<?php
   include_once("configuration.php");
   $select = mysqli_query($db, "SELECT * FROM user ORDER BY id ASC");
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

   <section>
      <table>
         <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Check In</th>
            <th>Check Out</th>
            <th>Tipe</th>
            <th>Jumlah</th>
         </tr>
      <?php
         while ($user_data = mysqli_fetch_array($select)) {
            echo "<tr>";
               echo "<td>" . $user_data['id']."</td>";
               echo "<td>" . $user_data['nama']."</td>";
               echo "<td>" . $user_data['datang']."</td>";
               echo "<td>" . $user_data['pulang']."</td>";
               echo "<td>" . $user_data['tipe']."</td>";
               echo "<td>" . $user_data['jumlah']."</td>";
               echo "<td> <a href='edit.php?id=$user_data[id]'>Edit</a>";
            echo "</tr>";
         }
      ?>
      </table>
   </section>

   <button>
      <a href="">New Book</a>
   </button>
   
</body>
</html>