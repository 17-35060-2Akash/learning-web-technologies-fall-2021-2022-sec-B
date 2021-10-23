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
            //for($i=0;$i,10;$i++){
            if($_SESSION['user']['username']==$username && $_SESSION['user']['password']==$password)
            {
              $_SESSION['flag']="true";
              header('location: home.php');  
            }
            else
            {
             echo "Invalid User Name/ Password";
            }
         //}
           
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