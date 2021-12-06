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


      require_once('../model/customeraccModel.php');
      $accountid=$_REQUEST['accountid'];
    
      $data= getCustomerById($accountid);

      $id=$data['accountid'];
      $type=$data['type'];
      $name=$data['name'];
      $gender=$data['gender'];
      $bg=$data['bg'];
      $dob=$data['dob'];
      $address=$data['address'];
      $email=$data['email'];
      $education=$data['education'];
      $state=$data['state'];
      $accountbalance=$data['accountbalance'];
      $loan=$data['loan'];
      $loanbalance=$data['loanbalance'];
      $picture=$data['picture'];

      
      
      /*echo "<pre>";
      print_r($data);*/





?>

<html>
<head>

	<title>See profile</title>
</head>
<body>
      <form method="POST" action="../controller/freezeunfreezeCheck.php?accountid=<?=$accountid?>">
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
                  </th>
                  
            </tr>

            <tr height="350px">
                  <td width="350px"> 
                 
                  <br>
                  <table border="1" align="center">
                        <tr height="50px" >
                              <td width="200px" align="center"><a href="customerAccount.php" >Back</a></td>
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
                        <br>
                  <fieldset>
                        
                        <legend><b>Employee Profile</b></legend>
                        <img src="../assets/empty.png" width="150px" height="150px" style="float: right" /><br>
                        <b>ID:</b> <?php   echo " ".$id;   ?> <br>
                        --------------------<br>
                        <b>Account Type:</b> <?php   echo " ".$type;   ?> <br>
                        --------------------<br>
                        <b>Account Name:</b> <?php   echo " ".$name;   ?><br>
                        --------------------<br>
                        <b>Gender: </b> <?php   echo " ".$gender;   ?><br>
                        --------------------<br>
                        <b>Blood Group:</b> <?php   echo " ".$bg;   ?> <br>
                        --------------------<br>
                        <b>Date Of Birth:</b> <?php   echo " ".$dob;   ?><br>
                        --------------------<br>
                        <b>Address: </b> <?php   echo " ".$address;   ?><br>
                        --------------------<br>
                        <b>Email:</b> <?php   echo " ".$email;   ?> <br>
                        --------------------<br>
                        <b>Education: </b> <?php   echo " ".$education;   ?> <br>
                        --------------------<br>
                        <b>State: </b> <input type="text" name="state" value="<?=$state?>" disabled><br>
                        --------------------<br>
                        <b>Account Balance:</b> <?php   echo " ".$accountbalance;   ?> <br>
                        --------------------<br>
                        <b>Loan: </b> <?php   echo " ".$loan;   ?> <br>
                        --------------------<br>
                        <b>Loan Balance: </b> <?php   echo " ".$loanbalance;   ?> <br>
                        <br>
                        

                  </fieldset><br>
                  <center>
                  <br>
                             
                              <input type="submit" name="freeze" value="Freeze" <?php 
                                                            if($state=="F")
                                                                  {echo "disabled";}
                                                            else
                                                                  {echo "";}
                                                            ?> >
                              <input type="submit" name="unfreeze" value="Unfreeze" <?php 
                                                            if($state=="U")
                                                                  {echo "disabled";}
                                                            else
                                                                  {echo "";}
                                                            ?> >
                              
                  </center><br>
                  </td>
                  
            </tr>

            <tr height="50px">
                  <td colspan="3" align="center">copyright © 2021</td>
                  
            </tr>
      </table>

      </form>
</body>
</html>

