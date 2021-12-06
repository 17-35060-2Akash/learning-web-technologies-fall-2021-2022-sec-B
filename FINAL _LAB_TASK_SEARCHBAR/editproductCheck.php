<?php 

     require_once('productModel.php');
     /*echo "<pre>";
     print_r($_REQUEST);*/

    
  
  if(isset($_REQUEST['save']))
  {
  	$id=$_GET['id'];
    $name=$_REQUEST['name'];
    $buyingprice=$_REQUEST['buyingprice'];
    $sellingprice=$_REQUEST['sellingprice'];
    
    if(isset($_REQUEST['display']))
    {
        $displayable="YES";
    }
    else
    {
    	$displayable="NO";
    }


      if($name!="")
      {
      	if($buyingprice!="")
			      {
			      	if($sellingprice!="")
					      {
					      	$product=['id'=>$id,'name'=>$name,'buyingprice'=>$buyingprice,'sellingprice'=>$sellingprice,'displayable'=>$displayable];

                


					      	$status=editProduct($id,$product);

					      	echo $status;

									if($status)
									{
										if($displayable=="YES")
										{
											header('location: display.php');
										}
										else
									{
										header('location: operations.php');
									}
										
										
									}
									

					      }
					      else
					      {
					      	echo "Enter Product Selling Price.";
					      }

			      }
			      else
			      {
			      	echo "Enter Product Buying Price.";
			      }

      }
      else
      {
      	echo "Enter Product Name.";
      }




  }  
  

?> 

<?php
/*$status=createProduct($product);
						if($status && $displayable=="YES")
						{
							header('location: display.php');
							//header('location: test.php');
						}
						if($status && $displayable=="NO")
						{
							header('location: operations.php');
							//header('location: test.php');
						}
						
			            else
			            {
			             echo "Product Not Added!";
			            } */

?>