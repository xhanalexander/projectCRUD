<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Add new Book</title>
   </head>
<body>
   <h1>New book</h1>

   <section>
      <form action="book.php" method="post" name="create_form" autocomplete="on" >
         <main>
            <div>
               <h3>add new guest room</h3>
            </div>

            <header>
               <input type="text" name="nama" placeholder="John" maxlength="15" minlength="3" required>
               <input type="date" name="datang" required>
               <input type="date" name="pulang" required>
            </header>

            <header>
               <select name="tipe" required>
                  <option value="Regular Room">Regular Room</option>
                  <option value="Senior Room">Senior Room</option>
                  <option value="Deluxe Room">Deluxe Room</option>
                  <option value="Suite Room">Suite Room</option>
                  <option value="Grand Suite Room">Grand Suite Room</option>
                  <option value="Kings Room">Kings Room</option>
               </select>
            </header>

            
            <header>
               <label for="jumlah">Jumlah</label>
               <input type="number" name="jumlah" required>
            </header>
            
            <header>
               <label for="harga">Harga</label>
               <input type="number" name="harga" placeholder="Rp1.000.000" maxlength="15" minlength="3" required>
            </header>

            <header>
               <input type="submit" name="booking" value="book">
            </header>

         </main>
      </form>

   </section>
   
</body>
</html>