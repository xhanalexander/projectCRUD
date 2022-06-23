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
   <script src="https://cdn.tailwindcss.com"></script>
   <title>edit & delete</title>
</head>
<body class="bg-gray-100">

   <section class="flex flex-row justify-center h-screen">
      <form action="editProcess.php" method="post" name="edit_form" autocomplete="on" class="my-auto">
         <main>
            <div class="mb-8">
               <h1 class="text-3xl font-semibold text-center">Edit book</h1>
               <h3 class="text-xl text-center">edit guest room</h3>
            </div>

            <input type="hidden" name="id" value="<?php echo $customer['id'] ?>">

            <label for="nama" class="font-semibold text-lg">Guest Name :</label>
            <header class="mb-4">
               <input type="text" name="nama" placeholder="John Appleseed" 
               class="border p-2 w-full border-slate-300 bg-white rounded"
               value="<?php echo $customer['nama'] ?>" maxlength="15" minlength="3" required>
            </header>
            
            <label for="date" class="font-semibold text-lg">Date Book :</label>
            <header class="mb-4">
               <input type="date" name="datang" class="border p-2 bg-white border-slate-300 rounded" value="<?php echo $customer['datang'] ?>" required>
               <span class="mx-4">To</span>
               <input type="date" name="pulang" class="border p-2 bg-white border-slate-300 rounded" value="<?php echo $customer['pulang'] ?>" required>
            </header>

            <label for="date" class="font-semibold text-lg">Room Type :</label>
            <header class="mb-4">
               <?php $type = $customer['tipe'] ?>
               <select name="tipe" class="border w-full p-2 bg-white border-slate-200 rounded" required>
                  <option <?php echo ($type == "Regular Room") ? "selected": "" ?> >Regular Room</option>
                  <option <?php echo ($type == "Senior Room") ? "selected": "" ?> >Senior Room</option>
                  <option <?php echo ($type == "Deluxe Room") ? "selected": "" ?> >Deluxe Room</option>
                  <option <?php echo ($type == "Suite Room") ? "selected": "" ?> >Suite Room</option>
                  <option <?php echo ($type == "Grand Suite Room") ? "selected": "" ?> >Grand Suite Room</option>
                  <option <?php echo ($type == "Kings Room") ? "selected": "" ?> >Kings Room</option>
               </select>
            </header>

            <label for="date" class="font-semibold text-lg">Guest People :</label>
            <header class="mb-4">
               <input type="number" name="jumlah" class="border p-2 bg-white w-full border-slate-300 rounded"
                value="<?php echo $customer['jumlah'] ?>" required>
            </header>
            
            <label for="date" class="font-semibold text-lg">Price :</label>
            <header class="mb-4">
               <input type="text" name="harga" placeholder="Rp1.000.000" class="border p-2 bg-white w-full border-slate-300 rounded"
               value="<?php echo $customer['harga'] ?>" maxlength="15" minlength="3" required>
            </header>
            
            <header>
               <input type="submit" class="bg-purple-500 hover:bg-purple-600 text-white p-2 rounded w-32 cursor-pointer rounded text-lg" name="update" value="Update">
            </header>

         </main>
      </form>

   </section>
   
</body>
</html>

