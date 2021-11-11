<?php 


require_once('productModel.php');

    
      $searchlist=[];
      $datalist= getAllProducts();
      if(isset($_REQUEST['search']))
      {
      	$name=$_REQUEST['name'];
        $searchlist=getProductByName($name);
      }


?>

<html>
<head>
	<meta charset="utf-8">
	<title>Display info</title>
</head>
<body>
   <form method="" action="">
   	<fieldset>
   	<legend>Search</legend>
   	<br><input type="text" name="name" value="" placeholder="type name of the product"> <input type="submit" name="search" value="Search By Name"><br>

   	<br><table border="1" >
		   		<tr>
		   			<td colspan="6" align="center"><br>Searched Item<br><br></td>
		   		</tr>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Buying Price</th>
						<th>Selling Price</th> 
						<th>Profit</th>
						
						<!-- <th>Displayable</th> -->
						<th>Actions</th>
						
					</tr>

		<?php   for($i=0;$i<sizeof($searchlist);$i++){

		               if($searchlist[$i]['displayable']=="YES"){     ?>
                        <tr>
				<td><?= $searchlist[$i]['id'] ?></td>
				<td><?= $searchlist[$i]['name'] ?></td>
				<td><?= $searchlist[$i]['buyingprice'] ?></td>
				<td><?= $searchlist[$i]['sellingprice'] ?></td>
				<td><?= $searchlist[$i]['sellingprice']-$searchlist[$i]['buyingprice'] ?></td>

				 
				<!-- <td><?= $datalist[$i]['displayable'] ?></td> -->

				<td>
					<a href=<?php echo 'edit.php?id='.$searchlist[$i]['id'].'&name='.$searchlist[$i]['name'].'&buyingprice='.$searchlist[$i]['buyingprice'].'&sellingprice='.$searchlist[$i]['sellingprice'] ; ?> >Edit</a>
					<a href= <?php echo 'delete.php?id='.$datalist[$i]['id'].'&name='.$searchlist[$i]['name'].'&buyingprice='.$searchlist[$i]['buyingprice'].'&sellingprice='.$searchlist[$i]['sellingprice'] ; ?> >Delete</a>
				</td>
			</tr>

 <?php } 
      } ?> 
      </table>



		   	<br><table border="1" >
		   		<tr>
		   			<td colspan="5" align="center"><br>Main Product Table<br><br></td>
		   		</tr>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Profit</th>
						<!-- <th>Buying Price</th> -->
						<!-- <th>Selling Price</th> -->
						<!-- <th>Displayable</th> -->
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
				<!-- <td><?= $datalist[$i]['displayable'] ?></td> -->

				<td>
					<a href=<?php echo 'edit.php?id='.$datalist[$i]['id'].'&name='.$datalist[$i]['name'].'&buyingprice='.$datalist[$i]['buyingprice'].'&sellingprice='.$datalist[$i]['sellingprice'] ; ?> >Edit</a>
					<a href= <?php echo 'delete.php?id='.$datalist[$i]['id'].'&name='.$datalist[$i]['name'].'&buyingprice='.$datalist[$i]['buyingprice'].'&sellingprice='.$datalist[$i]['sellingprice'] ; ?> >Delete</a>
				</td>
			</tr>

 <?php } 
      } ?> 
      </table>

    </fieldset>
    
   </form>
</body>
</html>