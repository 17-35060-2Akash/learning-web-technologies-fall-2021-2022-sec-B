<?php 
     
     require_once('../model/userlistModel.php');

     
      
     
      $id= $_REQUEST['userid'];
      $password=$_REQUEST['password'];
      $status=updatePass($id,$password);
       
       if($status)
       {
          echo "true";
       }
       else
       {
          echo "false";
       }

       
      
       
      
      
      
      /*echo "<pre>";
      print_r($searchlist);*/
     

     


      

?>