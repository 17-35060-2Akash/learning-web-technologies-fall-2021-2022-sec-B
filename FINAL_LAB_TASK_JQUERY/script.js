 


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
                 //alert(element);
                 
                 if(element!="")
                 {
                       let elementarr=stringConv(element);
                       //console.log(elementarr);
                       for(let i=0;i<elementarr.length;i++)
                       {

                          if(elementarr[0]!=" ")
                            {
                                  
                                  if(isNaN(elementarr[i]) || elementarr[i]==" ")
                                   {
                                          if(isAlphabet(elementarr[i]) || elementarr[i]=="_" || elementarr[i]=="."|| elementarr[i]==" " )
                                          {
                                             $('#name').val(element);
                                             //alert("Name is Okay.");
                                          }
                                          else
                                          {
                                             alert("Special Charecter is Not Allowed except  '_'  and  '.' ");
                                             let str=$('#name').val();
                                             $('#name').val(str.replace(elementarr[i],""));
                                             break;
                                          }
                                      
                                   }
                                   else
                                   {
                                      alert("Numbers Not Allowed!");
                                      
                                      let str=$('#name').val();
                                      $('#name').val(str.replace(elementarr[i],""));
                                         
                                      break;
                                   }
                            }
                            else
                            {
                                  alert("You can't use space for the first character of this field.");
                                  
                                  let str=$('#name').val();
                                      $('#name').val(str.replace(elementarr[i],""));
                                         
                                      break;
                            }

                       
                               
                     }
                 }
                 else
                 {
                      alert("Name can't be empty ! ");
                      
                 }
                 






        } )

        $('#email').keyup(function(){

         function emailCheck()
         {
            let element=$('#email').val();
            if(element!="")
            {
               if(element.match('_')||element.match('.'))
               {
                       
                       emailcharCheck();
                       if(element.match('@'))
                       {
                          let i;
                          for(i=0;i<element.length;i++)
                          {
                             if(element.charAt(i)== '@' )
                             {
                                break;
                             }
                          }
                           
                           let atidx=i+1;
                           if(i>0)
                           {
                             
                                  if(element.match('@gmail.com')||element.match('@outlook.com')||element.match('@bankx.org'))
                                   {
                                      
                                      $('#emailmsg').html("Email is Okay");
                                      
                                        
                                   }
                                   else
                                   {
                                     $('#emailmsg').html("Domain names: '@gmail.com' , '@outlook.com' and  '@bankx.org' are Allowed");
                                   }

                           }
                           else
                           {
                            $('#emailmsg').html("Nothing before @" );
                           }
                           
                           

                          

                       }
                       else
                       {
                         $('#emailmsg').html(" @ is missing. ");
                       }
               }
               else
               {
                $('#emailmsg').html(" Special Charecter is Not Allowed except  ' _ '  and  ' . '  ");
               }
            }
            else
            {
               $('#emailmsg').html(" Email can't be empty. ");
            }

         }






        })


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