<?php
   
   require_once('../model/userlistModel.php');

//echo "<pre>";
//print_r($_REQUEST);


if(isset($_REQUEST['submit']))
{
	$username=$_REQUEST['username'];
	$password=$_REQUEST['password'];
	$repassword=$_REQUEST['repassword'];
	if(isset($_REQUEST['gender']))
	{
		$gender=$_REQUEST['gender'];
	}
	else
	{
		$gender="";
	}
	
	$bloodgroup=$_REQUEST['bloodgroup'];
	$date=$_REQUEST['date'];
	$address=$_REQUEST['address'];
	$email=$_REQUEST['email'];

	if(isset($_REQUEST['education']))
	{
		$education=$_REQUEST['education'];
		$education=implode(", ", $education);
		//echo $education;
	}
	else
	{
		$education="";
	}
	

    
	$designation=$_REQUEST['designation'];
	
	
	
	if($username!="")
	{
		if($password!="" && $password==$repassword )
		{
			
				/*$myfile=fopen('user.txt', 'w');
				$user=$username."|".$password."|".$email;
				fwrite($myfile, $user);
				fclose($myfile);

				$myfile=fopen('../model/user.txt', 'a');
				$user=$username."|".$password."|".$email."\r\n";
				fwrite($myfile, $user);
				fclose($myfile);
				*/

				/**/
				if($gender!="")
				{

					  if($bloodgroup!="")
						{

							if($date!="")
								{

									if($address!="")
										{

											if($email!="")
												{

													if($education!="")
														{

															if($designation!="")
																{

																	$user=['username'=> $username,'password'=> $password,'gender'=> $gender,'bloodgroup'=> $bloodgroup,'dob'=> $date,'address'=> $address,'email'=> $email,'education'=> $education,'designation'=> $designation];
																	
																	//echo "<pre>";
																	//print_r($user);
																	
																	$status = createUser($user);

																	if($status)
																	{
																		header('location: ../views/login.php');
																		//header('location: test.php');
																	}
																	else
																	{
																		echo "Please Try Again!";
																	}



																}
																else
																{
												                   echo "Select Your Designation!";
																}


														}
														else
														{
										                   echo "Check Your Degrees!";
														}


												}
												else
												{
								                   echo "Give Your Valid Email!";
												}


										}
										else
										{
						                   echo "Give Your Valid Address!";
										}


								}
								else
								{
				                   echo "Select A DOB!";
								}


						}
						else
						{
		                   echo "Select A Blood Group!";
						}


				}
				else
				{
                   echo "Select A Gender!";
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