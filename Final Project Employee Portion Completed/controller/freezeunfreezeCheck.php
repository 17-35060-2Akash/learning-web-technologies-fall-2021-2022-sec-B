<?php
  
  session_start();
   include('../views/header.php');
   require_once('../model/customeraccModel.php');

    if(isset($_REQUEST['accountid']))
    {
      $accountid=$_GET['accountid'];
      $status=editCustomer($accountid);
      header('location: ../views/freeze.php?accountid='.$accountid);

    }  
    else
    {
      echo "status not changed! ";
    }
      

      /*$datalist= getAllCustomers();*/

      



?>