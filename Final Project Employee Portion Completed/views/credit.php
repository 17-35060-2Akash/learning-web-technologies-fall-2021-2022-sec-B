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

      <title>Card Services</title>
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
                        <br>
                        <a href="bankemp.php">Employee Home | </a>
                        <!-- <a href="login.html">Login | </a> -->
                        <a href="contactmanager.php">Contact Manager</a><br><br>
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
                              <td width="200px" align="center"><a href="cardservice.php">Back</a></td>
                        </tr>

                        
                  </table>
                  <br>
                  
                  <table border="1" align="center">
                        <tr height="50px" >
                              <td width="200px" align="center"><a href="dashboard.php">Back To DashBoard</a></td>
                        </tr>

                        
                  </table>
                  <br>
                  </td>
                  <td colspan="3" width="300px" align="left">
                  <!-- /////
                  ///// -->
                  <table  align="center" height="100%" width="100%" >
                       
                        <tr >
                              <td>
                                    <fieldset>
                              <legend><b>Credit Card</b></legend>
                              <br><br>
                              <b> Enter Card Number :   </b><input type="email" name="email" value="" placeholder="something@anything.com"><br><br>
                              <b> Enter Account Number :   </b><input type="text" name="username" value="" placeholder="xxxx-xxxx-xx"><br><br>
                              <b> Enter Account Holders Name :   </b><input type="text" name="accholder" value="" ><br><br>
                              <b> Reason :   </b><input type="text" name="reason" value="" placeholder="Specify Reason" ><br>
                              _____________________________________<br><br><br>
                              <center>
                              <input type="submit" name="freeze" value="Freeze" >
                              <input type="submit" name="unfreeze" value="Unfreeze"><br>
                              </center>
                          </fieldset>
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

