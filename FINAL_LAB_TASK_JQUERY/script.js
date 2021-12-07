 


       "use strict"
    	//alert("test");
    	console.log("this is another test!");
    	
        function f1()
        {
        	let element = document.getElementById('head1');
        	element.innerHTML="Akash";
        }

        function f2()
        {
           let element=document.getElementById("name");
           //alert(element.value);
           document.getElementById('head1').innerHTML=element.value;
           //document.getElementById("name").value="";


        }

        function validate()
        {
        	let name=document.getElementById('name').value;
        	if(name =="")
        	{
        		document.getElementById('head1').innerHTML="Null Data";
        	}
        	else
        	{
        		document.getElementById('head1').innerHTML="good To go!";
        	}
        }

        function moveright()
        {
         let current = document.getElementById('box').style.left;
         current=current.replace('px','');
         let update=parseInt(current)+10; 
         document.getElementById('box').style.left=update+"px";
         
        }

        function moveleft()
        {
         let current = document.getElementById('box').style.left;
         current=current.replace('px','');
         let update=parseInt(current)-10; 
         document.getElementById('box').style.left=update+"px";
         
        }

        function moveup()
        {
           let current=document.getElementById('box').style.bottom;
           current=current.replace('px','');
           let update=parseInt(current)+10;
           document.getElementById('box').style.bottom=update+"px";

         
        }
        
        function movedown()
        {
           let current=document.getElementById('box').style.bottom;
           current=current.replace('px','');
           let update=parseInt(current)-10;
           document.getElementById('box').style.bottom=update+"px";

         
        }

        function wordCount(string)
        {
            
            let wordsarr=string.split(" ");
            let totalwords=wordsarr.length+1;
            alert(totalwords);


        }

         


        

        $('#mleft').click(function(){

              
              alert($('#name').val());
              $('#name').val('');
              $('#head1').html('Akash');

        } );


        $('#name').keyup(function(){

            let element=$('#name').val();
            
          alert(element);
           let elementarr=stringConv(element);
           for(let i=0;i<elementarr.length;i++)
           {
             const pattern=/[a-zA-z]/;
             if(isNaN(elementarr[i]) || elementarr[i]==" ")
             {
                if(pattern.test(elementarr[i]) || elementarr[i]=="_" || elementarr[i]=="."|| elementarr[i]==" " )
                {
                   $('#name').val()=element;
                   alert(element);

                }
                else
                {
                   alert("Special Charecter is Not Allowed except  '_'  and  '.' ");
                   $('#name').val('');
                   break;
                }
                
             }
             else
             {
                alert("Numbers Not Allowed!");
                $('#name').val('');
                break;
             }
           }





        } )


        function isAlphabet(char)
        {
            
               return char.toLowerCase()!=char.toUpperCase();
            
        }
        function isNumber(char)
        {
               if(!isNaN(char))
               {
                return true;
               }
               else
               {
                return false;
               }
        }

        function isSpecialChar(char)
        {
            if(!isAlphabet(char) && !isNumber(char))
            {
                return true;
            }
            else
            {
                return false;
            }
        }