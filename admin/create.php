<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Add new Book</title>
      <script src="https://cdn.tailwindcss.com"></script>
      <!-- <script src="https://unpkg.com/flowbite@1.4.7/dist/datepicker.js"></script> -->
   </head>
<body class="bg-gray-100">
   
   <section class="flex flex-row justify-center h-screen">
      <form action="book.php" method="post" name="create_form" autocomplete="on" class="my-auto" >
         <main>
            <div class="mb-8">
               <h1 class="text-3xl font-semibold text-center">New book</h1>
               <h3 class="text-xl text-center">add new guest room</h3>
            </div>
            
            <label for="nama" class="font-semibold text-lg">Guest Name :</label>
            <header class="mb-4">
               <input type="text" name="nama" placeholder="John Appleseed" 
                  class="border p-2 w-full border-slate-300 bg-white rounded focus:outline-none focus:ring-1 focus:border-purple-500 focus:ring-purple-500" 
                  maxlength="15" minlength="3" required>
            </header>

            <label for="date" class="font-semibold text-lg">Date Book :</label>
            <header class="mb-4">
               <input type="date" name="datang" class="border p-2 bg-white border-slate-300 rounded focus:outline-none focus:ring-1 focus:border-purple-500 focus:ring-purple-500" required >
               <span class="mx-4">To</span>
               <input type="date" name="pulang" class="border p-2 bg-white border-slate-300 rounded focus:outline-none focus:ring-1 focus:border-purple-500 focus:ring-purple-500" required>
            </header>
            
            <label for="date" class="font-semibold text-lg">Room Type :</label>
            <header class="mb-4">
               <select name="tipe" class="border w-full p-2 bg-white border-slate-200 rounded focus:outline-none focus:ring-1 focus:border-purple-500 focus:ring-purple-500" required>
                  <option value="Regular Room">Regular Room</option>
                  <option value="Senior Room">Senior Room</option>
                  <option value="Deluxe Room">Deluxe Room</option>
                  <option value="Suite Room">Suite Room</option>
                  <option value="Grand Suite Room">Grand Suite Room</option>
                  <option value="Kings Room">Kings Room</option>
               </select>
            </header>
            
            <label for="date" class="font-semibold text-lg">Guest People :</label>
            <header class="mb-4">
               <input type="number" name="jumlah" class="border p-2 bg-white w-full border-slate-300 rounded focus:outline-none focus:ring-1 focus:border-purple-500 focus:ring-purple-500" placeholder="1 Guest" min="0" required>
            </header>
            
            <label for="date" class="font-semibold text-lg">Price :</label>
            <header class="mb-4">
               <input type="number" name="harga" placeholder="Rp1.000.000" class="border p-2 bg-white w-full border-slate-300 rounded focus:outline-none focus:ring-1 focus:border-purple-500 focus:ring-purple-500" min="0" required>
            </header>

            <header>
               <input type="submit" class="bg-purple-500 hover:bg-purple-600 text-white p-2 rounded w-32 cursor-pointer rounded text-lg " name="booking" value="Create">
            </header>
         </main>
      </form>
   </section>
   
</body>
</html>