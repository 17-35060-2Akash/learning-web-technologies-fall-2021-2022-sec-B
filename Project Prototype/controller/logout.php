<?php

//session_destroy();
//session_start();
 //unset($_SESSION['flag']);
 setcookie('flag','true',time()-10,'/');
 header('location:../views/bankemp.php');


?>