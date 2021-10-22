<?php

$products = [
		['pid'=>1, 'pname'=>'Savlon Spreay', 'price'=>200,'quantity'=>10],
		['pid'=>2, 'pname'=>'Mouthwash', 'price'=>85,'quantity'=>12],
		['pid'=>3, 'pname'=>'Napadoll', 'price'=>95,'quantity'=>50]
	];

	echo "<table border=1>
	          <tr>
	            <th>Id</th>
	            <th>Name</th>
	            <th>Price</th>
	            <th>Quantity</th>
	          </tr>";

	foreach ($products as $pd) {
	echo "<tr>
	            <td>".$pd['pid']."</td>
	            <td>".$pd['pname']."</td>
	            <td>".$pd['price']."</td>
	            <td>".$pd['quantity']."</td>
	          </tr>";
	

	}
	echo "</table>";

?>