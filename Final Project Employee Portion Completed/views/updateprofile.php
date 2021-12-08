<?php
  
  session_start();
   include('header.php');

      if(isset($_SESSION['flag']))
      {
         $userid=$_SESSION['userid'];
         $username= $_SESSION['username'];    
      }

     

       if(isset($_SESSION['update']))
       {
        $update=$_SESSION['update'];
        //echo $invalidlog;
       }

?>

<?php 


      require_once('../model/userlistModel.php');

    
      $data= getUserById($userid);

      $id=$data['id'];
      $name=$data['username'];
      $gender=$data['gender'];
      $bg=$data['bg'];
      $dob=$data['dob'];
      $address=$data['address'];
      $email=$data['email'];
      $education=trim($data['education']);
      $designation=$data['designation'];
      $name=$data['username'];
      $picture=$data['picture'];
      
      /*echo "<pre>";
      print_r($data);*/





?>

<html>
<head>

      <title>See profile</title>
</head>
<body>
      <form method="post" action="../controller/updateCheck.php" >
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
                  <fieldset>

                        <legend><b>Employee Profile</b></legend>
                        <img src="../assets/<?=$picture ?>" width="100px" height="100px" style="float: right" /><br>

                        <b>ID:</b> <?php   echo " ".$id;   ?> <br>
                        --------------------<br>
                        
                        <b>Name:</b> <input type="text" id="myname" name="username" onkeyup="namecharCheck()" value=<?php echo $name;  ?> > <h5 id="namemsg" style="color:green;" ></h5><br><br>
                        --------------------<br><input type="file" name="picture" value="Change Profile Pic" style="float: right"><br>
                        <b>Gender:</b> <input type="radio" name="gender"
                    <?php if (isset($gender) && $gender=="Female") echo "checked";?> value="Female">Female
                    <input type="radio" name="gender"
                    <?php if (isset($gender) && $gender=="Male") echo "checked";?> value="Male">Male
                    <input type="radio" name="gender"
                    <?php if (isset($gender) && $gender=="Other") echo "checked";?> value="Other">Other
                        <br>
                        --------------------<br> 

                        
                        
                        
                        

                        
                         <b>Blood Group:</b>       <select name="bg">
                                                        <option  value="A+"<?php if (isset($bg) && $bg=="A+") echo "selected"; ?> >A+</option>
                                                        <option  value="A-"<?php if (isset($bg) && $bg=="A-") echo "selected"; ?>> A-</option>
                                                        <option  value="B+"<?php if (isset($bg) && $bg=="B+") echo "selected"; ?>> B+</option>
                                                        <option  value="B-"<?php if (isset($bg) && $bg=="B-") echo "selected"; ?>> B-</option>
                                                        <option  value="AB+"<?php if (isset($bg) && $bg=="AB+") echo "selected"; ?>>AB+</option>
                                                        <option  value="AB-"<?php if (isset($bg) && $bg=="AB-") echo "selected"; ?>>AB-</option>
                                                        <option  value="O+"<?php if (isset($bg) && $bg=="O+") echo "selected"; ?>> O+</option>
                                                        <option  value="O-"<?php if (isset($bg) && $bg=="O-") echo "selected"; ?>> O-</option> 

                                                    </select><br>
                        --------------------<br>


                        <b>Date Of Birth:</b>   <input type="date" id="dob" name="dob"  
                                                        placeholder="dd-mm-yyyy"  
                                                        min="1920-01-01" max="2000-12-31" value=<?php echo $dob; ?>>  <br>
                        --------------------<br>
                        <b>Address:</b> <textarea id="address" name="address" onkeyup="addressCheck()"><?php echo $address;  ?></textarea><br>
                        <h5 id="addmsg" style="color:green;" ></h5><br>
                        --------------------<br>
                        <b>Email:</b> <input type="email" id="email" onkeyup="prevemailCheck()" name="email" value=<?php echo $email;  ?> >
                        <h5 id="emailmsg" style="color:green;" ></h5><br>
                        --------------------<br>
                        <!-- <b>Education: </b><input type="text" id="edu" name="education" onkeyup="educharCheck()" value=<?php echo $education;  ?> >  -->
                        <b>Education:</b> <textarea id="edu" name="education" onkeyup="educharCheck()"><?php echo $education;  ?></textarea><h5 id="edumsg" style="color:green;" ></h5><br>
                        <br>
                        --------------------<br>
                        <b>Designation: </b><input type="text" id="desig" name="designation" onkeyup="designationcharCheck()" value=<?php echo $designation;  ?>> <h5 id="desmsg" style="color:green;" ></h5>  
                        <br>
                        --------------------<br>

                  </fieldset><br>
                  <center>
                  <!-- <button>Save Upated Info</button><br> -->
                  <input type="submit" name="update" value="Save Upated Info">
                  </center>
                  </td>
                  
            </tr>

            <tr height="50px">
                  <td colspan="3" align="center">copyright © 2021</td>
                  
            </tr>
      </table>

      </form>
</body>

    <script type="text/javascript">

        "use strict"

       

        
        if(<?=$update ?>)
        {
            <?php $_SESSION['update']=false; ?>
            alert("Updated Successfully!");
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
                                       document.getElementById('myname').innerHTML=element.value;
                                       document.getElementById('namemsg').innerHTML="Name is Okay.";
                                    }
                                    else
                                    {
                                       document.getElementById('namemsg').innerHTML="Special Charecter is Not Allowed except  '_'  and  '.' ";
                                       let str=document.getElementById('myname').value;
                                       document.getElementById('myname').value=str.replace(elementarr[i],"");
                                       break;
                                    }
                                
                             }
                             else
                             {
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
                            document.getElementById('namemsg').innerHTML="You can't use space for the first character of this field.";
                            //document.getElementById('myname').value="";
                            let str=document.getElementById('myname').value;
                            document.getElementById('myname').value=str.replace(elementarr[i],"");
                               //console.log(str);
                            break;
                      }

                 
                         
               }
           }
           else
           {
                alert("Name can't be empty ! ");
                document.getElementById('namemsg').innerHTML="Name can't be empty ! ";
           }
           

        }


        function addressCheck()
        {
               let element=document.getElementById("address").value;

               if(element!="")
               {
                  let elementarr=stringConv(element);
                  for(let i=0;i<elementarr.length;i++)
                  {
                           if(isAlphabet(elementarr[i])|| isNumber(elementarr[i]) || elementarr[i]=="/" || elementarr[i]==","|| elementarr[i]=="-"|| elementarr[i]==":"|| elementarr[i]=="." || elementarr[i]==" " )
                           {
                              document.getElementById('address').value=element;
                              document.getElementById('addmsg').innerHTML="Address Okay! " ;


                           }
                           else
                           {
                             document.getElementById('addmsg').innerHTML="Special Charecter is Not Allowed except Space, ' / ' , ' , ' , ' : ' , ' . '  and  ' - ' " ;
                               alert("Special Charecter is Not Allowed except Space, '  /  '  ,  '  ,  '  ,  '  :  '  ,  '  .  '  and   '  -  '  ");
                               let str=document.getElementById('address').value;
                               document.getElementById('address').value=str.replace(elementarr[i],"");
                               break;
                           }
                  }
                  
                  


               }
               else
               {
                 document.getElementById('addmsg').innerHTML="Address Field is Empty. " ;
               }
  
            
        }


        function emailcharCheck()
        {
           let element=document.getElementById("email");
           
           let count=0;
           let elementarr=stringConv(element.value);
           for(let i=0;i<elementarr.length;i++)
           {
             //const pattern=/[a-zA-z0-9]/;

             if(elementarr[i]!=" ")
             {///////
               

                if(isAlphabet(elementarr[i]) ||isNumber(elementarr[i]) || elementarr[i]=="_" || elementarr[i]=="."|| elementarr[i]=="@" )
                {
                    if(elementarr[i]=="@")
                    {
                        count++;
                        let idx=elementarr.length-1;
                        if(count>1)
                        {

                             alert("Invalid Email Address...! ");
                             elementarr.splice(idx,1);
                             //console.log();
                             document.getElementById('email').value=elementarr.join("");
                             break;
                        }
                        else
                        {
                            document.getElementById('email').innerHTML=element.value;

                        }
                    }
                   document.getElementById('email').innerHTML=element.value;
                }
                else
                {

                   alert("Special Charecter is Not Allowed except  ' _ '  ,  ' . ' and ' @ ' ");
                   let str=document.getElementById('email').value;
                   document.getElementById('email').value=str.replace(elementarr[i],"");
                   break;
                }
                
             } ///////
             else
             {
                alert("Space Not Allowed!");
                //document.getElementById('myname').value="";
                let str=document.getElementById('email').value;
                document.getElementById('email').value=str.replace(elementarr[i],"");
                   //console.log(str);
                break;
             }
           }



        }


        function prevemailCheck()
         {
            let element=document.getElementById("email").value;
            if(element!="")
            {
               if(element.match('_')||element.match('.'))
               {
                       
                       emailcharCheck();
                       if(element.match('@'))
                       {
                          let i;
                          for(i=0;i<element.length;i++)
                          {
                             if(element.charAt(i)== '@' )
                             {
                                break;
                             }
                          }
                           
                           let atidx=i+1;
                           if(i>0)
                           {
                             
                                  if(element.match('@gmail.com')||element.match('@outlook.com')||element.match('@bankx.org'))
                                   {
                                      
                                      document.getElementById('emailmsg').innerHTML="Email is Okay";
                                      
                                        
                                   }
                                   else
                                   {
                                     document.getElementById('emailmsg').innerHTML="Domain names: '@gmail.com' , '@outlook.com' and  '@bankx.org' are Allowed";
                                   }

                           }
                           else
                           {
                            document.getElementById('emailmsg').innerHTML= "Nothing before @" ;
                           }
                           
                           

                          

                       }
                       else
                       {
                         document.getElementById('emailmsg').innerHTML=" @ is missing. ";
                       }
               }
               else
               {
                document.getElementById('emailmsg').innerHTML=" Special Charecter is Not Allowed except  ' _ '  and  ' . '  ";
               }
            }
            else
            {
               document.getElementById('emailmsg').innerHTML=" Email can't be empty. ";
            }

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




        function passcharCheck()
        {
           let element=document.getElementById("mypass");
           
           let elementarr=stringConv(element.value);
           for(let i=0;i<elementarr.length;i++)
           {
             

                if(elementarr[i]!="")
                {
                    if(elementarr[i]!=" ")
                {
                     
                        document.getElementById("mypass").innerHTML=element.value;

                }
                else
                {
                   alert("Space is not Allowed! ");
                   document.getElementById('mypass').value="";
                   break;
                }
                }
                else
                {
                   alert("Password Field Empty. Please Enter Your Password! ");
                   document.getElementById('mypass').value="";
                   break;
                }
                
             
             
           }

        }

         function educharCheck()
        {
           let element=document.getElementById("edu");
           
           let elementarr=stringConv(element.value);
           if(element.value!="")
           {
                  for(let i=0;i<elementarr.length;i++)
                   {
                     
                         //const pattern=/[a-zA-Z]/;
                        if(elementarr[i]!="")
                        {
                            if(isAlphabet(elementarr[i]) || elementarr[i]==" "||elementarr[i]==","||elementarr[i]==".")
                            {
                                   document.getElementById("edu").value=element.value;
                                    document.getElementById('edumsg').innerHTML="Education is Okay. ";
                                
                                    
                                
                                
                            }

                            
                            else
                            {
                               alert("Numbers and Special Charecter is Not Allowed except Space, dot and Comma! ");
                               let str=document.getElementById('edu').value;
                               document.getElementById('edu').value=str.replace(elementarr[i],"");
                               break;
                            }
                        }
                        else
                        {
                           alert("Education Field Empty. Please Enter Your Education! ");
                           let str=document.getElementById('edu').value;
                           document.getElementById('edu').value=str.replace(elementarr[i],"");
                           break;
                           
                        }
                        
                     
                     
                   }

           }
           else
           {
                 document.getElementById('edumsg').innerHTML="Education can't be empty! \n Valid Education Degrees are: 'SSC' , 'HSC' , 'BSc' , 'MSc', 'PHD' , 'BBA' , 'MBA' ";

            }
        } 

         function designationcharCheck()
        {
           let element=document.getElementById("desig").value;
           if(element!="")
           {
                   

                       let elementarr=stringConv(element);
                       for(let i=0;i<elementarr.length;i++)
                       {

                           if(elementarr[0]!=" ")
                              {
                                       if(!isNumber(elementarr[i])|| elementarr[i]==" ")
                                         {
                                            if(isAlphabet(elementarr[i])|| elementarr[i]==" ")
                                            {
                                               document.getElementById('desig').value=element;
                                               document.getElementById('desmsg').innerHTML="Designation is Okay.";
                                            }
                                            else
                                            {
                                               alert("Special Charecters and Numbers are not Allowed");
                                               document.getElementById('desmsg').innerHTML="Special Charecters and Numbers are not Allowed..!";
                                               let str=document.getElementById('desig').value;
                                               document.getElementById('desig').value=str.replace(elementarr[i],"");
                                               break;
                                            }
                                            
                                         }
                                         else
                                         {
                                            alert("Numbers are Not Allowed...!");
                                            document.getElementById('desmsg').innerHTML="Numbers are Not Allowed...!";
                                            //document.getElementById('myname').value="";
                                            let str=document.getElementById('desig').value;
                                            document.getElementById('desig').value=str.replace(elementarr[i],"");
                                               //console.log(str);
                                            break;
                                         }
                              }
                              else
                              {
                                    document.getElementById('desmsg').innerHTML="You can't use space for the first character of this field.";
                                    //document.getElementById('myname').value="";
                                    let str=document.getElementById('desig').value;
                                    document.getElementById('desig').value=str.replace(elementarr[i],"");
                                       //console.log(str);
                                    break;
                              }
                         
                         
                       }

            }
           else
           {
              document.getElementById('desmsg').innerHTML="Designation is Okay. ";
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

    </script>


 

</html>

