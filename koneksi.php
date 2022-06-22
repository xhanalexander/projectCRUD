<?php
   $server = "localhost";
   $user = "root";
   $pass = "";
   $database = "dbhotel";

   $db = mysqli_connect($server, $user, $pass, $database);

   if (mysqli_connect_error()){
      echo "database failed : " . mysqli_connect_error();
   }
?>