<?php
  
   include('header.php');
   require_once('../model/mobilebankingModel.php');

   $datalist= getAllUsers();

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

<?php
 
 date_default_timezone_set("Asia/Dhaka");


?>

<html>
<head>

	<title>Mobile Banking</title>
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
                              <td width="200px" align="center"><a href=<?php echo 'dashboard.php?userid='.$userid.'&username='.$username; ?> >Back To DashBoard</a></td>
                        </tr>

                        
                  </table>
                  </td>
                  <td colspan="3" width="300px" align="left">
                        <!-- /////
                  ///// -->
                  <table  align="center" height="100%" width="100%" >
                        <tr >
                              <td align="center">
                                    
                                    <h2>Mobile Banking</h2><br>
                                    <h3>Banking History</h3>
                                    <!-- <a href=""><img src="../assets/mobilebanking.png" width="300px" height="200px" style="float: center" /></a> -->
                                    <table border="1" align="center" width="100%">
                                          <tr>
                                                <th>Transaction Id</th>
                                                <th>From</th>
                                                <th>To</th>
                                                <th>Amount ($)</th>
                                                <th>Time & Date</th>
                                                <th>Action</th>
                                          </tr>

                           <?php   for($i=0;$i<sizeof($datalist);$i++)         {     ?>
                                                <tr>
                                                <td align="center"><?= $datalist[$i]['transactionid'] ?></td>
                                                <td align="center"><?= $datalist[$i]['senderid'] ?></td>
                                                <td align="center"><?= $datalist[$i]['receiverid'] ?></td>
                                                <td align="center"><?= $datalist[$i]['amount'] ?></td>
                                                <td align="center"><?= $datalist[$i]['time&date'] ?></td>
                                                <td>
                                                      <button><a href="mobilebanking.php">SeeDetails</a></button>
                                                      <!-- <a href="Mark.php">Delete</a> -->
                                                </td>
                                          </tr>

                          <?php } ?> 
                                        
                                          
                                    </table>
                                    <br><br><br>
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

