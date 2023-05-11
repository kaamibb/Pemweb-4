<?php
    include ('koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<link href="style.css" rel="stylesheet">
	<title>Classic Model</title>
</head>
<body>
	<nav>
		<h2>Classic Model</h2>
		<ul>
			<li>
				<a href="customers.php">Customers</a>
			</li>
			<li>
				<a href="#">Products</a>
			</li>
		</ul>
	</nav>
	<div class="container">
  <table class="rwd-table" >
    <tbody>
      <tr>
	  <th>Product Code</th>
					<th>Product Name</th>
					<th>Product Line</th>
					<th>Product Scale</th>
					<th>Product Vendor</th>
					<th>Product Description</th>
					<th>Quantity In Stock</th>
					<th>Buy Price</th>
					<th>MSRP</th>
					<th>Action</th>
      </tr>
	  <button class="cssbuttons-io-button" onclick="location.href='insert_product.php'">Insert</button>
      <tr>
					<?php
					    $stmt = $conn->prepare("SELECT * FROM products");
					    $stmt->execute();
					    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
					    if(count($rows)>0){
					        foreach($rows as $row){
					    ?>
					        <td><?php echo $row['productCode']; ?></td>
					        <td><?php echo $row['productName']; ?></td>
					        <td><?php echo $row['productLine']; ?></td>
					        <td><?php echo $row['productScale']; ?></td>
					        <td><?php echo $row['productVendor']; ?></td>
					        <td><?php echo $row['productDescription']; ?></td>
					        <td><?php echo $row['quantityInStock']; ?></td>
					        <td><?php echo $row['buyPrice']; ?></td>
					        <td><?php echo $row['MSRP']; ?></td>
							<td>
                            <a href="update_product.php?productCode=<?php echo $row["productCode"]; ?>" class="update-button">Update</a>
                            <a href="delete_product.php?productCode=<?php echo $row['productCode']; ?>" class="delete-button">Delete</a>
                            </td>
					    </tr>
					<?php
					        }
					    }else{
					        echo "Data tidak ada";
					    }
					    $stmt = null;
					?>
			</tbody>
  </table>
</div>
</body>
</html>
