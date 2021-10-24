<?php

//session_start();

   //if(isset($_SESSION['flag']))
   if(isset($_COOKIE['flag']))
   {

 ?>   



<html>
<head>

	<title>Home Page</title>
</head>
<body>
      <form>
      	<fieldset>
      		<legend>DashBoard</legend>
            <br><br>
            <h2>Welcome Home!</h2>
            <br><br><br>
            <a href="signup.html">Create New User</a>|
            <a href="userlist.php">User List</a>|
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