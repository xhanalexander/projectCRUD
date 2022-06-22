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
      <script src="https://cdn.tailwindcss.com"></script>
   </head>
<body class="">

   <!-- <nav class="flex flex-row">
      <h1 class="text-3xl font-semibold">Inn Booking</h1>
      <a href="logout.php">logout</a>
   </nav> -->
   
   <nav class="flex flex-row h-16 bg-white justify-between drop-shadow-md w-full ">
      <div class="flex">
         <h1 class="text-3xl font-semibold my-auto ml-4 ">Inn Booking 🏨🛏</h1>
      </div>

      <div class="flex mr-6">
         <h4 class="text-lg my-auto mx-4">Hi, <span class="font-bold"><?php echo $_SESSION['username']; ?> </span></h4>
         <a class="text-lg my-auto font-bold opacity-30 hover:opacity-50" href="logout.php" title="logout">Logout</a>
      </div>
   </nav>

   <section class="flex justify-center mt-20">
      <table class="">
         <tr>
            <!-- <th class="border w-14 text-white text-left font-bold pl-2 py-4 bg-purple-400 border-0 ">No</th> -->
            <th class="border w-44 text-white text-left font-bold pl-4 py-4 bg-purple-400 border-0 ">Name</th>
            <th class="border w-32 text-white text-left font-bold py-4 bg-purple-400 border-0 ">Check In</th>
            <th class="border w-32 text-white text-left font-bold py-4 bg-purple-400 border-0 ">Check Out</th>
            <th class="border w-32 text-white text-left font-bold py-4 bg-purple-400 border-0 ">Type</th>
            <th class="border w-16 text-white text-left font-bold py-4 bg-purple-400 border-0 ">Guest</th>
            <th class="border w-32 text-white text-left font-bold py-4 bg-purple-400 border-0 ">Price</th>
            <th class="border w-32 text-white text-left font-bold py-4 bg-purple-400 border-0 ">Update</th>
         </tr>
      <?php
         while ($user_data = mysqli_fetch_array($select)) {
            echo "<tr class='odd:bg-purple-200 even:bg-white'>";
               // echo "<td class='py-2 font-semibold text-center '>" . $user_data['id'] . "</td>";
               echo "<td class='py-2 pl-4'>" . $user_data['nama'] . "</td>";
               echo "<td class='py-2 '>" . $user_data['datang'] . "</td>";
               echo "<td class='py-2 '>" . $user_data['pulang'] . "</td>";
               echo "<td class='py-2 '>" . $user_data['tipe'] . "</td>";
               echo "<td class='py-2 pl-4 '>" . $user_data['jumlah'] . "</td>";
               echo "<td class='py-2 '>" . "Rp" .  $user_data['harga'] . "</td>";
               echo "<td class='py-2 '> <a href='update.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]' class='text-red-500 font-bold hover:text-red-400'>Delete</a></td></tr>";
         }
      ?>
      </table>
   </section>

   <p class="text-xl text-center my-2 text-purple-500 font-semibold">Total Booked: <?php echo mysqli_num_rows($select) ?> </p>

   <button class="flex justify-center mx-auto">
      <a href="create.php" class="flex flex-row w-36 p-2 bg-purple-500 hover:bg-purple-600 text-white text-center font-bold justify-around rounded-md">
         <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" viewBox="0 0 20 20" fill="currentColor" class="">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" />
         </svg>
         <span>New Book</span>
      </a>
   </button>
   
</body>
</html>