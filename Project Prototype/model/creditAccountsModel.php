<?php 

     require_once('db.php');



  function getAllCreditaccounts()
  {
      $con=getConnection();

      $sql="select * from creditacc";
      $result=mysqli_query($con,$sql);////for taking just all the data not the array
      $datalist=[];
      while($data=mysqli_fetch_assoc($result))
      {
        array_push($datalist, $data);
      }
      //echo "<pre>";
      //print_r($datalist);
      
      return $datalist;
      

  }

  function getCreditAccById($cardnumber)
  {
      $con=getConnection();

      $sql="select * from creditacc where cardnumber='{$cardnumber}'";
      $result=mysqli_query($con,$sql);
     
      $user=mysqli_fetch_assoc($result);
      
      return $user;
      

  }

  function searchCreditById($cardnumber)
  {
      $con=getConnection();

      $sql="select * from creditacc where cardnumber like '%{$cardnumber}%'";
      $result=mysqli_query($con,$sql);
      $datalist=[];
      while($data=mysqli_fetch_assoc($result))
      {
        array_push($datalist, $data);
      }
      //echo "<pre>";
      //print_r($datalist);
      
      return $datalist;
      

  }

  function editCreditAcc($cardnumber,$reason)
  {
      $con=getConnection();
      $customer=getCreditAccById($cardnumber);
      //print_r($customer);
      $freeze="F";
      $unfreeze="U"; 


      if($customer['state']=="U")
      {
        $sql="update creditacc set state='{$freeze}', reason='{$reason}' where cardnumber='{$cardnumber}'";
        
      }
      else
      {
        $sql="update creditacc set state='{$unfreeze}',reason='{$reason}' where cardnumber='{$cardnumber}'";
      }
      
      if(mysqli_query($con,$sql))
      {

        return true;
      }
      else
      {
        return false;
      }
      

  }

?>