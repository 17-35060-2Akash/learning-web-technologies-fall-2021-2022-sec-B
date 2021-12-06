<?php 
     
     require_once('../model/debitAccountsModel.php');

     
      $searchlist=[];
     
      $cardnumber =$_REQUEST['cardnumber'];
      $searchlist=searchDebitById($cardnumber);

      $json=json_encode($searchlist);
      echo $json;
      
      /*echo "<pre>";
      print_r($searchlist);*/
     

     


      

?>