<?php

 //print_r($_REQUEST);
 //echo $_REQUEST['myname'];

$regex="/^[a-zA-Z\d\._]+@[a-zA-Z\d\._]+\.[a-zA-Z\d\.]{2,}+$/";


if(isset($_REQUEST['submit'])){
	 $email=$_REQUEST['myemail'];

     if($email!="")
     {
       if(preg_match_all($regex, $email))
       {
          echo "Submitted! Your Email is:".$email;
       }
       else
       {
        echo "Email Invalid!";
       }
     }
     else
     {
         echo "Email can't be Empty! Please type Something...";
     }


}


?>

<html>
<head>
	
	<title></title>
</head>
<body>
    <form method="post" action="">
    	<fieldset>
    		<legend>Email</legend>
    		Email: <input type="email" name="myemail" value="" placeholder="anything@example.com">
    		<input type="submit" name="submit" value="Submit">
    	</fieldset>
    </form>
</body>
</html>