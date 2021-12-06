<?php
  
  session_start();
   include('../views/header.php');
   require_once('../model/creditAccountsModel.php');

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
          $status=editCreditAcc($cardnumber,$reason);
           

          if($status)
          {
            header('location: ../views/creditFreeze.php?cardnumber='.$cardnumber);

          }

      }
      else
      {
         header('location: ../views/creditFreeze.php?cardnumber='.$cardnumber);

      }
      

      
      //
      //

     if(isset($_REQUEST['unfreeze']) && isset($_REQUEST['reason']))
      {
          /*echo "<pre>";
          print_r($_REQUEST);*/
          $cardnumber=$_REQUEST['cardnumber'];
          $state=$_REQUEST['state'];
          $reason="--";
          $status=editCreditAcc($cardnumber,$reason);
           

          if($status)
          {
            header('location: ../views/creditFreeze.php?cardnumber='.$cardnumber);

          }

      }
      else
      {
         header('location: ../views/creditFreeze.php?cardnumber='.$cardnumber);

      }

?>