<?php
  
  session_start();
   //include('header.php');
   require_once('../model/customercomplistModel.php');

      $complainNo=$_REQUEST['complainNo'];

      $data= getComplaintById($complainNo);

      if(isset($_REQUEST['submit']))
      {
         $response=$_REQUEST['response'];
         /*echo "<pre>";
         print_r($_REQUEST);*/
      }
         $status=editComplaint($complainNo,$response);
         
         if($status)
          {
            $_SESSION['reply']=1;
            header('location: ../views/customercomp.php?complainNo='.$complainNo);

          }

         
         else
         {
            $_SESSION['reply']=2;
            header('location: ../views/customercomp.php?complainNo='.$complainNo);

         }

         

?>