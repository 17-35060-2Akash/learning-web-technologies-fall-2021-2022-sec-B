
<?php
  
   include('header.php');

      if(isset($_GET['username']))
      {
         $username= $_GET['username'];    
      }
      else
      {
         $username= ".";
      }
   
   

?>


<html>
<head>

	<title>DashBoard</title>
</head>
<body>
      <form>
           <table border="1" width="80%" align="center">
            <tr height="150px">
                  <th colspan="3" align="right">
                        <img src="../assets/bank_x.png" width="420px" height="150px" style="float: left" /><br>
                        <center>
                        <h2>Logged in as <b><?php   echo " ".$username." | ";   ?> <a href="../controller/logout.php">Logout</a></b></h2>
                        
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
                              <td width="200px" align="center"><a href=<?php echo 'youraccount.php?username='.$username; ?> >Your Account</a></td>
                        </tr>
                        <tr height="50px" >
                              <td width="200px" align="center"><a href=<?php echo 'noticeboard.php?username='.$username; ?> >Notice Board</td>
                        </tr>
                        <tr height="50px" >
                              <td width="200px" align="center"><a href=<?php echo 'customer.php?username='.$username; ?> >Customer</td>
                        </tr>
                        <tr height="50px" >
                              <td width="200px" align="center"><a href=<?php echo 'banking.php?username='.$username; ?> >Banking</td>
                        </tr>
                  </table>
                  </td>
                  <td colspan="3" width="300px" align="left">
                  <center>
                  <h2>Welcome Home <b><?php   echo $username.'!';   ?></b></h2>

            <br><br><br>
            <!-- <a href="signup.php">Create New User</a>|
            <a href="userlist.php">User List</a>| -->
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

