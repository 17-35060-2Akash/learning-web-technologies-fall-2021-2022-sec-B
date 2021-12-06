<?php
  
  session_start();
   include('../views/header.php');
   require_once('../model/debitAccountsModel.php');

     /* if(isset($_SESSION['flag']))
      {
         $id=$_SESSION['userid'];
         $name= $_SESSION['username'];    
      }*/

      if(isset($_REQUEST['freeze']) && isset($_REQUEST['reason']))
      {
          /*echo "<pre>";
          print_r($_REQUEST);*/
          $cardnumber=$_REQUEST['cardnumber'];
          $state=$_REQUEST['state'];
          $reason=$_REQUEST['reason'];
          $status=editDebitAcc($cardnumber,$reason);
           

          if($status)
          {
            header('location: ../views/debitFreeze.php?cardnumber='.$cardnumber);

          }

      }
      else
      {
         header('location: ../views/debitFreeze.php?cardnumber='.$cardnumber);

      }
      

      
      //
      //

     if(isset($_REQUEST['unfreeze']))
      {
          /*echo "<pre>";
          print_r($_REQUEST);*/
          $cardnumber=$_REQUEST['cardnumber'];
          $state=$_REQUEST['state'];
          $reason="--";
          $status=editDebitAcc($cardnumber,$reason);
           

          if($status)
          {
            header('location: ../views/debitFreeze.php?cardnumber='.$cardnumber);

          }

      }
      else
      {
         header('location: ../views/debitFreeze.php?cardnumber='.$cardnumber);

      }

?>