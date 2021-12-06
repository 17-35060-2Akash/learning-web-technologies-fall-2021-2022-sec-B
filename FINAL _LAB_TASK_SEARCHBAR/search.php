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
   	<br><input type="text" id="name" name="name" value="" placeholder="type name of the product" onkeyup="ajax()"> 
   	<input type="button" id="search" name="search" value="Search By Name" onclick="ajax()"><br>
   	<h4 id="searchmsg"></h4><br>

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
						
						
						<th>Actions</th>
						
					</tr>
					<tbody id="myTable">

		
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
					<a href=<?php echo 'edit.php?id='.$datalist[$i]['id']; ?> >Edit</a>
					<a href= <?php echo 'delete.php?id='.$datalist[$i]['id']; ?> >Delete</a>
				</td>
			</tr>

 <?php } 
      } ?> 
      </table>

    </fieldset>
    
   </form>
    <script type="text/javascript">
    	"use strict"

    	function ajax()
        {
           let name=document.getElementById('name').value;

           
           let xhttp=new XMLHttpRequest();

           xhttp.open('POST', 'productsearchCheck.php', true);
           xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
           xhttp.send('name='+name);
           xhttp.onreadystatechange=function(){
            if(this.readyState==4 && this.status==200)
            {

               //alert(this.responseText);
               let obj=JSON.parse(this.responseText);
               document.getElementById('searchmsg').innerHTML=obj[0].name;
               buildTable(obj);
               
               
            }
           }

        }

        function buildTable(data,row)
        {
           let table=document.getElementById('myTable');
           
           table.innerHTML="";
           console.log(data.length);
           for(let i=0;i<data.length;i++)
           {
           	row=`<tr>
                       <td>${data[i].id}</td>
                       <td>${data[i].name}</td>
                       <td>${data[i].buyingprice}</td>
                       <td>${data[i].sellingprice}</td>
                       <td>${data[i].sellingprice - data[i].sellingprice}</td>
           	         </tr>`

           	         table.innerHTML+=row;
           }



        }
    	
    </script>
</body>
</html>