<?php
    include ('koneksi.php');
    
    if(isset($_POST['submit'])){
        $productCode = $_POST['productCode'];
        $productName = $_POST['productName'];
        $productLine = $_POST['productLine'];
        $productScale = $_POST['productScale'];
        $productVendor = $_POST['productVendor'];
        $productDescription = $_POST['productDescription'];
        $quantityInStock = $_POST['quantityInStock'];
        $buyPrice = $_POST['buyPrice'];
        $MSRP = $_POST['MSRP'];

        $query = "INSERT INTO products (productCode, productName, productLine, productScale, productVendor, productDescription, quantityInStock, buyPrice, MSRP)
                    VALUES ('$productCode', '$productName', '$productLine', '$productScale', '$productVendor', '$productDescription', '$quantityInStock', '$buyPrice', '$MSRP')";

        $result = mysqli_query($conn, $query);

        if($result){
            header("Location: product.php");
        }else{
            echo "Failed to add new product";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Add New Product</title>
</head>
<body>
    <nav>
        <h2>Add New Product</h2>
        <ul>
            <li><a href="customers.php">Customers</a></li>
            <li><a href="product.php">Products</a></li>
        </ul>
    </nav>
    <div class="content"">
  <form action="product.php" method="post">
    <label for="productCode">Product Code:</label>
    <input type="text" id="productCode" name="productCode" required><br><br>

    <label for="productName">Product Name:</label>
    <input type="text" id="productName" name="productName" required><br><br>

    <label for="productLine">Product Line:</label>
    <select id="productLine" name="productLine" required>
      <option value="" disabled selected>Select a product line</option>
      <?php
      $query = "SELECT productLine FROM productlines";
      $result = mysqli_query($conn, $query);

      if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
          echo "<option value='" . $row['productLine'] . "'>" . $row['productLine'] . "</option>";
        }
      }
      ?>
    </select><br><br>

    <label for="productScale">Product Scale:</label>
    <input type="text" id="productScale" name="productScale" required><br><br>

    <label for="productVendor">Product Vendor:</label>
    <input type="text" id="productVendor" name="productVendor" required><br><br>

    <label for="productDescription">Product Description:</label>
    <input id="productDescription" name="productDescription" required></input><br><br>

    <label for="quantityInStock">Quantity in Stock:</label>
    <input type="number" id="quantityInStock" name="quantityInStock" required><br><br>

    <label for="buyPrice">Buy Price:</label>
    <input type="number" id="buyPrice" name="buyPrice" required><br><br>

    <label for="MSRP">MSRP:</label>
    <input type="number" id="MSRP" name="MSRP" required><br><br>

    <input type="submit" name="submit" value="Add New Product">
  </form>
</div>

            </body>
            </html>
