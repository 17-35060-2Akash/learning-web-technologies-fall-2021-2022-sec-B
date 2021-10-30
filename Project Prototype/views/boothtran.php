<?php
 
 date_default_timezone_set("Asia/Dhaka");
  include('header.php');


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
                                          </tr>
                                          <tr>
                                                <td align="center">00123</td>
                                                <td align="center">8521-23</td>
                                                <td align="center">8297-4751-03</td>
                                                <td align="center">Jashore</td>
                                                <td align="center">85</td>
                                                <td align="center">11:30pm 02/12/2021</td>
                                          </tr>
                                          <tr>
                                                <td align="center">5285</td>
                                                <td align="center">9661-60</td>
                                                <td align="center">8521-0031-23</td>
                                                <td align="center">Chittagong</td>
                                                <td align="center">12</td>
                                                <td align="center">09:34pm 02/12/2021</td>
                                          </tr>
                                          <tr>
                                                <td align="center">6485</td>
                                                <td align="center">4526-75</td>
                                                <td align="center">9785-4751-03</td>
                                                <td align="center">Dhaka</td>
                                                <td align="center">856</td>
                                                <td align="center">08:31pm 02/12/2021</td>
                                          </tr>
                                          <tr>
                                                <td align="center">85254</td>
                                                <td align="center">4521-96</td>
                                                <td align="center">8531-4751-03</td>
                                                <td align="center">Jashore</td>
                                                <td align="center">451</td>
                                                <td align="center">06:14pm 02/12/2021</td>
                                          </tr>
                                          <tr>
                                                <td align="center">5825</td>
                                                <td align="center">9785-03</td>
                                                <td align="center">6645-4526-75</td>
                                                <td align="center">Sylhet</td>
                                                <td align="center">857</td>
                                                <td align="center">11:59am 02/12/2021</td>
                                          </tr>
                                          <tr>
                                                <td align="center">6695</td>
                                                <td align="center">4751-03</td>
                                                <td align="center">7855-4521-96</td>
                                                <td align="center">Jashore</td>
                                                <td align="center">96</td>
                                                <td align="center">10:48am 02/12/2021</td>
                                          </tr>
                                          <tr>
                                                <td align="center">7825</td>
                                                <td align="center">8297-03</td>
                                                <td align="center">5236-8521-23</td>
                                                <td align="center">Chittagong</td>
                                                <td align="center">093</td>
                                                <td align="center">08:20am 02/12/2021</td>
                                          </tr>
                                          <tr>
                                                <td align="center">00123</td>
                                                <td align="center">8521-23</td>
                                                <td align="center">8297-4751-03</td>
                                                <td align="center">Dhaka</td>
                                                <td align="center">85</td>
                                                <td align="center">11:30pm 02/12/2021</td>
                                          </tr>
                                          <tr>
                                                <td align="center">5285</td>
                                                <td align="center">9661-60</td>
                                                <td align="center">8521-0031-23</td>
                                                <td align="center">Jashore</td>
                                                <td align="center">12</td>
                                                <td align="center">09:34pm 02/12/2021</td>
                                          </tr>
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

