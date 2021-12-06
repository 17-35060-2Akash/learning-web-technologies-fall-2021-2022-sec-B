<?php 

     require_once('db.php');

  

  function getAllProducts()
  {
      $con=getConnection();

      $sql="select * from products";
      $result=mysqli_query($con,$sql);
      $datalist=[];
      while($data=mysqli_fetch_assoc($result))
      {
        array_push($datalist, $data);
      }
      //echo "<pre>";
      //print_r($datalist);
      
      return $datalist;
      

  }

  function getProductById($id)
  {
      $con=getConnection();

      $sql="select * from products where id='{$id}'";
      $result=mysqli_query($con,$sql);
     
      $product=mysqli_fetch_assoc($result);
      
      return $product;
      

  }

    function getProductByName($name)
  {
      $con=getConnection();

      $sql="select * from products where name like '%{$name}%'";
      $result=mysqli_query($con,$sql);
      $datalist=[];
      while($data=mysqli_fetch_assoc($result))
      {
        array_push($datalist, $data);
      }
      //echo "<pre>";
      //print_r($datalist);
      
      return $datalist;
      
      

  }

   function createProduct($product)
  {
      $con=getConnection();

      $sql="insert into products values ('','{$product['name']}','{$product['buyingprice']}','{$product['sellingprice']}','{$product['displayable']}')";
      
     
      if(mysqli_query($con,$sql))  
      {
        return true;
      }
      else
      {
        return false;
      }
      
      
      

  }

  
  function editProduct($id,$nproduct)
  {
      $con=getConnection();
      $product=getProductById($id);

      //$product['id']=$nproduct['id'];
      $product['name']=$nproduct['name'];
      $product['buyingprice']=$nproduct['buyingprice'];
      $product['sellingprice']=$nproduct['sellingprice'];
      $product['displayable']=$nproduct['displayable'];


      $sql="update products set name='{$product['name']}',buyingprice='{$product['buyingprice']}',sellingprice='{$product['sellingprice']}',displayable='{$product['displayable']}' where id='{$id}'";
      if(mysqli_query($con,$sql))
      {
        return true;
      }
      else
      {
        return false;
      }
      

  }

  function deleteProduct($id)
  {
      $con=getConnection();

      $sql="delete from products where id='{$id}'";
      if(mysqli_query($con,$sql))
      {
        return true;
      }
      else
      {
        return false;
      }
      

  }


?>