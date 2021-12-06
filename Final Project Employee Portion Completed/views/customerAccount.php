<?php
  
  session_start();
   include('header.php');
   require_once('../model/customeraccModel.php');

      if(isset($_SESSION['flag']))
      {
         $id=$_SESSION['userid'];
         $name= $_SESSION['username'];    
      }

      $datalist= getAllCustomers();
      /*echo "<pre>";
      print_r($datalist);*/

?>

<?php 


     /*require_once('productModel.php');*/

    
      $searchlist=[];
      $datalist= getAllCustomers();

      if(isset($_REQUEST['search']))
      {
            $accountid=$_REQUEST['id'];
            $search=getCustomerById($accountid);
            
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
                  <td width="300px"> 
                  <table border="1" align="center">
                        <tr height="50px" >
                              <td width="200px" align="center"><a href="customerreglist.php" >Customer Registration</a></td>
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
                              <td width="200px" align="center"><a href="customerreglist.php" >Back</a></td>
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
                              <br><input type="text" id="myid" name="id" value="" onkeyup="idcharCheck()" placeholder="type account number here" > <input type="button" name="search" value="Search By Account Number" onclick="idcharCheck()"><br>
                              <h5 id="idmsg" style="color: green;"></h5>

             <br><table border="1" >
                        
                               <tbody id="myTable">
            
       
             </table>
                  <br>
                              
                        </fieldset><br>
                        <legend><b><u>All Accounts</u></b></legend>
                         <br>
                        
                  <table border="1" align="center" width="100%">
                  <tr >
                                    <th>Account ID</th>
                                    <th>Account type</th>
                                    <th>Name</th>
                                    <th>Gender</th>
                                    <th>Blood Group</th>
                                    <th>Date of Birth</th>
                                    <th>Address</th>
                                    <th>Email</th>
                                    <th>Education</th>
                                    <th>State</th>
                                    <th>Account Balance</th>
                                    <th>Loan</th>
                                    <th>Loan Amount</th>
                                    <th>Operations</th>
                  </tr>
                 

                  <?php   for($i=0;$i<sizeof($datalist);$i++)         {     ?>
                        <tr align="center">
                        <td><?= $datalist[$i]['accountid'] ?></td>
                        <td><?= $datalist[$i]['type'] ?></td>
                        <td><?= $datalist[$i]['name'] ?></td>
                        <td><?= $datalist[$i]['gender'] ?></td>
                        <td><?= $datalist[$i]['bg'] ?></td>
                        <td><?= $datalist[$i]['dob'] ?></td>
                        <td><?= $datalist[$i]['address'] ?></td>
                        <td><?= $datalist[$i]['email'] ?></td>
                        <td><?= $datalist[$i]['education'] ?></td>
                        <td><?= $datalist[$i]['state'] ?></td>
                        <td><?= $datalist[$i]['accountbalance'] ?></td>
                        <td><?= $datalist[$i]['loan'] ?></td>
                        <td><?= $datalist[$i]['loanbalance'] ?></td>
                        <td>
                              <br>
                              <button><a href=<?php echo "../views/freeze.php?accountid=".$datalist[$i]['accountid'];  ?> >Freeze / Unfreeze</a></button><br>
                              
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
           let element=document.getElementById('myid');
           
           if(element.value!="")
           {
                    let elementarr=stringConv(element.value);
                   for(let i=0;i<elementarr.length;i++)
                   {
                     if(elementarr[i]!=" ")
                     {
                           if(isNumber(elementarr[i]) || elementarr[i]=="-")
                            {

                               document.getElementById('myid').value=element.value;
                               ajaxid();
                               document.getElementById('idmsg').innerHTML="ID is Okay.";
                               

                            }
                            else
                            {
                               alert("Only Numbers and Special Charecter '-' is Allowed For Employee Id...  ");
                               document.getElementById('idmsg').innerHTML="Only Numbers and Special Charecter '-' is Allowed For Employee Id...  "; 
                               //document.getElementById('myid').value="";
                               let str=document.getElementById('myid').value;
                               document.getElementById('myid').value=str.replace(elementarr[i],"");
                               break;
                            }
                        
                     }
                     else
                     {
                               alert("Space Not Allowed! ");
                               document.getElementById('idmsg').innerHTML="Space Not Allowed! ";
                               //document.getElementById('myid').value="";
                               let str=document.getElementById('myid').value;
                               document.getElementById('myid').value=str.replace(elementarr[i],"");
                               break;
                     }

                      
                     
                     
                   }
           }
           else
           {
                alert("Enter Your ID...");
                document.getElementById('idmsg').innerHTML="ID can't be empty ! ";
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
           let myid=document.getElementById('myid').value;

           
           let xhttp=new XMLHttpRequest();

           xhttp.open('POST', '../controller/idsearchCheck.php', true);
           xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
           xhttp.send('myid='+myid);
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
                              <th>Account type</th>
                              <th>Name</th>
                              <th>Gender</th>
                              <th>Blood Group</th>
                              <th>Date of Birth</th>
                              <th>Address</th>
                              <th>Email</th>
                              <th>Education</th>
                              <th>State</th>
                              <th>Account Balance</th>
                              <th>Loan</th>
                              <th>Loan Amount</th>
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
                       <td>${data[i].type}</td>
                       <td>${data[i].name}</td>
                       <td>${data[i].gender}</td>
                       <td>${data[i].bg}</td>
                       <td>${data[i].dob}</td>
                       <td>${data[i].address}</td>
                       <td>${data[i].email}</td>
                       <td>${data[i].education}</td>
                       <td>${data[i].state}</td>
                       <td>${data[i].accountbalance}</td>
                       <td>${data[i].loan}</td>
                       <td>${data[i].loanbalance}</td>
                       <td>
                           <br>
                           <button><a href=../views/freeze.php?accountid=${data[i].accountid}>Freeze / Unfreeze</a></button><br>
                              
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

