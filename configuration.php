<?php
   $server = "localhost";
   $user = "root";
   $pass = "";
   $database = "";

   $db = mysqli_connect($server, $user, $pass, $database);

   if (!$db) {
      die("Connection failed: " . mysqli_connect_error());
   }
?>