
<?php
 
 date_default_timezone_set("Asia/Dhaka");
 include('header.php');


?>

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

	<title>e-banking</title>
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
                        <a href="contactmanager.php">Contact Manager</a><br>
                  </th>
                  
            </tr>

            <tr height="350px">
                  <td width="350px"> 
                  <br><br>
                  <br>
                  <table border="1" align="center">
                        
                        <tr height="50px" >
                              <td width="200px" align="center"><a href="mobilebanking.php" >Mobile Banking</a></td>
                        </tr>
                        <tr height="50px" >
                              <td width="200px" align="center"><a href="cardservice.php" >Card Services</a></td>
                        </tr>
                        <tr height="50px" >
                              <td width="200px" align="center"><a href="atm.php">ATM</a></td>
                        </tr>

                        
                  </table>
                  
                  <br>
                  <table border="1" align="center">
                        <tr height="50px" >
                              <td width="200px" align="center"><a href="banking.php" >Back</a></td>
                        </tr>

                        
                  </table>
                  <br>

                  <br>
                  <table border="1" align="center">
                        <tr height="50px" >
                              <td width="200px" align="center"><a href="dashboard.php" >Back To DashBoard</a></td>
                        </tr>

                        
                  </table>

                  <br>
                  </td>
                  <td colspan="3" width="300px" align="left">
                        <!-- /////
                  ///// -->
                  <table  align="center" height="100%" width="100%" >
                        <tr >
                              
                              <td align="center">
                                    <br>
                                    <h2>ATM Booths</h2><br><br>
                                    <a href="boothinfo.php"><img src="../assets/atmbooths.jpg" width="350px" height="250px" style="float: center" /></a>
                              </td>
                              <td align="center">
                                    <br>
                                    <h2>ATM Transactions<br> Reports</h2><br><br>
                                    <a href="boothtran.php"><img src="../assets/atmtran.jpg" width="300px" height="250px" style="float: center" /></a>
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
</html>

