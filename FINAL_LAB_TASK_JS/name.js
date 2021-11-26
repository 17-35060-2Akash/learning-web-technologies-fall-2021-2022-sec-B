
        "use strict"

        console.log("this is another test!");
        
        function validate()
        {
            let name=document.getElementById('myname').value;
            if(name =="")
            {
                document.getElementById('head1').innerHTML="null";
                //alert(name);
            }
            else
            {
                document.getElementById('head1').innerHTML=name;
                //alert(name);
            }
        }

        function f2()
        {
           let element=document.getElementById("myname");
           //alert(element.value);
           document.getElementById('head1').innerHTML=element.value;
           //document.getElementById("name").value="";


        }


        /*function wordCount(string)
        {
            let totalwords=0;
            let wordsarr=string.split(" ");
            totalwords=wordsarr.length+1;
            console.log(totalwords);


        }*/
 