<?php
  
    session_start();
   include('header.php');
   require_once('../model/customerreglistModel.php');

      if(isset($_SESSION['flag']))
      {
         $id=$_SESSION['userid'];
         $name= $_SESSION['username'];    
      }

      $datalist= getAllUsers();

      $_SESSION['approved']=0;
      if($_SESSION['approved']==1)
         {
          $approved=$_SESSION['approved'];
          //echo $invalidlog;

         }
      else if($_SESSION['approved']==2)
      { 

         $approved=$_SESSION['approved'];
      }



?>

<?php

           /*$myfile=fopen('../model/customerreglist.txt','r');
           $data= fread($myfile, filesize('../model/customerreglist.txt'));//for single user
           $myuser=explode('|', $data);*/

           /*echo "<pre>";
           print_r($myuser);*/

            /*$requestid=trim($myuser[0]);
            $accounttype=trim($myuser[1]);
            $username=trim($myuser[2]);*/
             
            
?>

<html>
<head>

	<title>Customer Registration</title>
</head>
<body>
      <form method="" action="" >
           <table border="1" width="80%" align="center">
            <tr height="150px">
                  <th colspan="3" align="right">
                        <img src="../assets/bank_x.png" width="420px" height="150px" style="float: left" /><br>
                        <center>
                        <h2><a href="../controller/logout.php">Logout</a></b></h2>
                        
                        <h3 >ID: <?php   echo " ".$id;   ?> | Name: <?php   echo " ".$name;   ?></h3>
                        </center>
                        
                        <a href="bankemp.php">Employee Home | </a>
                        <!-- <a href="login.html">Login | </a> -->
                        <a href="contactmanager.php">Contact Manager</a><br>
                  </th>
                  
            </tr>

            <tr height="350px">
                  <td width="350px"> 
                  <table border="1" align="center"><br>
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
                              <td width="200px" align="center"><a href="customer.php" >Back</a></td>
                        </tr>

                        
                  </table>
                  
                  <br>
                  <table border="1" align="center">
                        <tr height="50px" >
                              <td width="200px" align="center"><a href="dashboard.php" >Back To DashBoard</a></td>
                        </tr>

                        
                  </table><br>
                  </td>
                  <td colspan="3" width="300px" align="center">
                  <!-- <button><a href="customerAccount.php">See Customer Accounts</a></button><br><br> -->
                  <table border="1" align="center" width="100%">
                  <tr >
                        <th>Request ID</th>
                        <th>Account type</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Blood Group</th>
                        <th>Date of Birth</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Education</th>
                        <th>Photo</th>
                        <th>Operations</th>
                  </tr>
                 

                  <?php   for($i=0;$i<sizeof($datalist);$i++)         {     ?>
                        <tr align="center">
                        <td><?= $datalist[$i]['requestid'] ?></td>
                        <td><?= $datalist[$i]['type'] ?></td>
                        <td><?= $datalist[$i]['name'] ?></td>
                        <td><?= $datalist[$i]['gender'] ?></td>
                        <td><?= $datalist[$i]['bg'] ?></td>
                        <td><?= $datalist[$i]['dob'] ?></td>
                        <td><?= $datalist[$i]['address'] ?></td>
                        <td><?= $datalist[$i]['email'] ?></td>
                        <td><?= $datalist[$i]['education'] ?></td>
                        <td><?= $datalist[$i]['picture'] ?></td>
                        <td>
                              <br>
                              <button><a href=<?php echo "../views/checkcustomer.php?requestid=".$datalist[$i]['requestid'];  ?> >Check</a></button><br>
                              <button><a href=<?php echo "../controller/approveOnce.php?requestid=".$datalist[$i]['requestid'];  ?> >Approve</a></button><br>
                              
                              <button><a href=<?php echo "../views/delete.php?requestid=".$datalist[$i]['requestid'];  ?> >Delete</a></button><br><br>

                        </td>
                  </tr>

 <?php } ?> 

            </table>
                  <!-- -->
                  <!-- -->
                  <!-- -->
                  </td>
                  
            </tr>

            <tr height="50px">
                  <td colspan="3" align="center">copyright © 2021</td>
                  
            </tr>
      </table>

      </form>
      <script type="text/javascript">
            "use strict"

       if(<?=$approved ?>==1)
        {
            <?php $_SESSION['approved']=0;  ?>
            alert("Customer Registration Approved!...!");
        }
        else if(<?=$approved ?>==2)
        {
            <?php $_SESSION['approved']=0;  ?>
            alert("Customer Registration Approved!...!");
        }
        

        

      </script>
</body>
</html>

