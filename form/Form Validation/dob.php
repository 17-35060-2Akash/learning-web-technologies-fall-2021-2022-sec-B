<?php


//$regex="/^[a-zA-Z\d\._]+@[a-zA-Z\d\._]+\.[a-zA-Z\d\.]{2,}+$/";

         //echo "<pre>";
         //print_r($_REQUEST);


if(isset($_REQUEST['submit'])){
     $dob=$_REQUEST['dob'];

    if($dob!="")
    {
     echo "Submitted! Your DOB is: ".$dob;
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
<body>
    <form method="post" action="">
        <fieldset>
            <legend>DATE OF BIRTH</legend>
            Email: <input type="date" name="dob" value=""> <br>
            ___________________<br>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>

