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
<body>
   
   <nav class="flex flex-row h-16 bg-white justify-between drop-shadow-md w-full ">
      <div class="flex">
         <h1 class="text-3xl font-semibold my-auto ml-4 ">Inn Booking 🏨🛏</h1>
      </div>

      <div class="flex mr-6">
         <svg xmlns="http://www.w3.org/2000/svg" class="w-4 fill-slate-500" viewBox="0 0 448 512"><path d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z"/></svg>
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
            echo "<tr class='odd:bg-purple-200 even:bg-white hover:bg-gray-300'>";
               // echo "<td class='py-2 font-semibold text-center '>" . $user_data['id'] . "</td>";
               echo "<td class='py-2 pl-4'>" . $user_data['nama'] . "</td>";
               echo "<td class='py-2 '>" . $user_data['datang'] . "</td>";
               echo "<td class='py-2 '>" . $user_data['pulang'] . "</td>";
               echo "<td class='py-2 '>" . $user_data['tipe'] . "</td>";
               echo "<td class='py-2 pl-4 '>" . $user_data['jumlah'] . "</td>";
               echo "<td class='py-2 '>" . "Rp" .  $user_data['harga'] . "</td>";
               echo "<td class='py-2 flex flex-row'> 
                  <a href='update.php?id=$user_data[id]' class='mr-4' title='edit'>
                     <svg xmlns='http://www.w3.org/2000/svg' class='w-5 fill-purple-500 hover:fill-purple-600' viewBox='0 0 512 512'><path d='M362.7 19.32C387.7-5.678 428.3-5.678 453.3 19.32L492.7 58.75C517.7 83.74 517.7 124.3 492.7 149.3L444.3 197.7L314.3 67.72L362.7 19.32zM421.7 220.3L188.5 453.4C178.1 463.8 165.2 471.5 151.1 475.6L30.77 511C22.35 513.5 13.24 511.2 7.03 504.1C.8198 498.8-1.502 489.7 .976 481.2L36.37 360.9C40.53 346.8 48.16 333.9 58.57 323.5L291.7 90.34L421.7 220.3z'/></svg>
                  </a> 
                  <a href='delete.php?id=$user_data[id]' class='mx-2' title='delete'>
                     <svg xmlns='http://www.w3.org/2000/svg' class='w-4 fill-red-500 hover:fill-red-600' viewBox='0 0 448 512'><path d='M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM394.8 466.1C393.2 492.3 372.3 512 346.9 512H101.1C75.75 512 54.77 492.3 53.19 466.1L31.1 128H416L394.8 466.1z'/></svg>
                  </a></td></tr>";
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