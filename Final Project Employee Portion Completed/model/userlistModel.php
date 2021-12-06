<?php 

     require_once('db.php');

  function validate($userid,$username, $password)
  {
            $con=getConnection();

            $sql="select * from userlist where id='{$userid}'and username='{$username}' and password='{$password}' ";

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

      $sql="select * from userlistuserlist";
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

      $sql="select * from userlist where id='{$id}'";
      $result=mysqli_query($con,$sql);
     
      $user=mysqli_fetch_assoc($result);
      
      return $user;
      

  }

  


   function createUser($user)
  {
      $con=getConnection();

      $sql="insert into userlist values ('','{$user['username']}','{$user['password']}','{$user['gender']}','{$user['bloodgroup']}','{$user['dob']}','{$user['address']}','{$user['email']}','{$user['education']}','{$user['designation']}','{$user['picture']}' )";
      
     
      if(mysqli_query($con, $sql))
      {
        return true;
      }
      else
      {
        return false;
      }
      
      mysqli_close($con);
      

  }

  
  function editUser($user)
  {
      $con=getConnection();
      //$usernew=getUserById($userprev['userid']);
      //echo $user['education'];

      $sql="update userlist set username='{$user['username']}',gender='{$user['gender']}',bg='{$user['bg']}',dob='{$user['dob']}',address='{$user['address']}',email='{$user['email']}',education='{$user['education']}',designation='{$user['designation']}',picture='{$user['picture']}' where id='{$user['userid']}'";
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

      $sql="delete from userlist where id='{$id}'";
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