<?php

$products = [
		['pid'=>1, 'pname'=>'Savlon Spreay', 'price'=>200,'Quantity'=>10],
		['pid'=>2, 'pname'=>'Mouthwash', 'price'=>85,'Quantity'=>12],
		['pid'=>3, 'pname'=>'Napadoll', 'price'=>95,'Quantity'=>50]
	];

	foreach ($products as $pd) {
		echo $pd['pname']. " ";
	}

?>