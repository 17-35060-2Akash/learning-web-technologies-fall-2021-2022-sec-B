<?php
  
   include('header.php');

?>

<html>
<head>

	<title>Customer Complaint</title>
</head>
<body>
      <form>
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
                              <td width="200px" align="center"><a href="customerreg.php">Customer Registration</a></td>
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
                              <td width="200px" align="center"><a href="customercomplist.php">Back</a></td>
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
                        <fieldset>
                              <legend>Complaints Filed: </legend>
                              <h2><u>Complaint No: no XXX </u> </h2><br>
                              
                              <?php echo " Date: ".date("h:i:sa  d/m/Y");  ?> <br><br>
                              <b><u>Account No :</u></b> xxx-xxxx-x<br>
                              <b><u>Account Name :</u></b> Nazia Heeme.<br>
                              <b><u>Account Type :</u></b> Checkings Account.<br><br>

                              <b><u>Email:</u></b> naziaheeme@gmail.com<br><br>
                              <b>complaint:   <center></b><textarea>I'm facing an issue regarding login. It's been four days.
                                                  can you please tell me what's the problem?
                                                  Regards, 
                                                  Nazia.</textarea><br></center>
                              <b>Reply:   <center></b><textarea width="500px"></textarea><br><br>
                                    <input type="submit" name="submit" value="Send Response">
                              </center>





                              <br>
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

