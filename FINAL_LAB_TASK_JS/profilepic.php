
<html>
<head>
	<title>Page-6</title>
</head>
<body>
		<br><br>
		<h3>6.</h3>
     <form method="post" action="">
      <fieldset>
    		<legend>Profile Picture</legend>
    		User Id: <input type="text" id="userid" name="name" value=""><br><br>
    		Picture: <input type="file" name="photo" value=""><br>
    		_______________
      	<br><br>
    		<input type="button" name="submit" value="Submit" onclick="validate()">
            
    	</fieldset>
      </form>
      <script type="text/javascript">
      	"use strict"

        console.log("this is another test!");
        
        function validate()
        {  
            let userid=document.getElementById('userid').value;
            if(userid!="")
            {
            	if(userid>0)
            	{
               document.getElementById('head1').innerHTML="Your userid is "+userid;
            	}
            	else
            	{
            		alert("userid Can't be negative!");
            	}
            }
            else
            {
              
                alert("userid Can't be empty!");
            }



           
        }
      </script>
      	

      
      
      
</body>
</html>