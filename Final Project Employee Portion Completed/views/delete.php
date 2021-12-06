<?php
  
  session_start();
   include('header.php');

      if(isset($_SESSION['flag']))
      {
         $userid=$_SESSION['userid'];
         $username= $_SESSION['username'];    
      }

      if(isset($_GET['requestid']))
      {
            $requestid=$_GET['requestid'];
      }

?>

<?php 


      require_once('../model/customerreglistModel.php');

    
      $data= getCustomerById($requestid);

      
      $accounttype=$data['accounttype'];
      $name=$data['name'];
      $gender=$data['gender'];
      $bloodgroup=$data['bloodgroup'];
      $dob=$data['dob'];
      $address=$data['address'];
      $email=$data['email'];
      $education=$data['education'];
      
      
      /*echo "<pre>";
      print_r($data);*/





?>

<html>
<head>

   <title>Requested Customer profile</title>
</head>
<body>
      <form method="post" action=<?php echo "../controller/approveCheck.php?requestid=".$requestid; ?> >
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
                              <td width="200px" align="center"><a href="customerreglist.php" >Customer Registration</a></td>
                        </tr>
                        <tr height="50px" >
                              <td width="200px" align="center"><a href="customerAccount.php" >Customer Accounts</td>
                        </tr>
                        <tr height="50px" >
                              <td width="200px" align="center"><a href="loanreqlist.php" >Loan Requests</td>
                        </tr>
                        <tr height="50px" >
                              <td width="200px" align="center"><a href="customercomplist.php" >Customer Complaints</td>
                        </tr>
                  </table>

                  <br>
                  <table border="1" align="center">
                        <tr height="50px" >
                              <td width="200px" align="center"><a href="customerreglist.php" >Back</a></td>
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
                        
                        <legend><b>Requested Customer profile</b></legend>
                        <img src="../assets/empty.png" width="150px" height="150px" style="float: right" /><br>
                        <b>Request ID:</b> <?php   echo " ".$requestid;   ?> <br>
                        --------------------<br>
                        <b>User Name:</b> <?php   echo " ".$name;   ?><br>
                        --------------------<br>
                        <b>Gender: </b> <?php   echo " ".$gender;   ?><br>
                        --------------------<br>
                        <b>Blood Group:</b> <?php   echo " ".$bloodgroup;   ?> <br>
                        --------------------<br>
                        <b>Date Of Birth:</b> <?php   echo " ".$dob;   ?><br>
                        --------------------<br>
                        <b>Address: </b> <?php   echo " ".$address;   ?><br>
                        --------------------<br>
                        <b>Email:</b> <?php   echo " ".$email;   ?> <br>
                        --------------------<br>
                        <b>Education: </b> <?php   echo " ".$education;   ?> <br>
                        <br>
                        <br><br>
                        <center>
                           <button><a href=<?php echo "../controller/deleteCheck.php?requestid=".$requestid;  ?> >Delete</a></button><br><br>
                        </center>

                  </fieldset><br>

                  <center>
                  </td>
                  
            </tr>

            <tr height="50px">
                  <td colspan="3" align="center">copyright © 2021</td>
                  
            </tr>
      </table>

      </form>
</body>
</html>

