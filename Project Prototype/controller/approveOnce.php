<?php 
   
    session_start();
   include('header.php');
   require_once('../model/customerreglistModel.php');

   if($_GET['requestid'])
   {
   	$requestid=$_GET['requestid'];
   	$customer=getCustomerById($requestid);

   	/*$requestid=$customer['requestid'];
   	$accounttype=$customer['accounttype'];
   	$name=$customer['name'];
   	$gender=$customer['gender'];
   	$bloodgroup=$customer['bloodgroup'];
   	$dob=$customer['dob'];
   	$address=$customer['address'];
   	$email=$customer['email'];
   	$education=$customer['education'];*/

   	

   	


   }

      $status=createCustomer($requestid,$customer);
   	

   if($status)
		{
			$_SESSION['approved']=2;
			header('location: ../views/customerreglist.php');
			
			//header('location: test.php');
		}
		else
		{
			echo "Please Try Again!";
		}



?>