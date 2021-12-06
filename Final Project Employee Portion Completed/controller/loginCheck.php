<?php

   require_once('../model/userlistModel.php');
   session_start();


if(isset($_REQUEST['submit']))
{
    $userid=$_REQUEST['userid'];
    $username=$_REQUEST['username'];
    $password=$_REQUEST['password'];

    
    if($userid!="")
    {

              if($username!="")
                {
                    if($password!="")
                    {
                        //$myfile=fopen('../model/user.txt','r');
                        //while(!feof($myfile))
                        //{
                            //$line=fgets($myfile);

                            //$data= fread($myfile, filesize('user.txt'));//for single user
                            //$myuser=explode('|', $line);//for multiple user


                         
                        //if(trim($myuser[0])==$username && trim($myuser[1])==$password)
                        //{
                            //$_SESSION['flag']="true";
                            //setcookie('flag','true',time()+3600,'/');
                            // if(isset($username))
                            // {
                                //header('location: ../views/dashboard.php?username='.$username);  
                            // }
                            // else
                            // {
                            //     header('location: ../views/dashboard.php?username='."..."); 
                            // }
                           
                        //}

                        $status=validate($userid,$username,$password);
                        $user=getUserById($userid);
                        $designation=$user['designation'];

                        echo $designation;

                        if($status && $designation=="Emplolyee")
                        {
                          $_SESSION['userid']=$userid;
                          $_SESSION['username']=$username;
                          $_SESSION['password']=$password;
                          $_SESSION['flag']= true ;
                          //$_SESSION['invalidlog']="false";

                          setcookie('flag','true',time()+3600,'/');
                          header('location: ../views/dashboard.php'); 

                        }
                        else
                        { 
                           $_SESSION['invalidlog']=true;
                           header('location: ../views/login.php');
                        }

                        
                        
                        
                     
                       
                    }
                    else
                    {
                         header('location: ../views/login.php');
                    }
                }
                else
                {
                     header('location: ../views/login.php');
                }

           }
           else
           {
               header('location: ../views/login.php');
           }
    


    

}

?>