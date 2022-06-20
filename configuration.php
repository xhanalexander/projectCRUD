<?php
   $server = "localhost";
   $user = "root";
   $pass = "";
   $database = "dbhotel";

   $db = mysqli_connect($server, $user, $pass, $database);

   if (!$db) {
      die("Connection failed: " . mysqli_connect_error());
   } else {
      // echo "<h1>Database Connected successfully</h1>";
   }
?>