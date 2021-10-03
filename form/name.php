<?php

	if(isset($_REQUEST['submit'])){
		$name = $_REQUEST['myname'];

		 if (emptyempty($_POST["name"])) {  
         $nameErr = "Enter Name";  
    } 

    else {  
        $name = input_data($_POST["name"]);  
              
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  
                $nameErr = "Give Only alphabets and white space";  
            }  
			echo "Your name is: ". $name;
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
    		<legend>Name</legend>
    	<input type="text" name="myname" value=""><br>
    	_________________________________<br><br>
    	<input type="submit" name="submit" value="Submit"><br>

    	</fieldset>
    </form>
</body>
</html>