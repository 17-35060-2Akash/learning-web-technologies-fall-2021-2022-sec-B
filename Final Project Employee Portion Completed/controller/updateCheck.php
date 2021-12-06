<?php
   
   session_start();
   require_once('../model/userlistModel.php');
   
	echo "<pre>";
	print_r($_REQUEST);

    if(isset($_SESSION['flag']))
      {
         $userid=$_SESSION['userid'];
         /*$username= $_SESSION['username']; */   
      }
      
    //print($userid);

if(isset($_REQUEST['update']))
{
	

	$username=$_REQUEST['username'];
	
	
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
	$education=$_REQUEST['education'];
	$designation=$_REQUEST['designation'];
	$picture=$_REQUEST['picture'];
	
	
	if($username!="")
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

															if($designation!="")
																{

																	$user=['userid'=>$userid, 'username'=> $username,'gender'=> $gender,'bg'=> $bg,'dob'=> $dob,'address'=> $address,'email'=> $email,'education'=> $education,'designation'=> $designation,'picture'=> $picture];
																	
																	/*echo "<pre>";
																	print_r($user);*/
																	
																	$status = editUser($user);

																	if($status)
																	{
																		$_SESSION['update']=true;
																		header('location: ../views/updateprofile.php');
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
		echo "Invalid User Name!";
	}
	

}

?>