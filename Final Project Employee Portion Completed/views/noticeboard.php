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
                        
                        <a href="bankemp.php">Employee Home | </a>
                        <!-- <a href="login.html">Login | </a> -->
                        <a href="contactmanager.php">Contact Manager</a>
                        <br>
                  </th>
                  
            </tr>

            <tr height="350px">
                  <td width="350px"> 
                  <br><br>
                  <br>
                  <table border="1" align="center">
                        <tr height="50px" >
                              <td width="200px" align="center"><a href="dashboard.php" >Back </a></td>
                        </tr>

                        
                  </table>
                  <br>
                  <table border="1" align="center">
                        <tr height="50px" >
                              <td width="200px" align="center"><a href="dashboard.php" >Back To DashBoard</a></td>
                        </tr>

                        
                  </table>
                  </td>
                  <td colspan="3" width="300px" align="left">
                        <h2><u>Bank X Notice For Employees</u> </h2><br>
                        <ol align="center">
                              <li><a href="notice.php">Overtime for Employees.</a> <?php echo " updated: ".date("h:i:sa d/m/Y");  ?> </li><br>
                              <li><a href="notice.php">Security GuideLines.</a><?php echo " updated: ".date("h:i:sa d/m/Y");  ?> </li><br>
                              <li><a href="notice.php">Promotion Targets.</a><?php echo " updated: ".date("h:i:sa d/m/Y");  ?> </li><br>
                              <li><a href="notice.php">Memorandum.</a><?php echo " updated: ".date("h:i:sa d/m/Y");  ?> </li><br>
                        </ol>

                        <!-- <img src="../assets/notice.png" width="420px" height="150px" style="float: left" /><br> -->

                  </td>
                  
            </tr>

            <tr height="50px">
                  <td colspan="3" align="center">copyright © 2021</td>
                  
            </tr>
      </table>

      </form>
</body>
</html>

