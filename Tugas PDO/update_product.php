<?php
require('koneksi.php');

$productCode = $_GET["productCode"];
$stmt = $conn->prepare("SELECT * FROM products WHERE productCode = :productCode");
$stmt->bindParam(':productCode', $productCode);
$stmt->execute();
$data = $stmt->fetch();

if (isset($_POST["submit"])) {
    if (updateProduct($_POST) > 0) {
        echo "
            <script>
                alert('Data Berhasil Diubah');
                document.location.href = 'product.php';
            </script> 
        ";
    } else {
        echo "
            <script>
                alert('Data Gagal Diubah');
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
    <title>Add New Customer</title>
</head>
<body>
    <nav>
        <h2>Add New Customer</h2>
        <ul>
            <li><a href="customers.php">Customers</a></li>
            <li><a href="product.php">Products</a></li>
        </ul>
    </nav>
        <div class="content">
        <form action="update_product.php" method="POST">
        <div class="inputbox">

            <input type="hidden" name="productCode" id="productCode" value="<?php echo $data["productCode"]; ?>">

            <label for="productName">Product Name </label>
            <input type="text" name="productName" id="productName" value="<?php echo $data["productName"]; ?>"><br><br>

            <label for="productLine">Product Line </label>
            <select class="formsizee" id="productLine" name="productLine"
                        value="<?php echo $data["productLine"]; ?>">
                        <option value="Classic Cars">Classic Cars</option>
                        <option value="Motorcycles">Motorcycles</option>
                        <option value="Planes">Planes</option>
                        <option value="Ships">Ships</option>
                        <option value="Trains">Trains</option>
                        <option value="Trucks and Buses">Trucks and Buses</option>
                        <option value="Vintage Cars">Vintage Cars</option>
                    </select><br></br>
            <label for="productScale">Product Scale </label>
            <input type="text" name="productScale" id="productScale"
                        value="<?php echo $data["productScale"]; ?>"><br><br>

            <label for="productVendor">Product Vendor </label>
            <input type="text" name="productVendor" id="productVendor"
                        value="<?php echo $data["productVendor"]; ?>"><br><br>

            <label for="productDescription">Product Description </label>
            <textarea name="productDescription" id="productDescription" cols="50"
                        rows="5"><?php echo $data["productDescription"]; ?></textarea><br><br>
                        
            <label for="quantityInStock">Quantity In Stock </label>
            <input type="text" name="quantityInStock" id="quantityInStock"
                        value="<?php echo $data["quantityInStock"]; ?>"><br><br>

            <label for="buyPrice">Buy Price </label>
            <input type="text" name="buyPrice" id="buyPrice" value="<?php echo $data["buyPrice"]; ?>"><br><br>

            <label for="MSRP">MSRP </label>
            <input type="text" name="MSRP" id="MSRP" value="<?php echo $data["MSRP"]; ?>"><br><br>

                <input type="submit" name="submit" value="Submit"><br><br>
            </div>
        </form>
	</div>
    </body>
</html> 