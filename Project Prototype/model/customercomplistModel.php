<?php 

     require_once('db.php');



  function getAllComplaints()
  {
      $con=getConnection();

      $sql="select * from customercomp";
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

  function getComplaintById($complainNo)
  {
      $con=getConnection();

      $sql="select * from customercomp where complainNo='{$complainNo}'";
      $result=mysqli_query($con,$sql);
     
      $user=mysqli_fetch_assoc($result);
      
      return $user;
      

  }

  function editComplaint($complainNo,$response)
  {
      $con=getConnection();
      
      
        $sql="update customercomp set response='{$response}' where complainNo='{$complainNo}'";
        
      
      
      if(mysqli_query($con,$sql))
      {

        return true;
      }
      else
      {
        return false;
      }
      

  }

/*
  function createCustomer($requestid,$customer)
  {
      $con=getConnection();
      
      $first_status="U";
      $sql="insert into customeracc values ('','{$customer['accounttype']}','{$customer['name']}','{$customer['gender']}','{$customer['bloodgroup']}','{$customer['dob']}','{$customer['address']}','{$customer['email']}','{$customer['education']}','{$first_status}' )";
      
     
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
*/

?>