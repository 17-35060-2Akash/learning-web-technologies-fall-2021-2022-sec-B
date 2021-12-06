<?php
  
  session_start();
   include('header.php');
   require_once('../model/debitAccountsModel.php');

      if(isset($_SESSION['flag']))
      {
         $id=$_SESSION['userid'];
         $name= $_SESSION['username'];    
      }

      $datalist= getAllDebitaccounts();

?>

<?php 


     /*require_once('productModel.php');*/

    
      $searchlist=[];
      $datalist= getAllDebitaccounts();

      if(isset($_REQUEST['search']))
      {
            $cardnumber =$_REQUEST['cardnumber'];
            $search=getDebitAccById($cardnumber);
            array_push($searchlist,$search);
      }


?>


<html>
<head>

	<title>Customer Registration</title>
</head>
<body>
      <form method="" action="" >
           <table border="1" width="80%" align="center">
            <tr height="150px">
                  <th colspan="3" align="right">
                        <img src="../assets/bank_x.png" width="420px" height="150px" style="float: left" /><br>
                        <center>
                        <h2><a href="../controller/logout.php">Logout</a></b></h2>
                        
                        <h3 >ID: <?php   echo " ".$id;   ?> | Name: <?php   echo " ".$name;   ?></h3>
                        </center>
                        
                        <a href="bankemp.php">Employee Home | </a>
                        <!-- <a href="login.html">Login | </a> -->
                        <a href="contactmanager.php">Contact Manager</a><br>
                  </th>
                  
            </tr>

            <tr height="350px">
                  <td width="350px"> 
                  <table border="1" align="center">
                        
                        <tr height="50px" >
                              <td width="200px" align="center"><a href="mobilebanking.php" >Mobile Banking</a></td>
                        </tr>
                        <tr height="50px" >
                              <td width="200px" align="center"><a href="cardservice.php" >Card Services</a></td>
                        </tr>
                        <tr height="50px" >
                              <td width="200px" align="center"><a href="atm.php">ATM</a></td>
                        </tr>

                        
                  </table>
                  
                  <br>
                  <table border="1" align="center">
                        <tr height="50px" >
                              <td width="200px" align="center"><a href="cardservice.php" >Back</a></td>
                        </tr>

                        
                  </table>
                  <br>
                  <table border="1" align="center">
                        <tr height="50px" >
                              <td width="200px" align="center"><a href="dashboard.php" >Back To DashBoard</a></td>
                        </tr>

                        
                  </table><br>
                  </td>

                  <td colspan="3" width="300px" align="center">
                        <fieldset>
                              <legend>Search</legend>
                              <br><input type="text" name="cardnumber" id="cardnumber" onkeyup="idcharCheck()" value="" placeholder="type card number here"> <input type="button" name="search" value="Search By card Number" onclick="idcharCheck()"><br>
                              <h5 id="idmsg" style="color: green;"></h5>

             <br><table border="1" >
                        
                        <tbody id="myTable">
       
          </table>

                  <br>
                              
                        </fieldset><br>
                        <legend><b><u>All Debit Card Accounts</u></b></legend>
                         <br>
                        
                  <table border="1" align="center" width="100%">
                  <tr >
                        <th>Account ID</th>
                        <th>Card Number</th>
                        <th>Card Name</th>
                        <th>Expiry Date</th>
                        <th>Card Balance</th>
                        <th>Account Type</th>
                        <th>State</th>
                        <th>Operations</th>
                  </tr>
                 

                  <?php   for($i=0;$i<sizeof($datalist);$i++)         {     ?>
                        <tr align="center">
                        <td><?= $datalist[$i]['accountid'] ?></td>
                        <td><?= $datalist[$i]['cardnumber'] ?></td>
                        <td><?= $datalist[$i]['cardname'] ?></td>
                        <td><?= $datalist[$i]['expirydate'] ?></td>
                        <td><?= $datalist[$i]['debitbalance'] ?></td>
                        <td><?= $datalist[$i]['accounttype'] ?></td>
                        <td><?= $datalist[$i]['state'] ?></td>
                        <td>
                              <br>
                              <button><a href=<?php echo "../views/debitFreeze.php?cardnumber=".$datalist[$i]['cardnumber'];  ?> >Freeze / Unfreeze</a></button><br>
                              
                              <br>

                        </td>
                  </tr>

 <?php } ?> 

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

       <script type="text/javascript">
            "use strict"

             
        function idcharCheck()
        {
           let element=document.getElementById('cardnumber');
           
           if(element.value!="")
           {
                    let elementarr=stringConv(element.value);
                   for(let i=0;i<elementarr.length;i++)
                   {
                     if(elementarr[i]!=" ")
                     {
                           if(isNumber(elementarr[i]) || elementarr[i]=="-")
                            {
                               document.getElementById('cardnumber').value=element.value;
                               ajaxid();
                               document.getElementById('idmsg').innerHTML="Card Number is Okay.";
                            }
                            else
                            {
                               alert("Only Numbers and Special Charecter '-' is Allowed For Card Number...  ");
                               document.getElementById('idmsg').innerHTML="Only Numbers and Special Charecter '-' is Allowed For Card Number...  "; 
                               //document.getElementById('cardnumber').value="";
                               let str=document.getElementById('cardnumber').value;
                               document.getElementById('cardnumber').value=str.replace(elementarr[i],"");
                               break;
                            }
                        
                     }
                     else
                     {
                               alert("Space Not Allowed! ");
                               document.getElementById('idmsg').innerHTML="Space Not Allowed! ";
                               //document.getElementById('cardnumber').value="";
                               let str=document.getElementById('cardnumber').value;
                               document.getElementById('cardnumber').value=str.replace(elementarr[i],"");
                               break;
                     }

                      
                     
                     
                   }
           }
           else
           {
                alert("Enter Card Number...");
                document.getElementById('idmsg').innerHTML="Card Number can't be empty ! ";
           }
           

        }

        function stringConv(string)
        {
            return [...string];
        }


        function isAlphabet(char)
        {
            
               return char.toLowerCase()!=char.toUpperCase();
            
        }


        function isNumber(char)
        {
               if(!isNaN(char))
               {
                return true;
               }
               else
               {
                return false;
               }
        }



        function isSpecialChar(char)
        {
            if(!isAlphabet(char) && !isNumber(char))
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        function ajaxid()
        {
           let cardnumber=document.getElementById('cardnumber').value;

           
           let xhttp=new XMLHttpRequest();

           xhttp.open('POST', '../controller/creditsearchCheck.php', true);
           xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
           xhttp.send('cardnumber='+cardnumber);
           xhttp.onreadystatechange=function(){
            if(this.readyState==4 && this.status==200)
            {

               //alert(this.responseText);
               let obj=JSON.parse(this.responseText);
               //document.getElementById('searchmsg').innerHTML=obj[0].name;
               buildTable(obj);
               
               
            }
            

           }

        }


        function buildTable(data)
        {
           let table=document.getElementById('myTable');
           
           table.innerHTML="";
           //console.log(data.length);
           let header=`<table border="1" align="center" width="100%">
                           <tr>
                              <td colspan="14" align="center"><br><b><u>Searched Account</u></b><br><br></td>
                           </tr>
                           <tr>
                              <th>Account ID</th>
                              <th>Card Number</th>
                              <th>Card Name</th>
                              <th>Expiry Date</th>
                              <th>Card Balance</th>
                              <th>Account Type</th>
                              <th>State</th>
                              <th>Operations</th>

                           </tr>


                       </table>`
           for(let i=-1;i<data.length;i++)
           {
            if(i==-1)
            {
                  table.innerHTML=header;
            }
            else
            {
            let row=`<tr>
                       <td>${data[i].accountid}</td>
                       <td>${data[i].cardnumber}</td>
                       <td>${data[i].cardname}</td>
                       <td>${data[i].expirydate}</td>
                       <td>${data[i].debitbalance}</td>
                       <td>${data[i].accounttype}</td>
                       <td>${data[i].state}</td>
                       
                       <td>
                           <br>
                           <button><a href=../views/debitFreeze.php?cardnumber=${data[i].cardnumber}>Freeze / Unfreeze</a></button><br>
                              
                              <br>


                       </td>
                     </tr>`

                     table.innerHTML+=row;
           }

         }

        }



      </script>

      

</body>
</html>

