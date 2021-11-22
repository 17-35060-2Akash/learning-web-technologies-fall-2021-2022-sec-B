<?php 


      require_once('productModel.php');

    
      $datalist= getAllProducts();


?>

<html>
<head>
	<meta charset="utf-8">
	<title>Display info</title>
</head>
<body>
   <form>
   	<fieldset>
   	<legend>Display</legend>
		   	<table border="1" align="center">
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Profit</th>
						<!-- <th>Buying Price</th> -->
						<!-- <th>Selling Price</th> -->
						<th>Displayable</th>
						<th>Actions</th>
						
					</tr>

		<?php   for($i=0;$i<sizeof($datalist);$i++){

		               if($datalist[$i]['displayable']=="YES"){     ?>
                        <tr>
				<td><?= $datalist[$i]['id'] ?></td>
				<td><?= $datalist[$i]['name'] ?></td>
				<td><?= $datalist[$i]['sellingprice']-$datalist[$i]['buyingprice'] ?></td>

				<!-- <td><?= $datalist[$i]['buyingprice'] ?></td>
				<td><?= $datalist[$i]['sellingprice'] ?></td> -->
				<td><?= $datalist[$i]['displayable'] ?></td>

				<td>
					<a href=<?php echo 'edit.php?id='.$datalist[$i]['id'].'&name='.$datalist[$i]['name'].'&buyingprice='.$datalist[$i]['buyingprice'].'&sellingprice='.$datalist[$i]['sellingprice'] ; ?> >Edit</a>
					<a href= <?php echo 'delete.php?id='.$datalist[$i]['id'].'&name='.$datalist[$i]['name'].'&buyingprice='.$datalist[$i]['buyingprice'].'&sellingprice='.$datalist[$i]['sellingprice'] ; ?> >Delete</a>
				</td>
			</tr>

 <?php } 
      } ?> 

    </fieldset>

   </form>
</body>
</html>