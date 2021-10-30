<?php

session_start();

if(isset($_REQUEST['submit']))
{
    $username=$_REQUEST['username'];
    $password=$_REQUEST['password'];

    
    if($username!="")
    {
        if($password!="")
        {
            $myfile=fopen('../model/user.txt','r');
            while(!feof($myfile))
            {
                $line=fgets($myfile);

                //$data= fread($myfile, filesize('user.txt'));//for single user
                $myuser=explode('|', $line);//for multiple user


             
            if(trim($myuser[0])==$username && trim($myuser[1])==$password)
            {
                //$_SESSION['flag']="true";
                setcookie('flag','true',time()+3600,'/');
                // if(isset($username))
                // {
                    header('location: ../views/dashboard.php?username='.$username);  
                // }
                // else
                // {
                //     header('location: ../views/dashboard.php?username='."..."); 
                // }
               
            }
            else
            {
             echo "Invalid User Name/ Password";
            }
            }
            
            
         
           
        }
        else
        {
            echo "Invalid Password!";
        }
    }
    else
    {
        echo "Invalid User Name!";
    }


    

}

?>