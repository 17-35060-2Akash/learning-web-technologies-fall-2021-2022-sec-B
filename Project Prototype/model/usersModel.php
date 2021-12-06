<?php 

     require_once('db.php');

  function validate($username, $password)
  {
            $con=getConnection();

            $sql="select * from users where username='{$username}' and password='{$password}' ";

            $result=mysqli_query($con,$sql);
            //var_dump($result); 
            $user=mysqli_fetch_assoc($result);

            if($user!=null)
            {
              return true;
            }
            else
            {
              return false;
            }

            mysqli_close($con);
  }

  function getAllUsers()
  {
      $con=getConnection();

      $sql="select * from users";
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

  function getUserById($id)
  {
      $con=getConnection();

      $sql="select * from users where id='{$id}'";
      $result=mysqli_query($con,$sql);
     
      $user=mysqli_fetch_assoc($result);
      
      return $user;
      

  }

   function createUser($user)
  {
      $con=getConnection();

      $sql="insert into users values ('','{$user['username']}','{$user['password']}','{$user['email']}','{$user['type']}')";
     
      
     
      if(mysqli_query($con,$sql))
      {
        return true;
      }
      else
      {
        return false;
      }
      
      
      

  }

  
  function editUser($id)
  {
      $con=getConnection();
      $user=getUserById($id);

      $sql="update users set username='{$user['username']}',password='{$user['password']}',email='{$user['email']}',type='{$user['type']}'";
      if(mysqli_query($con,$sql))
      {
        return true;
      }
      else
      {
        return false;
      }
      

  }

  function deleteUser($id)
  {
      $con=getConnection();

      $sql="delete from users where id='{$id}'";
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