<?php
  
  session_start();
   include('header.php');

      if(isset($_SESSION['flag']))
      {
         $userid=$_SESSION['userid'];
         $username= $_SESSION['username'];    
      }

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
                        
                        <h3>ID: <?php   echo " ".$userid;   ?> | Name: <?php   echo " ".$username;   ?></h3>
                        </center>
                        
                        <a href="bankemp.php">Employee Home | </a>
                        <!-- <a href="login.html">Login | </a> -->
                        <a href="contactmanager.php">Contact Manager</a>
                  </th>
                  
            </tr>

            <tr height="350px">
                  <td width="350px"> 
                  <table border="1" align="center">
                        <tr height="50px" >
                              <td width="200px" align="center"> <a href="seeprofile.php" >See Profile</a></td>
                        </tr>
                        <tr height="50px" >
                              <td width="200px" align="center"><a href="updateprofile.php" >Update Profile</td>
                        </tr>
                        <tr height="50px" >
                              <td width="200px" align="center"><a href="changepass.php" >Change Password</td>
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
                      <br><br>
                      <fieldset>
                              <legend><b>Change PASSWORD </b></legend>
                              <br><br>
                              <!-- <input type="hidden" id="myid" name="myid" value= > -->
                              <b> Previous Password :   </b><input type="password" id="prepass" name="prepass" value="" placeholder="enter previous password here" onkeyup="prepasscharCheck()">
                              <h5 id="prepassmsg" style="color:green;" ></h5><br>
                              <b> New Password :   </b><input type="password" id="newpass" name="newpassword" value="" placeholder="enter new password here" onkeyup="newpasscharCheck()">
                              <h5 id="newpassmsg" style="color:green;" ></h5><br>
                              <b> Retype Password :   </b><input type="password" id="repass" name="repassword" value="" placeholder="re-type password here" onkeyup="repasscharCheck()">
                              <h5 id="repassmsg" style="color:green;" ></h5><br>
                              _____________________________________<br><br><br>
                              <center>
                              <input type="button" name="change" value="change Password" onclick="ajaxupdatepass()">
                              <br>
                              <br><br>
                              </center>
                       </fieldset><br><br>
                        


                  </td>
                  
            </tr>

            <tr height="50px">
                  <td colspan="3" align="center">copyright © 2021</td>
                  
            </tr>
      </table>

      </form>
      <script type="text/javascript">
            "use strict"

       function prepasscharCheck()
        {
           let element=document.getElementById("prepass");
           
           if(element.value!="")
           {
                   
                       let elementarr=stringConv(element.value);
                       //console.log(elementarr);
                       for(let i=0;i<elementarr.length;i++)
                       {
                         

                            if(elementarr[i]!="")
                            {
                                if(elementarr[i]!=" ")
                                  {
                                       
                                          document.getElementById("prepass").value=element.value;
                                          document.getElementById('prepassmsg').innerHTML="Password Okay. ";
                                          if(i==3)
                                          {
                                             let pass=document.getElementById("prepass").value;
                                             
                                             ajaxprepass(pass);
                                          }

                                  }
                                  else
                                  {
                                     alert("Space is not Allowed! ");
                                     document.getElementById('prepassmsg').innerHTML="Space is not Allowed! ";
                                     let str=document.getElementById('prepass').value;
                                     document.getElementById('prepass').value=str.replace(elementarr[i],"");
                                     break;
                                  }
                            }
                            else
                            {
                               alert("Password Field Empty. Please Enter Your Password! ");
                               document.getElementById('prepassmsg').innerHTML="Password Field Empty. Please Enter Your Password! ";
                               
                            }
                            
                         
                         
                       }
           }
           else
           {
                alert("Enter Your Password...");
                document.getElementById('prepassmsg').innerHTML="Password can't be empty ! ";
           }
           

        }

        function ajaxprepass(pass)
        {
           let prepass=document.getElementById('prepass').value;
           
           let userid=<?=$userid ?>;
           //console.log(userid,pass);
           
           let xhttp=new XMLHttpRequest();

           xhttp.open('POST', '../controller/prepassCheck.php', true);
           xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
           xhttp.send('userid='+userid+'&password='+pass);
           xhttp.onreadystatechange=function(){
            if(this.readyState==4 && this.status==200 &&this.responseText==1)
            {

               console.log(this.responseText);
               
               document.getElementById('prepassmsg').innerHTML="Password Matched !  Please type Your new pass Below. ";
               
               
               
            }
            else
            {
                  document.getElementById('prepassmsg').innerHTML="Incorrect Password!. ";
            }

            

           }

        }


        function wordCount(string)
        {
            let totalwords=0;
            let wordsarr=string.split(" ");
            totalwords=wordsarr.length;
            //console.log(totalwords);
            return totalwords;


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

        function newpasscharCheck()
        {
           let element=document.getElementById("newpass");
           
           if(element.value!="")
           {
                   
                       let elementarr=stringConv(element.value);
                       //console.log(elementarr);
                       for(let i=0;i<elementarr.length;i++)
                       {
                         

                            if(elementarr[i]!="")
                            {
                                if(elementarr[i]!=" ")
                                  {
                                       
                                          document.getElementById("newpass").value=element.value;
                                          document.getElementById('newpassmsg').innerHTML="Password Okay. ";
                                          

                                  }
                                  else
                                  {
                                     alert("Space is not Allowed! ");
                                     document.getElementById('newpassmsg').innerHTML="Space is not Allowed! ";
                                     let str=document.getElementById('newpass').value;
                                     document.getElementById('newpass').value=str.replace(elementarr[i],"");
                                     break;
                                  }
                            }
                            else
                            {
                               alert("Password Field Empty. Please Enter Your Password! ");
                               document.getElementById('newpassmsg').innerHTML="Password Field Empty. Please Enter Your Password! ";
                               
                            }
                            
                         
                         
                       }
           }
           else
           {
                alert("Enter Your Password...");
                document.getElementById('newpassmsg').innerHTML="Password can't be empty ! ";
           }
           

        }

        function repasscharCheck()
        {
           let element=document.getElementById("repass");
           
           if(element.value!="")
           {
                   
                       let elementarr=stringConv(element.value);
                       //console.log(elementarr);
                       for(let i=0;i<elementarr.length;i++)
                       {
                         

                            if(elementarr[i]!="")
                            {
                                if(elementarr[i]!=" ")
                                  {
                                      if(element.value==document.getElementById('newpass').value)
                                      {
                                          document.getElementById("repass").value=element.value;
                                          document.getElementById('repassmsg').innerHTML="Password Okay. ";
                                      }
                                      else
                                       {
                                          document.getElementById('repassmsg').innerHTML="Password didn't match to the new password! ";
                                       }
                                          
                                          

                                  }
                                  else
                                  {
                                     alert("Space is not Allowed! ");
                                     document.getElementById('repassmsg').innerHTML="Space is not Allowed! ";
                                     let str=document.getElementById('repass').value;
                                     document.getElementById('repass').value=str.replace(elementarr[i],"");
                                     break;
                                  }
                            }
                            else
                            {
                               alert("Password Field Empty. Please Enter Your Password! ");
                               document.getElementById('repassmsg').innerHTML="Password Field Empty. Please Enter Your Password! ";
                               
                            }
                            
                         
                         
                       }
           }
           else
           {
                alert("Enter Your Password...");
                document.getElementById('repassmsg').innerHTML="Password can't be empty ! ";
           }
           

        }

        function ajaxupdatepass()
        {
           let newpass=document.getElementById('newpass').value;
           
           let userid=<?=$userid ?>;
           //console.log(userid,pass);
           
           let xhttp=new XMLHttpRequest();

           xhttp.open('POST', '../controller/updatepass.php', true);
           xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
           xhttp.send('userid='+userid+'&password='+newpass);
           xhttp.onreadystatechange=function(){
            if(this.readyState==4 && this.status==200 &&this.responseText=="true")
            {

               console.log(this.responseText);
               
               alert("Password Updated! Please try to login with your new password.");
               
               
               
            }
            else if(this.responseText=="false")
            {
                  alert("Password not Updated! Please try Again Later! ");
            }
            

            

           }

        }

            


      </script>

</body>
</html>

