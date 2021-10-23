<?php

 //print_r($_REQUEST);
 //echo $_REQUEST['myname'];

$regex="/^[a-zA-Z][a-zA-Z\._]+\s[a-zA-Z\._\s]+$/";


if(isset($_REQUEST['submit'])){
	 $name=$_REQUEST['myname'];

     if($name!="")
     {
       if(preg_match_all($regex, $name))
       {
          echo "Submitted! Your Name is:".$name;
       }
       else
       {
        echo "Your name must contain at least two words.<br> Must start with a letter
              <br> Can contain a-z, A-Z, period, dash only";
       }
     }
     else
     {
         echo "Name can't be Empty! Please type Something...";
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
    		<legend>Name</legend>
    		Name: <input type="text" name="myname" value="">
    		<input type="submit" name="submit" value="Submit">
    	</fieldset>
    </form>
</body>
</html>