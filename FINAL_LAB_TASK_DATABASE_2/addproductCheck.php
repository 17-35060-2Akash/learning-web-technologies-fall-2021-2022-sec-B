<? php 

  require_once('ProductModel.php');

  if(isset($_REQUEST['submit']))
  {
  	$name=$_REQUEST['name'];
    $buyingprice=$_REQUEST['buyingprice'];
    $sellingprice=$_REQUEST['sellingprice'];
    if(isset($_REQUEST['display'])
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
		            
		            
		            
		           $product=['name'=> $name,'buyingprice'=> $buyingprice,'sellingprice'=> $sellingprice,'displayable'=> $displayable];

						$status=createUser($product);
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
			            } 
		           
		            
		         
		           
		        }
		        else
		        {
		            echo "Invalid Selling Price!";
		        }
		            
            
           
            
         
           
        }
        else
        {
            echo "Invalid Buying Price!";
        }
    }
    else
    {
        echo "Invalid Product Name!";
    }

  }


?> 