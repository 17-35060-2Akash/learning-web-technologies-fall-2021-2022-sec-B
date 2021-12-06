<?php 

     require_once('productModel.php');
     /*echo "<pre>";
     print_r($_REQUEST);*/

			  	$id=$_GET['id'];

                


	      	$status=deleteProduct($id);

	      	if($status)
	      	{
	      		header('location: display.php');
	      	}


  

?> 

