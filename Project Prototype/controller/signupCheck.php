<?php
   


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
				/*$myfile=fopen('user.txt', 'w');
				$user=$username."|".$password."|".$email;
				fwrite($myfile, $user);
				fclose($myfile);*/

				$myfile=fopen('../model/user.txt', 'a');
				$user=$username."|".$password."|".$email."\r\n";
				fwrite($myfile, $user);
				fclose($myfile);
				

				header('location: ../views/login.html');
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