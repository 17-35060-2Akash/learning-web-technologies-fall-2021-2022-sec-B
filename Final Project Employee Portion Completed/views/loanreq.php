<?php
  
  session_start();
   include('header.php');

      if(isset($_SESSION['flag']))
      {
         $userid=$_SESSION['userid'];
         $username= $_SESSION['username'];    
      }

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
                        <h3 >ID: <?php   echo " ".$userid;   ?> | Name: <?php   echo " ".$username;   ?></h3>
                        </center>
                        <br><br>
                        <a href="bankemp.php">Employee Home | </a>
                        <!-- <a href="login.html">Login | </a> -->
                        <a href="contactmanager.php">Contact Manager</a><br>
                  </th>
                  
            </tr>

            <tr height="350px">
                  <td width="350px"> 
                  <table border="1" align="center"><br>
                        <tr height="50px" >
                              <td width="200px" align="center"><a href="customerreg.php">Customer Registration</a></td>
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
                              <td width="200px" align="center"><a href="loanreqlist.php">Back</a></td>
                        </tr>

                        
                  </table>
                  <br>
                  <br>
                  <table border="1" align="center">
                        <tr height="50px" >
                              <td width="200px" align="center"><a href="dashboard.php">Back To DashBoard</a></td>
                        </tr>

                        
                  </table><br>
                  </td>
                  <td colspan="3" width="300px" align="left">
                        <fieldset>
                              <legend>Loans Applied:</legend>
                              <h2><u>Applied Loan Requests:</u> </h2><br>
                              
                              <?php echo " Date: ".date("h:i:sa  d/m/Y");  ?> <br><br>
                              <img src="../assets/loan.jpg" width="420px" height="150px" style="float: left" /><br>
                        </fieldset>
                              <br>
                              <center>
                                    <button>Send To Manager</button>
                              </center>

                  </td>
                  
            </tr>

            <tr height="50px">
                  <td colspan="3" align="center">copyright © 2021</td>
                  
            </tr>
      </table>

      </form>
</body>
</html>

