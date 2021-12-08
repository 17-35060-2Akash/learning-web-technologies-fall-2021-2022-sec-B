<?php
  
  session_start();
   include('header.php');

      if(isset($_SESSION['flag']))
      {
         $userid=$_SESSION['userid'];
         $username= $_SESSION['username'];    
      }

?>

<?php 


      require_once('../model/userlistModel.php');

    
      $data= getUserById($userid);

      $id=$data['id'];
      $name=$data['username'];
      $gender=$data['gender'];
      $bg=$data['bg'];
      $dob=$data['dob'];
      $address=$data['address'];
      $email=$data['email'];
      $education=$data['education'];
      $designation=$data['designation'];
      $name=$data['username'];
      $picture=$data['picture'];
      
      /*echo "<pre>";
      print_r($data);*/





?>

<html>
<head>

	<title>See profile</title>
</head>
<body>
      <form>
           <table border="1" width="80%" align="center">
            <tr height="150px">
                  <th colspan="3" align="right">
                        <img src="../assets/bank_x.png" width="420px" height="150px" style="float: left" /><br>
                        <center>
                        <h2><a href="../controller/logout.php">Logout</a></b></h2>
                        
                        <h3 >ID: <?php   echo " ".$userid;   ?> | Name: <?php   echo " ".$username;   ?></h3>
                        </center>
                        
                        <a href="bankemp.php">Employee Home | </a>
                        <!-- <a href="login.html">Login | </a> -->
                        <a href="contactmanager.php">Contact Manager</a>
                  </th>
                  
            </tr>

            <tr height="350px">
                  <td width="350px"> 
                  <table border="1" align="center">
                        <tr height="50px" >
                              <td width="200px" align="center"> <a href="seeprofile.php" >See Profile</a></td>
                        </tr>
                        <tr height="50px" >
                              <td width="200px" align="center"><a href="updateprofile.php" >Update Profile</td>
                        </tr>
                        <tr height="50px" >
                              <td width="200px" align="center"><a href="changepass.php" >Change Password</td>
                        </tr>
                        
                  </table>
                  <br>
                  <table border="1" align="center">
                        <tr height="50px" >
                              <td width="200px" align="center"><a href="dashboard.php" >Back To DashBoard</a></td>
                        </tr>

                        
                  </table>


                  </td>
                  <td colspan="3" width="300px" align="left">
                        <br>
                  <fieldset>
                        
                        <legend><b>Employee Profile</b></legend>
                        <img src="../assets/<?=$picture ?>" width="150px" height="150px" style="float: right" /><br>
                        <b>ID:</b> <?php   echo " ".$id;   ?> <br>
                        --------------------<br>
                        <b>User Name:</b> <?php   echo " ".$name;   ?><br>
                        --------------------<br>
                        <b>Gender: </b> <?php   echo " ".$gender;   ?><br>
                        --------------------<br>
                        <b>Blood Group:</b> <?php   echo " ".$bg;   ?> <br>
                        --------------------<br>
                        <b>Date Of Birth:</b> <?php   echo " ".$dob;   ?><br>
                        --------------------<br>
                        <b>Address: </b> <?php   echo " ".$address;   ?><br>
                        --------------------<br>
                        <b>Email:</b> <?php   echo " ".$email;   ?> <br>
                        --------------------<br>
                        <b>Education: </b> <?php   echo " ".$education;   ?> <br>
                        --------------------<br>
                        <b>Designation: </b> <?php   echo " ".$designation;   ?> <br>
                        --------------------<br><br><br>

                  </fieldset>
                  </td>
                  
            </tr>

            <tr height="50px">
                  <td colspan="3" align="center">copyright © 2021</td>
                  
            </tr>
      </table>

      </form>
</body>
</html>

