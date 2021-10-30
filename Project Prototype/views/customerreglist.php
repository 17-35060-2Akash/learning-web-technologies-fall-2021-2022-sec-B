<?php
  
   include('header.php');

?>

<?php

           $myfile=fopen('../model/customerreglist.txt','r');
           $data= fread($myfile, filesize('../model/customerreglist.txt'));//for single user
           $myuser=explode('|', $data);

           /*echo "<pre>";
           print_r($myuser);*/

            $requestid=trim($myuser[0]);
            $accounttype=trim($myuser[1]);
            $username=trim($myuser[2]);


      

             
            
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
                        
                        </center>
                        <br><br>
                        <a href="bankemp.php">Employee Home | </a>
                        <!-- <a href="login.html">Login | </a> -->
                        <a href="contactmanager.php">Contact Manager</a><br>
                  </th>
                  
            </tr>

            <tr height="350px">
                  <td width="350px"> 
                  <table border="1" align="center">
                        <tr height="50px" >
                              <td width="200px" align="center"><a href="customerreglist.php">Customer Registration</a></td>
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
                              <td width="200px" align="center"><a href="customer.php">Back</a></td>
                        </tr>

                        
                  </table>
                  <br>

                  <br>
                  <table border="1" align="center">
                        <tr height="50px" >
                              <td width="200px" align="center"><a href="dashboard.php">Back To DashBoard</a></td>
                        </tr>

                        
                  </table>
                  </td>
                  <td colspan="3" width="300px" align="left">
                  <!-- -->
                  <!-- -->
                  <!-- -->
                  <table border="1" align="center" width="100%">
                  <tr>
                        <th>Request ID</th>
                        <th>Account type</th>
                        <th>Name</th>
                        <th>Operation</th>
                  </tr>
                  <tr align="center">
                        <td><?php echo $requestid; ?></td>
                        <td><?php echo $accounttype; ?></td>
                        <td><?php echo $username; ?></td>
                        <td><button><a href=<?php echo "../views/customerreg.php?requestid=".$requestid;  ?> >Check</a></button><input type="submit" name="delete" value="Delete"></td>
                  </tr>
                  <tr align="center">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><button><a href=<?php echo "../views/customerreg.php?requestid=".$requestid;  ?> >Check</a></button><input type="submit" name="delete" value="Delete"></td>
                  </tr>
                  <tr align="center">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><button><a href=<?php echo "../views/customerreg.php?requestid=".$requestid;  ?> >Check</a></button><input type="submit" name="delete" value="Delete"></td>
                  </tr>

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
</body>
</html>

