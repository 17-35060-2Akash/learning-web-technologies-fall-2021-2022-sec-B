<?php 

?>



<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>calculator</title>
</head>
<body>
    <center>
    	<form>
    		<fieldset>
    			<legend>My Calculator</legend>
    			<center>
    				
    				<br><br><table border="3" >
						   		<tr >
						   			<td colspan="4" align="right"><br><input type="text" id="screen" name="screen" value=""><br>
						   				                              <h3 id="result">0</h3> </td>
						   		</tr>
								<tr align="center">
                                   <td height="30px" width="50px"><button ><h3 id="ce">CE</h3></button></td>
                                   <td height="30px" width="50px"><button ><h3 id="c">C</h3></button></td>
                                   <td height="30px" width="50px"><button ><h3 id="x">x</h3></button></td>
                                   <td height="30px" width="50px"><button ><h3 id="div">/</h3></button></td>
								</tr>

								<tr align="center">
								   <td height="30px" width="30px"><input type="button" id="seven" name="seven" value="7" onclick="numbers()"></td>
                                   <td height="30px" width="30px"><button ><h3 id="eight">8</h3></button></td>
                                   <td height="30px" width="30px"><button ><h3 id="nine">9</h3></button></td>
                                   <td height="30px" width="30px"><button ><h3 id="mul">X</h3></button></td>
								</tr>

								<tr align="center">
								   <td height="30px" width="30px"><button ><h3 id="four">4</h3></button></td>
                                   <td height="30px" width="30px"><button ><h3 id="five">5</h3></button></td>
                                   <td height="30px" width="30px"><button ><h3 id="six">6</h3></button></td>
                                   <td height="30px" width="30px"><button ><h3 id="minus">-</h3></button></td>
								</tr>

								<tr align="center">
								   <td height="30px" width="30px"><button ><h3 id="one">1</h3></button></td>
                                   <td height="30px" width="30px"><button ><h3 id="two">2</h3></button></td>
                                   <td height="30px" width="30px"><button ><h3 id="three">3</h3></button></td>
                                   <td height="30px" width="30px"><button ><h3 id="plus">+</h3></button></td>
								</tr>

								<tr align="center">
								   <td height="30px" width="30px"><button ><h3 id="pbym">+/-</h3></button></td>
                                   <td height="30px" width="30px"><button ><h3 id="zero">0</h3></button></td>
                                   <td height="30px" width="30px"><button ><h3 id="dot">.</h3></button></td>
                                   <td height="30px" width="30px"><button ><h3 id="equal">=</h3></button></td>
								</tr>
								

		
                          </table>




		   	<br>

    			</center>
    		</fieldset>
    	</form>
    </center>

    <script type="text/javascript">
    	"use strict"
        function numbers()
        {
           let num = document.getElementById("seven").value;
           console.log(num);
           document.getElementById("screen").value=num;
        }

    </script>
</body>
</html>