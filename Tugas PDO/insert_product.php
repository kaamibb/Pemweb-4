<?php
require('koneksi.php');

if (isset($_POST["submit"])) {
    if (insert_product($_POST) > 0) {
        echo "
            <script>
                alert('Data Berhasil Ditambahkan');
                document.location.href = 'product.php';
            </script> 
        ";
    } else {
        echo "
            <script>
                alert('Data Berhasil Ditambahkan');
                document.location.href = 'product.php';
            </script> 
    ";
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
  <form action="insert_product.php" method="post">
    <label for="productCode">Product Code:</label>
    <input type="text" id="productCode" name="productCode" required><br><br>

    <label for="productName">Product Name:</label>
    <input type="text" id="productName" name="productName" required><br><br>

    <label for="productLine">Product Line:</label>
    <select class="formsize" id="productLine" name="productLine">
                        <option value="Classic Cars">Classic Cars</option>
                        <option value="Motorcycles">Motorcycles</option>
                        <option value="Planes">Planes</option>
                        <option value="Ships">Ships</option>
                        <option value="Trains">Trains</option>
                        <option value="Trucks and Buses">Trucks and Buses</option>
                        <option value="Vintage Cars">Vintage Cars</option>
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
