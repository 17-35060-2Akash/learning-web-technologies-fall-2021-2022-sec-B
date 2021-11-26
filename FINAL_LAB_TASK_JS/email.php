
<html>
<head>
	
	<title>Email</title>
</head>
<body>
    <form method="" action="">
        <h1 id="head1"></h1>
    	<fieldset>
    		<legend>Email</legend>
    		Email: <input type="email" id="email" name="myemail" value="" placeholder="anything@example.com" onkeyup="emailcharCheck()">
    		<input type="button" name="submit" value="Submit" onclick="validate()">
            <a href="gender.php"> Next</a>
    	</fieldset>
        <script type="text/javascript">
            "use strict"

        console.log("this is another test!");
        const pattern=/^[a-zA-Z\d\._]+@[a-zA-Z\d\._]+\.[a-zA-Z\d\.]+$/;
        
        function validate()
        {  
            let email=document.getElementById('email').value;
            if(email!="")
            {
                   if(pattern.test(email))
                   {
                    document.getElementById('head1').innerHTML="Your Email is "+email;
                   }
                   else
                   {
                      alert("Invalid Email!");
                   }
                   
            }
            else
            {
              
                alert("Email Can't be empty!");
            }
        }


        function emailcharCheck()
        {
           let element=document.getElementById("email");
           
           let elementarr=stringConv(element.value);
           for(let i=0;i<elementarr.length;i++)
           {
             const pattern=/[a-zA-z0-9]/;
             if(elementarr[i]!=" ")
             {
                if(pattern.test(elementarr[i]) || elementarr[i]=="_" || elementarr[i]=="."|| elementarr[i]=="@")
                {
                   document.getElementById('head1').innerHTML=element.value;
                }
                else
                {
                   alert("Special Charecter is Not Allowed except '_' , '@' and '.' ");
                   document.getElementById('email').value="";
                   break;
                }
                
             }
             else
             {
                alert("Space is Not Allowed!");
                document.getElementById('email').value="";
                break;
             }
           }

        }

        function stringConv(string)
        {
            return [...string];
        }
        </script>
    </form>
</body>
</html>