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


      require_once('../model/debitAccountsModel.php');
      $cardnumber=$_REQUEST['cardnumber'];
    
      $data= getDebitAccById($cardnumber);

      $accountid=$data['accountid'];
      $cardnumber=$data['cardnumber'];
      $cardname=$data['cardname'];
      $expirydate=$data['expirydate'];
      $debitbalance=$data['debitbalance'];
      $accounttype=$data['accounttype'];
      
      $reason=$data['reason'];
      $state=$data['state'];
      
      
      
      /*echo "<pre>";
      print_r($data);*/





?>

<html>
<head>

      <title>Debit Card Account</title>
</head>
<body>
      <form method="post" action="../controller/debitfreezeunfreezeCheck.php?cardnumber=<?= $cardnumber ?>" >
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
                  <br>

                  <table border="1" align="center">
                        <tr height="50px" >
                              <td width="200px" align="center"><a href="debitAccount.php">Back</a></td>
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
                              <legend><b>Debit Card</b></legend>
                              <br><br>
                              <b> Card Number :   </b><input type="text" name="text" value="<?= $cardnumber ?>" placeholder="something@anything.com" disabled ><br><br>
                              <b> Account Number :   </b><input type="text" name="username" value="<?= $accountid ?>" placeholder="xxxx-xxxx-xx" disabled><br><br>
                              <b> Account Holders Name :   </b><input type="text" name="accholder" value="<?= $cardname ?>" disabled><br><br>
                              <b> Debit Card Balance :   </b><input type="text" name="balance" value="<?= $debitbalance ?>" disabled><br><br>
                              <b> Status :   </b><input type="text" name="state" value="<?= $state ?>" disabled><br><br>
                              <b> Reason :   </b><input type="text" id="reason" name="reason" value="<?= $reason ?>" placeholder="Specify Reason" <?php 
                                                            if($state=="F")
                                                                  {echo "disabled";}
                                                            else
                                                                  {echo "";}
                                                            ?> ><br>
                              _____________________________________<br><br><br>
                              <center>
                  <br>
                              <!-- <button><a href=<?php echo "../controller/debitfreezeunfreezeCheck.php?cardnumber=".$cardnumber."&reason=".$reason;  ?> >Freeze</a></button>
                              <button><a href=<?php echo "../controller/debitfreezeunfreezeCheck.php?cardnumber=".$cardnumber."&reason=".$reason;  ?> >Unfreeze</a></button><br>
 -->
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

