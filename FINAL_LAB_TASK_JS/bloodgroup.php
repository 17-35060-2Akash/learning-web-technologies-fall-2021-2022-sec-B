<?php
  
  //echo "<pre>";
  //print_r($_REQUEST);



  if(isset($_REQUEST['submit']))
 {
    if(isset($_REQUEST['bloodgroup']))
    	{
    		$bg=$_REQUEST['bloodgroup'];
    		echo "Blood Group: ".$bg;
    	}
    else
    {
    	echo "Must Select At least one item!";
    }
 }
 
?>

<html>
<head>
	<title>Page-6</title>
</head>
<body>
		<br><br>
		<h3>6.</h3>
     <form method="post" action="">
      Blood Group 
      <select name="bloodgroup">
			<option value="A+">A+</option>
			<option value="A-">A-</option>
			<option value="B+">B+</option>
			<option value="B-">B-</option>
			<option value="AB+">AB+</option>
			<option value="AB-">AB-</option>
			<option value="O+">O+</option>
			<option value="O-">O-</option> 

		</select><br>
      </form>
      	_______________
      	<br><br>

      <br>
      <input type="submit" name="submit" value="Submit">
      <a href="profilepic.php">Next</a>
      
      
</body>
</html>