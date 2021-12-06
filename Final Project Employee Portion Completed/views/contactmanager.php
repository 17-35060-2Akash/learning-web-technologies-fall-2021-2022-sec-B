<?php
  
   include('header.php');

?>

<html>
<head>

	<title>Contact Manager</title>
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
                  
                  <br>
                  <table border="1" align="center">
                        <tr height="50px" >
                              <td width="200px" align="center"><a href="dashboard.php">Back To DashBoard</a></td>
                        </tr>

                        
                  </table>
                  </td>
                  <td colspan="3" width="300px" align="center">
                        <h1>File The Issue Here</h1>
                        ________________________________<br><br>
                        Name: <input type="text" name="name" value="N A Akash"><br><br>
                        Email: <input type="email" name="email" value="na.akash715@gmail.com"><br><br>
                        Designation 
                        <select>
                            <option selected>Accountant</option>
                            <option>Human Resource</option>
                            <option>Software Engineer</option>
                            <option>Resource Manager</option>
                            <option>Assistant Manager</option>
                            <option>Quality Control Manager</option>
                            <option>Technical</option>
                            

                        </select><br><br>
                        Complaint:<textarea></textarea><br><br>
                        <input type="submit" name="submit" value="Submit"><br><br>
                  
                  </td>
                  
            </tr>

            <tr height="50px">
                  <td colspan="3" align="center">copyright © 2021</td>
                  
            </tr>
      </table>

      </form>
</body>
</html>

