<?php 

     require_once('db.php');



  function getAllUsers()
  {
      $con=getConnection();

      $sql="select * from customerreg";
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

  function getCustomerById($requestid)
  {
      $con=getConnection();

      $sql="select * from customerreg where requestid='{$requestid}'";
      $result=mysqli_query($con,$sql);
     
      $user=mysqli_fetch_assoc($result);
      
      return $user;
      

  }

  function createCustomer($requestid,$customer)
  {
      $con=getConnection();
      
      $first_status="U";
      $sql="insert into customeracc values ('','{$customer['type']}','{$customer['name']}','{$customer['password']}','{$customer['gender']}','{$customer['bg']}','{$customer['dob']}','{$customer['address']}','{$customer['email']}','{$customer['education']}','{$first_status}','','','','{$customer['picture']}' )";
      
     
      if(mysqli_query($con, $sql))
      {
        deleteCustomer($requestid);
        return true;

      }
      else
      {
        return false;
      }
      
      mysqli_close($con);
      

  }

   

  
  
  function deleteCustomer($requestid)
  {
      $con=getConnection();

      $sql="delete from customerreg where requestid='{$requestid}'";
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