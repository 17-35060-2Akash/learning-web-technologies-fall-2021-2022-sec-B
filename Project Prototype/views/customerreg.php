<?php
  
   include('header.php');

?>

<?php 

   $requestid=$_GET['requestid'];
   /*echo $requestid ;*/

    $myfile=fopen('../model/customerreglist.txt','r');
            while(!feof($myfile))
            {
                $line=fgets($myfile);

                //$data= fread($myfile, filesize('user.txt'));
                $myuser=explode('|', $line);//for multiple user


             
            if(trim($myuser[0])==$requestid)
            {
                
                    setcookie('flag','true',time()+3600,'/');

                    $requestid=trim($myuser[0]);
                    $accounttype=trim($myuser[1]);
                    $username=trim($myuser[2]);
                    $email=trim($myuser[3]);
                    $gender=trim($myuser[4]);
                    $dob=trim($myuser[5]);
                    $education=trim($myuser[6]);
                    $bg=trim($myuser[7]);
                    $address=trim($myuser[8]);

                
                
                   
            }
            else
            {
             echo "Invalid User Name/ Password";
            }
            }



?>

<html>
<head>

	<title>Your Account</title>
</head>
<body>
      <form method="post" action="../controller/customeracccheck.php">
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
                              <td width="200px" align="center"><a href="customerreglist.php">Back</a></td>
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
                  <!-- -->
                  <!-- -->
                  <!-- -->
                  <!-- <a href="">Download Customer Form</a><br><br> -->
                  <table border="1" width="100%">
            <tr height="50px">
                  <td colspan="3" align="center"><br><h3>Submitted Customer Form<br> RQ ID:<?php echo $requestid;  ?></h3></td>
                  
            </tr>

            <tr height="50px">
                  <td width="200px" align="center">Account Number</td>
                  <td align="center">
                        <input type="text" name="accno" value="(Autogenarated)" > <br>
                  </td>
                  <td width="50px"></td>
            </tr>

            <tr height="50px">
                  <td width="200px" align="center">Name</td>
                  <td align="center">
                        <input type="text" name="username" value=<?php echo $username;  ?>> <br>
                  </td>
                  <td width="50px"></td>
            </tr>

            <tr height="50px">
                  <td align="center">Email</td>
                  <td align="center">
                        <input type="text" name="email" value= <?php echo $email;  ?>> <br>
                  </td>
                  <td></td>
            </tr>

            <tr height="50px">
                  <td align="center">Gender</td>
                  <td align="center">
                   <input type="radio" name="gender"
                    <?php if (isset($gender) && $gender=="Female") echo "checked";?> value="Female">Female
                    <input type="radio" name="gender"
                    <?php if (isset($gender) && $gender=="Male") echo "checked";?> value="Male">Male
                    <input type="radio" name="gender"
                    <?php if (isset($gender) && $gender=="Other") echo "checked";?> value="Other">Other

                  <br>
                  </td>
                  <td></td>
            </tr>

            <tr height="50px">
                  <td align="center">Date of Birth</td>
                  <td align="center">
                        <input type="text" name="dob" value=<?php echo $dob;  ?>>(dd/mm/yyyy)
            <br>
                  </td>
                  <td></td>
            </tr>

            <tr height="50px">
                  <td align="center">Blood Group</td>
                  <td align="center">
                   <input type="text" name="bg" value=<?php echo $bg; ?>>     
            <br>
                  </td>
                  <td></td>
            </tr>

            <tr height="50px">
                  <td align="center">Degree</td>
                  <td align="center">
                    <input type="text" name="education" value=<?php echo $education;  ?>>    
                  </td>
                  <td></td>
            </tr>

            <tr height="50px">
                  <td align="center">Address</td>
                  <td colspan="2" align="center">
                        <textarea name="address"> <?php echo $address;  ?> </textarea>
            <br>
                  </td>
            </tr>

            <tr height="50px">
                  <td colspan="3"></td>
            </tr>

            <tr height="50px">
                  <td colspan="3" align="right">
                        <input type="submit" name="submit" value="Accept">
                        <input type="reset" name="reset" value="Reset">
                  </td>
                  
            </tr>

      </table>


                  <!-- -->
                  <!-- -->
                  <!-- -->
                  </td>
                  
            </tr>

            <tr height="50px">
                  <td colspan="3" align="center">copyright © 2021</td>
                  
            </tr>
      </table>

      </form>
</body>
</html>

