<?php
  
   

      if(isset($_GET))
      {
         $id=$_GET['id'];
         $name= $_GET['name']; 
         $buyingprice =$_GET['buyingprice'];
         $sellingprice= $_GET['sellingprice'];
         
      }
      
   
   

?>

<html>
<head>
	<title>Edit Product</title>
</head>
<body>
    
    <br>
   <form method="post" action=<?php echo "editproductCheck.php?id=".$id; ?>  >                                 
       
    	<fieldset>
    		<legend>Edit Product</legend>
    		<table >
                <tr>
                    <td>ID<br>
                    <input type="text" name="name" value=<?php   echo $id;   ?>></td>
                </tr>

    			<tr>
    				<td>Name<br>
    				<input type="text" name="name" value=<?php   echo $name;   ?>></td>
    			</tr>
    			<tr>
    				<td>Buying Price<br>
    				<input type="text" name="buyingprice" value=<?php   echo $buyingprice;   ?>></td>
    			</tr>
                <tr>
                    <td>Selling Price<br>
                    <input type="text" name="sellingprice" value=<?php   echo $sellingprice;   ?>></td>
                </tr>
                <tr>
                    <td>
                ______________________________________</td>
                </tr>
                <tr>
                    
                    <td><input type="checkbox" name="display" value="YES">Display</td>
                </tr>
                <td>
                ______________________________________</td>
                </tr>



    			<tr>
    				<td><input type="submit" name="save" value="Save"></td>
    			</tr>
    		</table>
    	</fieldset>
    </form>
</body>
</html>