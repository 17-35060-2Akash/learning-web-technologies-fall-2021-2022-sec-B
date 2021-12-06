<?php
  
   

      if(isset($_GET))
      {
         $id=$_GET['id'];
         $name= $_GET['name']; 
         $buyingprice =$_GET['buyingprice'];
         $sellingprice= $_GET['sellingprice'];
         
      }
      //print_r($_GET);
      
   
   

?>


<html>
<head>
	<meta charset="utf-8">
	<title>Delete Product</title>
</head>
<body>
	<form method="post" action=<?php echo "deleteCheck.php?id=".$id; ?>>
		<fieldset>
			

                        <legend><b>Delete Product</b></legend>
                        <br>
                        <b>ID:</b> <?php echo $id ?><br>
                        <br>
                        <b>Name:</b> <?php echo $name ?><br>
                        <br>
                        <b>Buying Price: </b> <?php echo $buyingprice ?><br>
                        <br>
                        <b>Selling Price:</b> <?php echo $sellingprice ?> <br>
                        
                        __________________________________________<br><br>
                        <input type="submit" name="delete" value="Delete">

                  </fieldset>
	</form>

</body>
</html>