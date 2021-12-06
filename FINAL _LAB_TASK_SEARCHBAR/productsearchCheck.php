<?php 
     
     require_once('productModel.php');

     
      $searchlist=[];
     
      $name= $_REQUEST['name'];
      $searchlist=getProductByName($name);

      $json=json_encode($searchlist);
      echo $json;
      
      /*echo "<pre>";
      print_r($searchlist);*/
     

     


      

?>