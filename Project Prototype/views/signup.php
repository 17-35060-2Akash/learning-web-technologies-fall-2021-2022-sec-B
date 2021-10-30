

<html>
<head>
	<title>Signup Page</title>
</head>
<body>
    <a href="bankemp.php">Back</a><br>
    <!-- <a href="../controller/logout.php">Logout</a> -->
    <br>
    <form method="post" action="../controller/signupCheck.php">
    	<fieldset>
    		<legend>Sign-Up</legend>
    		<table>
    			<tr>
    				<td>User Name:</td>
    				<td><input type="text" name="username" value=""></td>
    			</tr>
    			<tr>
    				<td>Password:</td>
    				<td><input type="password" name="password" value=""></td>
    			</tr>
                <tr>
                    <td>email:</td>
                    <td><input type="email" name="email" value=""></td>
                </tr>
    			<tr>
    				<td><input type="submit" name="submit" value="Submit"></td>
    			</tr>
    		</table>
    	</fieldset>
    </form>
</body>
</html>