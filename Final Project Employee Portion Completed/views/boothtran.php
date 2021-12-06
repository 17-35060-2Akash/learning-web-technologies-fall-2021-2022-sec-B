<?php
  
  session_start();
   include('header.php');
   require_once('../model/boothtranlistModel.php');

      if(isset($_SESSION['flag']))
      {
         $id=$_SESSION['userid'];
         $name= $_SESSION['username'];    
      }

      $datalist= getAllTransactions();

?>

<html>
<head>

	<title>banking</title>
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
                  <br><br>
                  <br>
                  <table border="1" align="center">
                        
                        <tr height="50px" >
                              <td width="200px" align="center"><a href="mobilebanking.php">Mobile Banking</a></td>
                        </tr>
                        <tr height="50px" >
                              <td width="200px" align="center"><a href="cardservice.php">Card Services</a></td>
                        </tr>
                        <tr height="50px" >
                              <td width="200px" align="center"><a href="atm.php">ATM</a></td>
                        </tr>

                        
                  </table>
                  <br>
                  <table border="1" align="center">
                        <tr height="50px" >
                              <td width="200px" align="center"><a href="atm.php">Back</a></td>
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
                        <!-- /////
                  ///// -->
                  <table  align="center" height="100%" width="100%" >
                        <tr >
                              <td align="center">
                                    
                                    <h2>ATM Banking</h2><br>
                                    <h3>ATM History</h3>
                                    <!-- <a href=""><img src="../assets/mobilebanking.png" width="300px" height="200px" style="float: center" /></a> -->
                                    <table border="1" align="center" width="100%">
                                          <tr>
                                                <th>Transaction Id</th>
                                                <th>From(ATM ID)</th>
                                                <th>To</th>
                                                <th>Branch Name</th>
                                                <th>Amount ($)</th>
                                                <th>Time & Date</th>
                                                <th>Operations</th>
                                          </tr>
                                          
                                           <?php   for($i=0;$i<sizeof($datalist);$i++)         {     ?>
                        <tr align="center">
                        <td><?= $datalist[$i]['transactionid'] ?></td>
                        <td><?= $datalist[$i]['fromid'] ?></td>
                        <td><?= $datalist[$i]['toid'] ?></td>
                        <td><?= $datalist[$i]['branchname'] ?></td>
                        <td><?= $datalist[$i]['amount'] ?></td>
                        <td><?= $datalist[$i]['timeanddate'] ?></td>
                        <td>
                              <br>
                              <button><a href="">Inspect</a></button><br><br>

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
</html>

