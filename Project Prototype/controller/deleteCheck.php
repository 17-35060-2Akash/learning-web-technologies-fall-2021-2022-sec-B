<?php 
 
	include('header.php');
    require_once('../model/customerreglistModel.php');

   if($_GET['requestid'])
   {
   	$requestid=$_GET['requestid'];

   	$status=deleteCustomer($requestid);
   	header("location: ../views/customerreglist.php" );

   }
?>