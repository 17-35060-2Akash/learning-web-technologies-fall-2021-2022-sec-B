<?php
  
  session_start();
   include('header.php');
   require_once('../model/customercomplistModel.php');

      if(isset($_SESSION['flag']))
      {
         $id=$_SESSION['userid'];
         $name= $_SESSION['username'];    
      }

      $datalist= getAllComplaints();


      $_SESSION['reply']=0;
?>

<html>
<head>

	<title>Your Account</title>
</head>
<body>
      <form>
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
                  <td colspan="3" width="300px" align="left">
                        <!-- /////
                  ///// -->
                  <table  align="center" height="100%" width="100%" >
                        <tr >
                              <td align="center">
                                    
                                    <h2>Customer Complaints</h2><br>
                                    <h3></h3>
                                    <table border="1" align="center" width="100%">
                                          <tr>
                                                <th>Complaint Number</th>
                                                <th>Account Number</th>
                                                <th>Complaint Submitted</th>
                                                <th>Response</th>
                                                <th>Time & Date</th>
                                                <th>Operations</th>
                                          </tr>
                                          
                                           <?php   for($i=0;$i<sizeof($datalist);$i++)         {     ?>
                        <tr align="center">
                        <td><?= $datalist[$i]['complainNo'] ?></td>
                        <td><?= $datalist[$i]['accountNo'] ?></td>
                        <td><?= $datalist[$i]['complain'] ?></td>
                        <td><?= $datalist[$i]['response'] ?></td>
                        <td><?= $datalist[$i]['dateandtime'] ?></td>
                        <td>
                              <br>
                              <button><a href="../views/customercomp.php?complainNo=<?= $datalist[$i]['complainNo'] ?>" >Check Complaint</a></button><br><br>

                        </td>
                        
                  </tr>

 <?php } ?> 


                                    </table>
                              </td>
                        </tr>
                        
                  </table>




                  <!-- /////
                  ///// -->

                  </td>
                  
            </tr>

            <tr height="50px">
                  <td colspan="3" align="center">copyright © 2021</td>
                  
            </tr>
      </table>

      </form>
</body>


                        <!-- <fieldset>
                              <legend>Complaints Filed:</legend>
                              <h2><u>Customer Complaints:</u> </h2><br>
                              <ol align="center">
                              <li><a href="customercomp.php">Complaint.</a> <?php echo " Submitted: ".date("h:i:sa d/m/Y");  ?> </li><br>
                              <li><a href="customercomp.php">Complaint.</a><?php echo " Submitted: ".date("h:i:sa d/m/Y");  ?> </li><br>
                              <li><a href="customercomp.php">Complaint.</a><?php echo " Submitted: ".date("h:i:sa d/m/Y");  ?> </li><br>
                              <li><a href="customercomp.php">Complaint.</a><?php echo " Submitted: ".date("h:i:sa d/m/Y");  ?> </li><br>
                        </ol>
                              
                        </fieldset> -->
</html>

