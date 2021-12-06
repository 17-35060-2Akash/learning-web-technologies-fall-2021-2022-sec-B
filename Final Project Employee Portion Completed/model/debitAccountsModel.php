<?php 

     require_once('db.php');



  function getAllDebitaccounts()
  {
      $con=getConnection();

      $sql="select * from debitacc";
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

  function getDebitAccById($cardnumber)
  {
      $con=getConnection();

      $sql="select * from debitacc where cardnumber='{$cardnumber}'";
      $result=mysqli_query($con,$sql);
     
      $user=mysqli_fetch_assoc($result);
      
      return $user;
      

  }

  function searchDebitById($cardnumber)
  {
      $con=getConnection();

      $sql="select * from debitacc where cardnumber like '%{$cardnumber}%'";
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

  function editDebitAcc($cardnumber,$reason)
  {
      $con=getConnection();
      $creditcustomer=getDebitAccById($cardnumber);
      //print_r($customer);
      $freeze="F";
      $unfreeze="U"; 


      if($creditcustomer['state']=="U")
      {
        $sql="update debitacc set state='{$freeze}', reason='{$reason}' where cardnumber='{$cardnumber}'";
        
      }
      else if($creditcustomer['state']=="F")
      {
        $sql="update debitacc set state='{$unfreeze}',reason='{$reason}' where cardnumber='{$cardnumber}'";
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