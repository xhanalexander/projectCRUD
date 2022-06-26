<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="https://cdn.tailwindcss.com"></script>
   <title>login Data Inn</title>
   <link rel="icon" type="image/x-icon" href="admin/inn.png">
</head>
<body class="bg-gray-100">

   <section class="flex justify-center h-screen">
      <form action="login.php" method="POST" autocomplete="on" class="m-auto">
         <div class="flex flex-col py-12 px-12 bg-white rounded-2xl shadow-xl z-20 content-center">

            <div>
               <h1 class="text-3xl font-bold text-center mb-4">Log in Inn</h1>
            </div>

            <div class="space-y-4">
               <input type="text" name="username" 
                  class="block bg-gray-100 text-sm text-slate-500 py-3 px-4 rounded-lg w-full border border-slate-100 outline-none focus:outline-none focus:ring-1 focus:border-purple-500 focus:ring-purple-500" placeholder="Username" required/>
               <input type="password" name="password" 
                  class="block bg-gray-100 text-sm text-slate-500 py-3 px-4 rounded-lg w-full border border-slate-100 outline-none focus:outline-none focus:ring-1 focus:border-purple-500 focus:ring-purple-500" placeholder="Password" required/>
            </div>

            <div class="text-center mt-6">
               <input type="submit" value="LOGIN" class="py-3 w-64 text-xl text-white bg-purple-400 rounded-2xl cursor-pointer hover:bg-purple-500">
            </div>

         </div>
      </form>

   </section>
   
</body>
</html>