<?php
  
   include('header.php');

?>

<html>
<head>

	<title>See profile</title>
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
                        <br><br><br>
                        <a href="bankemp.php">Employee Home | </a>
                        <!-- <a href="login.html">Login | </a> -->
                        <a href="contactmanager.php">Contact Manager</a>
                  </th>
                  
            </tr>

            <tr height="350px">
                  <td width="350px"> 
                  <table border="1" align="center">
                        <tr height="50px" >
                              <td width="200px" align="center"><a href="seeprofile.php">See Profile</a></td>
                        </tr>
                        <tr height="50px" >
                              <td width="200px" align="center"><a href="updateprofile.php" >Update Profile</td>
                        </tr>
                        
                  </table>
                  <br>
                  <table border="1" align="center">
                        <tr height="50px" >
                              <td width="200px" align="center"><a href="dashboard.php">Back To DashBoard</a></td>
                        </tr>

                        
                  </table>


                  </td>
                  <td colspan="3" width="300px" align="left">
                  <fieldset>

                        <legend><b>Employee Profile</b></legend>
                        <img src="../assets/empty.png" width="100px" height="100px" style="float: right" />
                        <b>name:</b> Akash <br>
                        --------------------<br>
                        <b>Email:</b> na.akash715@gmail.com<br>
                        --------------------<br>
                        <b>Gender: </b> Male<br>
                        --------------------<br>
                        <b>Date Of Birth:</b> 24/05/1999 <br>
                        --------------------<br>
                        <b>Designation: </b> Accountant <br>
                        --------------------<br>

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

