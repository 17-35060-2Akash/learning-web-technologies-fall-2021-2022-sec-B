<?php 
     
     require_once('../model/creditAccountsModel.php');

     
      $searchlist=[];
     
      $cardnumber =$_REQUEST['cardnumber'];
      $searchlist=searchCreditById($cardnumber);

      $json=json_encode($searchlist);
      echo $json;
      
      
      /*echo "<pre>";
      print_r($searchlist);*/
     

     


      

?>