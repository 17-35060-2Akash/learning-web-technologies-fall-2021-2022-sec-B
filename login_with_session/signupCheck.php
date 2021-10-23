<?php
   
   session_start();


if(isset($_REQUEST['submit']))
{
	$username=$_REQUEST['username'];
	$password=$_REQUEST['password'];
	$email=$_REQUEST['email'];
	if($username!="")
	{
		if($password!="")
		{
			if($email!="")
			{
				//$_SESSION['username']=$username;
				//$_SESSION['password']=$password;

				$user=['username'=>$username,'password'=>$password,'email'=>$email];
				$_SESSION['user']=$user;
				//$users=$user;
				//$_SESSION['users']=$users;
				

				header('location: login.html');
				//header('location: test.php');
			}
			else
			{
				echo "Invalid Email!";
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