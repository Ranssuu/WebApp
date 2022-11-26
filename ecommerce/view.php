<?php
include_once("connection.php");
?>
<style>
	table{
		text-align: center;
		width: 100%;
	}
</style>
<table border>
	<tr>
		<th>Picture</th>
		<th>Product Category</th>
		<th>Product Name</th>
		<th>Product Price</th>
		<th>Product Quantity</th>
		<th>Product Description</th>
		<th>DELETE</th>
	</tr>
	<?php
		$viewQuery = $pdo->prepare("SELECT * FROM products_tbl ORDER BY productID DESC");
		$viewQuery->execute();
		
		$totalRecords = $viewQuery->rowCount();
		
		
		while($rows = $viewQuery->fetch()){
			$productId = $rows['productID'];
			$productCategory = $rows['productCat'];
			$productName = $rows['productName'];
			$productPrice = $rows['productPrice'];
			$productQuantity = $rows['productQty'];
			$productDescription = $rows['productDes'];
			$productImage = $rows['productImg'];
		
	?>
	<tr>
		<td><img src="img/ProdImg/<?php echo $productImage;?>" alt="Profile Picture" width="100"/></td>
		<td><?php echo $productCategory;?></td>
		<td><?php echo $productName;?></td>
		<td><?php echo $productPrice;?></td>
		<td><?php echo $productQuantity;?></td>
		<td><?php echo $productDescription;?></td>
		<td><a href="del.php?uid=<?php echo $productId;?>" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
	</tr>
	
		<?php } ?>

</table>
	<strong>Total Records: <?php echo $totalRecords;?></strong>