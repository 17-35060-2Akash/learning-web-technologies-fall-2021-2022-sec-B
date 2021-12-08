<?php 
     
     require_once('../model/userlistModel.php');

     
      
     
      $id= $_REQUEST['userid'];
      $password=$_REQUEST['password'];
      $status=validatePass($id,$password);

      
      echo $status;
      
      /*echo "<pre>";
      print_r($searchlist);*/
     

     


      

?>