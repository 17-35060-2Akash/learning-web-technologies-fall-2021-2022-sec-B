<?php 
   session_start();

   
   if(isset($_SESSION['invalidlog']))
   {
    $invalidlog=$_SESSION['invalidlog'];
    //echo $invalidlog;
   }
   else
   {
      $_SESSION['invalidlog']=0;
      $invalidlog=$_SESSION['invalidlog'];
   }


?>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
    <form method="post" action="../controller/loginCheck.php">
        <table border="1" width="80%" align="center">
        <tr height="150px">
            <th colspan="3" align="right">
                <img src="../assets/bank_x.png" width="420px" height="150px" style="float: left" /><br>
                <br><br><br><br>
                <a href="mainhome.php">Home | </a>
                <a href="bankemp.php">Employee Home | </a>
                <a href="contact.php">Contact</a>
            </th>
            <!DOCTYPE html>
            <html>
            <head>
                <meta charset="utf-8">
                <title></title>
            </head>
            <body>
            
            </body>
            </html>
        </tr>

        <tr height="350px">
            <td colspan="3" width="300px" align="center">
                <fieldset>
                    <legend>Login</legend>
                    <table width="50%" align="center">
                    <tr>
                        <td>User ID:</td>
                        <td><input type="text" id="myid" name="userid" value="" onkeyup="idcharCheck()"><h5 id="idmsg" style="color:green;" ></h5></td>
                      </tr>
                      <tr>
                        <td>User Name:</td>
                        <td><input type="text" id="myname" name="username" value="" onkeyup="namecharCheck()"><h5 id="namemsg" style="color:green;" ></h5></td>
                      </tr>
                      <tr>
                        <td>Password:</td>
                        <td><input type="password" id="mypass" name="password" value="" onkeyup="passcharCheck()"><h5 id="passmsg" style="color:green;" ></h5></td>
                     </tr>
                     <tr>
                     <h1 id="head1" ></h1>
                        <td align="center"> 
                            <br><br>
                            
                        </td>
                        <td align="left"> 
                            _____________________<br><br>
                            <input type="submit" name="submit" value="LOGIN">
                            <a href="forgotpass.php">Forgot Password?</a>
                        </td>
                     </tr>
                   </table>
                </fieldset>

            <br><br><img src="../assets/foremp.png" width="200px" height="100px" style="float: left;" />
            <!-- <a href="signup.php" align="right">Signup</a> -->
            </td>

            
        </tr>

        <tr height="50px">
            <td colspan="3" align="center">copyright © 2021</td>
            
        </tr>
    </table>
    	<!--  -->
    </form>
    <script type="text/javascript">

        "use strict"

        if(<?=$invalidlog ?>==1)
        {
            <?php $_SESSION['invalidlog']=0; ?>
            alert("Wrong Id, Employee Name, or Password...!");
        }

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


        function namecharCheck()
        {
           let element=document.getElementById("myname");
           
           if(element.value!="")
           {
                 let elementarr=stringConv(element.value);
                 for(let i=0;i<elementarr.length;i++)
                 {
                 
                         if(elementarr[0]!=" ")
                         {
                                  if(isNaN(elementarr[i]) || elementarr[i]==" ")
                                 {
                                        if(isAlphabet(elementarr[i]) || elementarr[i]=="_" || elementarr[i]=="."|| elementarr[i]==" " )
                                        {
                                           document.getElementById('myname').value=element.value;
                                           document.getElementById('namemsg').innerHTML="Name is Okay.";
                                        }
                                        else
                                        {
                                            alert("Special Charecter is Not Allowed except  '_'  and  '.' ");
                                           document.getElementById('namemsg').innerHTML="Special Charecter is Not Allowed except  '_'  and  '.' ";
                                           let str=document.getElementById('myname').value;
                                           document.getElementById('myname').value=str.replace(elementarr[i],"");
                                           break;
                                        }
                                    
                                 }
                                 else
                                 {
                                    alert("Numbers Not Allowed!");
                                    document.getElementById('namemsg').innerHTML="Numbers Not Allowed!";
                                    //document.getElementById('myname').value="";
                                    let str=document.getElementById('myname').value;
                                    document.getElementById('myname').value=str.replace(elementarr[i],"");
                                       //console.log(str);
                                    break;
                                 }
                         }
                         else
                         {
                                   alert("Space not allowed in front of your name...! The First Character of your name can't be an space. ");
                                   document.getElementById('namemsg').innerHTML="Space not allowed in front of your name...!";
                                   let str=document.getElementById('myname').value;
                                    document.getElementById('myname').value=str.replace(elementarr[i],"");
                                    break;
                         }
               }
           }
           else
           {
                alert("Enter Your name...");
                document.getElementById('namemsg').innerHTML="Name can't be empty ! ";
           }
           

        }


 

        function passcharCheck()
        {
           let element=document.getElementById("mypass");
           
           if(element.value!="")
           {
                   
                       let elementarr=stringConv(element.value);
                       for(let i=0;i<elementarr.length;i++)
                       {
                         

                            if(elementarr[i]!="")
                            {
                                if(elementarr[i]!=" ")
                            {
                                 
                                    document.getElementById("mypass").value=element.value;
                                    document.getElementById('passmsg').innerHTML="Password Okay. ";

                            }
                            else
                            {
                               alert("Space is not Allowed! ");
                               document.getElementById('passmsg').innerHTML="Space is not Allowed! ";
                               let str=document.getElementById('mypass').value;
                               document.getElementById('mypass').value=str.replace(elementarr[i],"");
                               break;
                            }
                            }
                            else
                            {
                               alert("Password Field Empty. Please Enter Your Password! ");
                               document.getElementById('passmsg').innerHTML="Password Field Empty. Please Enter Your Password! ";
                               let str=document.getElementById('mypass').value;
                               document.getElementById('mypass').value=str.replace(elementarr[i],"");
                               break;
                            }
                            
                         
                         
                       }
           }
           else
           {
                alert("Enter Your Password...");
                document.getElementById('passmsg').innerHTML="Password can't be empty ! ";
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

    </script>
</body>
</html>