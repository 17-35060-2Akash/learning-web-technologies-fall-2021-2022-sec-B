<?php

if(isset($_REQUEST['submit'])){



$name= $_REQUEST['myname'];
$namearr[]=$name;

if($name==""))
{
	echo "Null";
}
else
{
	echo "Your name is ". $name ;
} 
}
?>

<html>
<head>
	
	<title></title>
</head>
<body>
    <form method="">
    	<fieldset>
    		<legend>Login</legend>
    	<input type="text" name="myname" value=""><br>
    	_________________________________<br><br>
    	<input type="submit" name="submit" value="Submit"><br>

    	</fieldset>
    </form>
</body>
</html>