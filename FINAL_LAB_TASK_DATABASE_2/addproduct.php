<html>
<head>
	<title>Add Product</title>
</head>
<body>
    
    <br>
    <form method="post" action="addproductCheck.php">
    	<fieldset>
    		<legend>Add Product</legend>
    		<table >
    			<tr>
    				<td>Name<br>
    				<input type="text" name="name" value=""></td>
    			</tr>
    			<tr>
    				<td>Buying Price<br>
    				<input type="text" name="buyingprice" value=""></td>
    			</tr>
                <tr>
                    <td>Selling Price<br>
                    <input type="text" name="sellingprice" value=""></td>
                </tr>
                <tr>
                    <td>
                ______________________________________</td>
                </tr>
                <tr>
                    
                    <td><input type="checkbox" name="display" value="display">Display</td>
                </tr>
                <td>
                ______________________________________</td>
                </tr>



    			<tr>
    				<td><input type="submit" name="submit" value="Save"></td>
    			</tr>
    		</table>
    	</fieldset>
    </form>
</body>
</html>