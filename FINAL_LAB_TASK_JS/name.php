<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    
	<title>Name</title>
    <!-- <script type="text/javascript" src="name.js"></script> -->
</head>
<body>
    <form method="" action="">
        <h1 id="head1"></h1>
    	<fieldset>
    		<legend>Name</legend>
    		Name: <input type="text" id="myname" name="name" value="" onkeyup="charCheck()">
    		<input type="button" name="submit" value="Submit" onclick="validate()">
            <a href="gender.php"> Next</a>
    	</fieldset>
        <script type="text/javascript">
            "use strict"

        console.log("this is another test!");
        
        function validate()
        {  
            let name=document.getElementById('myname').value;
            if(name!="")
            {
               let totalwords=wordCount(name);
               if(totalwords>=2)
               {
                 
                   document.getElementById('head1').innerHTML="Your name is "+name;
                  

               }
               else
               {
                alert("Name Must Contain At least two words!");
               }
            }
            else
            {
              
                alert("Name Can't be empty!");
            }



            /*if(name =="")
            {
                document.getElementById('head1').innerHTML="null";
                //alert(name);
            }
            else
            {
                document.getElementById('head1').innerHTML="Your name is "+name;
                //alert(name);
            }*/
        }

        function charCheck()
        {
           let element=document.getElementById("myname");
           
           let elementarr=stringConv(element.value);
           for(let i=0;i<elementarr.length;i++)
           {
             const pattern=/[a-zA-z]/;
             if(isNaN(elementarr[i]) || elementarr[i]==" ")
             {
                if(pattern.test(elementarr[i]) || elementarr[i]=="_" || elementarr[i]=="."|| elementarr[i]==" " )
                {
                   document.getElementById('head1').innerHTML=element.value;
                }
                else
                {
                   alert("Special Charecter is Not Allowed except  '_'  and  '.' ");
                   document.getElementById('myname').value="";
                   break;
                }
                
             }
             else
             {
                alert("Numbers Not Allowed!");
                document.getElementById('myname').value="";
                break;
             }
           }

        }


        function wordCount(string)
        {
            let totalwords=0;
            let wordsarr=string.split(" ");
            totalwords=wordsarr.length;
            //console.log(totalwords);
            return totalwords;


        }

        function stringConv(string)
        {
            return [...string];
        }

        </script>
    </form>
    
</body>
</html>