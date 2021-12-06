<?php

//session_start();

   //if(isset($_SESSION['flag'])) 

   if(!isset($_COOKIE['flag']))
   {
      header('location: login.php'); 
   }

 ?>   
