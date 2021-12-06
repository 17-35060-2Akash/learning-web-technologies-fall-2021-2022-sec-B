<?php
   
   session_start();
   require_once('../model/customerreglistModel.php');
   

      /*echo "<pre>";
	print_r($_REQUEST);*/

if(isset($_REQUEST['approve']))
{
	

    $requestid=$_REQUEST['requestid'];
    $type=$_REQUEST['accounttype'];
	$name=$_REQUEST['name'];
	$password=$_REQUEST['password'];
	
	if(isset($_REQUEST['gender']))
	{
		$gender=$_REQUEST['gender'];
	}
	else
	{
		$gender="";
	}
	
	$bg=$_REQUEST['bg'];
	$dob=$_REQUEST['dob'];
	$address=$_REQUEST['address'];
	$email=$_REQUEST['email'];

	if(isset($_REQUEST['education']))
	{
		$education=$_REQUEST['education'];
		$education=$education;
		//echo $education;
	}
	else
	{
		$education="";
	}

	$picture=$_REQUEST['picture'];
	

    
	
	if($type!="")
	{


	
	
			if($name!="" && $password!="")
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

							  if($bg!="")
								{

									if($dob!="")
										{

											if($address!="")
												{

													if($email!="")
														{

															if($education!="")
																{

					

																			$user=['type'=>$type, 'name'=> $name,'gender'=> $gender,'bg'=> $bg,'dob'=> $dob,'address'=> $address,'email'=> $email,'education'=> $education, 'password'=> $password, 'picture'=> $picture];
																			
																			/*echo "<pre>";
																			print_r($user);*/
																			
																			$status = createCustomer($requestid,$user);

																			if($status)
																			{
																				$_SESSION['approved']=1;
																				header('location: ../views/customerreglist.php');
																				//header('location: test.php');
																			}
																			else
																			{
																				echo "Please Try Again!";
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
				echo "Invalid User Name and password!";
			}
	}
	else
	{
		echo "Invalid Account Type Name!";
	}
	

}

?>