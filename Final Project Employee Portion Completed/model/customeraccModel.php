<?php 

     require_once('db.php');



  function getAllCustomers()
  {
      $con=getConnection();

      $sql="select * from customeracc";
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

  function getCustomerById($accountid)
  {
      $con=getConnection();

      $sql="select * from customeracc where accountid='{$accountid}'";
      $result=mysqli_query($con,$sql);
     
      $user=mysqli_fetch_assoc($result);
      
      return $user;
      

  }

  function searchCustomerById($accountid)
  {
      $con=getConnection();

      $sql="select * from customeracc where accountid like '%{$accountid}%'";
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

  function editCustomer($accountid)
  {
      $con=getConnection();
      $customer=getCustomerById($accountid);
      $freeze="F";
      $unfreeze="U";

      if($customer['state']=="U")
      {
        $sql="update customeracc set state='{$freeze}' where accountid='{$accountid}'";
      }
      else
      {
        $sql="update customeracc set state='{$unfreeze}' where accountid='{$accountid}'";
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