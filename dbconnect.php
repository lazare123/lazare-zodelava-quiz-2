<?php
   $server = "localhost";
   $user = "root";
   $password = "";
   $dbname = "flight";

   $name="";
   $country="";
   $city="";
   $code="";
   $timezone="";
   $offairname="";
   $landairname="";
   $offtime="";
   $arrival="";



   $connection = mysqli_connect($server, $user, $password, $dbname);
   // var_dump($connection);
   if(!$connection){
      die ("Connection Error!!!");
   }
?>