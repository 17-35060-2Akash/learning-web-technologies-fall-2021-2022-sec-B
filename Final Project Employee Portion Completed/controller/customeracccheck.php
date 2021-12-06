<?php
   


if(isset($_REQUEST['submit']))
{
	/*echo "<pre>";
	print_r($_POST);*/
	$requestid=$_REQUEST['requestid'];
	$accountno=$_REQUEST['accountno'];
	$accounttype=$_REQUEST['accounttype'];
	$name=$_REQUEST['name'];
	$gender=$_REQUEST['gender'];
	$dob=$_REQUEST['dob'];
	$bg=$_REQUEST['bloodgroup'];
	$address=$_REQUEST['address'];
	$email=$_REQUEST['email'];
	$education=$_REQUEST['education'];
	

	if($accno!="")
	{
		if($username!="")
		{
			if($email!="")
			{
				if($gender!="")
				{
                     

                     if($dob!="")
                     {
                     	 if($bg!="")
                     	 {
                     	 	if($education!="")
                     	 	{
                     	 		if ($address!="") 
                     	 		{
                     	 			///////
                     	 			 $myfile=fopen('../model/customeracc.txt', 'a');
				                     $user=$accno."|".$username."|".$email."|".$email."|".$gender."|".$dob."|".$bg."|".$education."|".$address."\r\n";
				                     fwrite($myfile, $user);
				                     fclose($myfile);

				                     /*$myfile=fopen('../model/user.txt', 'w');
				                     $user=$username."|".$password."|".$email;
				                     fwrite($myfile, $user);
				                     fclose($myfile);
				*/

				                     header('location: ../views/customerreglist.php');
				                     //header('location: test.php');
                     	 			///////
                     	 		}
                     	 		else
                     	 		{
                     	 			echo "Address Empty!";
                     	 		}

                     	 	}
                     	 	else
                     	 	{
                     	 		echo "Education Empty!";
                     	 	}

                     	 }
                     	 else
                     	 {
                     	 	echo "Blood Group Empty!";
                     	 }

                     }
                     else
                     {
                     	echo "DOB Empty!";

                     }
				}
				else
				{
					echo "Gender Empty!";
				}
				
			}
			else
			{
				echo "Email Empty!";
			}
		}
		else
		{
			echo "User Name Empty!";
		}
	}
	else
	{
		echo "Account Number Empty!";
	}
	

}


////






?>