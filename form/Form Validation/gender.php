<?php

//echo "<pre>";
	   //print_r($_REQUEST);

if(isset($_REQUEST['submit'])){
	 
	 if(isset($_REQUEST['gend']))
	 {
	 	$gender=$_REQUEST['gend'];
	 	echo "Your Gender is: ".$gender;
	 }
	 else
	 {
	 		 	echo "Must Select A An Option!.";
	 }



    

}

?>

<html>
<head>
	<title></title>
</head>
<body>
		<br><br>
		
    <form method="get" action="">
      <fieldset>
      	<legend>Gender</legend>
      	<input type="radio" name="gend" value="Male"> Male
		<input type="radio" name="gend" value="Female">Female
		<input type="radio" name="gend" value="Other">Other <br>
      </fieldset>
      <br>
      <input type="submit" name="submit" value="Submit">
     </form>  
</body>
</html>