<?php 
     
     require_once('../model/customeraccModel.php');

     
      $searchlist=[];
     
      $myid= $_REQUEST['myid'];
      $searchlist=searchCustomerById($myid);

      $json=json_encode($searchlist);
      echo $json;
      
      /*echo "<pre>";
      print_r($searchlist);*/
     

     


      

?>