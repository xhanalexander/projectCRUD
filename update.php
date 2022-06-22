<!-- di edit.php ada hapus.php  -->

<?php
   include("configuration.php");

   if (!isset($_GET['id'])) {
      header("Location: index.php");
   }

   $id = $_GET['id'];

   $sql = "SELECT * FROM user WHERE id = $id";
   $query = mysqli_query($db, $sql);
   $customer = mysqli_fetch_assoc($query);

   if (mysqli_num_rows($query) < 1) {
      die("Data tidak ditemukan!");
   }

?>

<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>edit & delete</title>
</head>
<body>

   <h1>Edit book</h1>

   <section>
      <form action="editProcess.php" method="post" name="edit_form" autocomplete="on" >
         <main>
            <div>
               <h3>edit guest room</h3>
            </div>

            <input type="hidden" name="id" value="<?php echo $customer['id'] ?>">

            <header>
               <input type="text" name="nama" placeholder="John" value="<?php echo $customer['nama'] ?>" maxlength="15" minlength="3" required>
               <input type="date" name="datang" value="<?php echo $customer['datang'] ?>" required>
               <input type="date" name="pulang" value="<?php echo $customer['pulang'] ?>" required>
            </header>

            <header>
               <?php $type = $customer['tipe'] ?>
               <select name="tipe" required>
                  <option <?php echo ($type == "Regular Room") ? "selected": "" ?> >Regular Room</option>
                  <option <?php echo ($type == "Senior Room") ? "selected": "" ?> >Senior Room</option>
                  <option <?php echo ($type == "Deluxe Room") ? "selected": "" ?> >Deluxe Room</option>
                  <option <?php echo ($type == "Suite Room") ? "selected": "" ?> >Suite Room</option>
                  <option <?php echo ($type == "Grand Suite Room") ? "selected": "" ?> >Grand Suite Room</option>
                  <option <?php echo ($type == "Kings Room") ? "selected": "" ?> >Kings Room</option>
               </select>
            </header>

            <header>
               <label for="jumlah">Jumlah</label>
               <input type="number" name="jumlah" value="<?php echo $customer['jumlah'] ?>" required>
            </header>
            
            <header>
               <label for="harga">Harga</label>
               <input type="text" name="harga" placeholder="Rp1.000.000" value="<?php echo $customer['harga'] ?>" maxlength="15" minlength="3" required>
            </header>
            
            <header>
               <input type="submit" name="update" value="Edit book">
            </header>

         </main>
      </form>

   </section>
   
</body>
</html>

