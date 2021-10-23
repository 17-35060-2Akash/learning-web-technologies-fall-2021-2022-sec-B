<?php

//session_destroy();
session_start();
 unset($_SESSION['flag']);
 header('location:login.html');


?>