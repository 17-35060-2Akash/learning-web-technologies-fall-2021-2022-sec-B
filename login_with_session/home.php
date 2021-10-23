<?php

session_start();

   if(isset($_SESSION['flag']))
   {

 ?>   



<html>
<head>

	<title>Home Page</title>
</head>
<body>
      <form>
      	<fieldset>
      		<legend>Welcome Home!</legend>
      		<a href="logout.php">Logout</a>
      	</fieldset>
      </form>
</body>
</html>

<?php

}
else
{
	header('location:login.html');
}

?>