<?php
//echo "<pre>";
//print_r($_REQUEST);
 
 if(isset($_REQUEST))
 {
    if(isset($_REQUEST['option']))
    	{
    		$degree=$_REQUEST['option'];
    		$degree=implode(", ",$degree);
    		echo "Degree: ".$degree;
    	}
    else
    {
    	echo "Must Check At least one Checkbox!";
    }
 }
 

?>

<html>
<head>
	<title>Page-5</title>
</head>
<body>
		<br><br>
		<h3>5.</h3>
     <form method="post" action="">
      <fieldset>
      	<legend>Degree</legend>
      	<input type="checkbox" name="option[]" value="SSC"> SSC 
		<input type="checkbox" name="option[]" value="HSC"> HSC 
		<input type="checkbox" name="option[]" value="BSc"> BSc <br><br>
      </fieldset>
      <br>
      <input type="submit" name="submit" value="Submit">
      <a href="bloodgroup.php">Next</a>
      </form>
      
</body>
</html>