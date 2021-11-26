<?php




if(isset($_REQUEST['submit'])){
     $dob=$_REQUEST['dob'];

    if($dob!="")
    {
     echo " Your DOB is: ".$dob;
    }
    else
    {
        echo "Must Select A DOB!";
    }


}


?>

<html>
<head>
    
    <title></title>
</head>
<body><br><br>
    <form method="post" action="">
        <fieldset>
            <legend>DATE OF BIRTH</legend>
            Email: <input type="date" name="dob" value=""> <br>
            ___________________<br><br>
            <input type="submit" name="submit" value="Submit">
            <a href="degree.php">Next</a>
        </fieldset>
    </form>
</body>
</html>

