<?php
  
  session_start();
   include('header.php');
   require_once('../model/customercomplistModel.php');

      if(isset($_SESSION['flag']))
      {
         $id=$_SESSION['userid'];
         $name= $_SESSION['username'];    
      }

      $complainNo=$_REQUEST['complainNo'];

      $data= getComplaintById($complainNo);

      $accountNo=$data['accountNo'];
      $complain=$data['complain'];
      $response=$data['response'];
      $dateandtime=$data['dateandtime'];

      //

      if($_SESSION['reply']==1)
      {
            $reply=$_SESSION['reply'];
      }
      else if($_SESSION['reply']==2)
      {
            $reply=$_SESSION['reply'];
      }

?>

<html>
<head>

	<title>Customer Complaint</title>
</head>
<body>
      <form method="post" action="../controller/responseCheck.php?complainNo=<?=$complainNo ?>">
           <table border="1" width="80%" align="center">
            <tr height="150px">
                  <th colspan="3" align="right">
                        <img src="../assets/bank_x.png" width="420px" height="150px" style="float: left" /><br>
                        <center>
                        <h2><a href="../controller/logout.php">Logout</a></b></h2>
                        
                        <h3 >ID: <?php   echo " ".$id;   ?> | Name: <?php   echo " ".$name;   ?></h3>
                        </center>
                        <br><br>
                        <a href="bankemp.php">Employee Home | </a>
                        <!-- <a href="login.html">Login | </a> -->
                        <a href="contactmanager.php">Contact Manager</a><br>
                  </th>
                  
            </tr>

            <tr height="350px">
                  <td width="350px"> 
                  <table border="1" align="center"><br>
                        <tr height="50px" >
                              <td width="200px" align="center"><a href="customerreg.php">Customer Registration</a></td>
                        </tr>
                        <tr height="50px" >
                              <td width="200px" align="center"><a href="customerAccount.php" >Customer Accounts</td>
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
                              <td width="200px" align="center"><a href="customercomplist.php">Back</a></td>
                        </tr>

                        
                  </table>
                  <br>

                  <br>
                  <table border="1" align="center">
                        <tr height="50px" >
                              <td width="200px" align="center"><a href="dashboard.php">Back To DashBoard</a></td>
                        </tr>

                        
                  </table><br>
                  </td>
                  <td colspan="3" width="300px" align="left">
                        <fieldset>
                              <legend>Complaint Filed: </legend>
                              <h2><u>Complaint No: <?=$complainNo ?> </u> </h2><br>
                              
                              <!-- <?php echo " Date: ".date("h:i:sa  d/m/Y");  ?> <br><br> -->
                              <b>Date :</b> <?=$dateandtime ?><br><br>
                              <b><u>Account No :</u></b> <?=$accountNo ?><br><br>
                              

                              <b><u>Email:</u></b><br><br>
                              <b>complaint:   <center></b><textarea name="comp" disabled><?=$complain ?></textarea><br></center>
                              <b>Reply:   <center></b><textarea width="500px" name="response" <?php 
                                                            if($response!="")
                                                                  {echo "disabled";}
                                                            else
                                                                  {echo "";}
                                                            ?> 
                                    ><?=$response ?> </textarea><br><br>
                                    <input type="submit" name="submit" value="Send Response" <?php 
                                                            if($response!="")
                                                                  {echo "disabled";}
                                                            else
                                                                  {echo "";}
                                                            ?>  >
                              </center>





                              <br>
                        </fieldset>

                  </td>
                  
            </tr>

            <tr height="50px">
                  <td colspan="3" align="center">copyright © 2021</td>
                  
            </tr>
      </table>

      </form>
      <script type="text/javascript">
            "use strict"

       if(<?=$reply ?>==1)
        {
            <?php $_SESSION['reply']=0;  ?>
            alert("Reply sent successfully...!");
        }
        else if(<?=$reply ?>==2)
        {
            <?php $_SESSION['reply']=0;  ?>
            alert("Error reply...!");
        }

        

      </script>
</body>
</html>

