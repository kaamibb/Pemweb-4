<?php
require('koneksi.php');

$customerNumber = $_GET["customerNumber"];
$stmt = $conn->prepare("SELECT * FROM customers WHERE customerNumber = :customerNumber");
$stmt->bindParam(':customerNumber', $customerNumber);
$stmt->execute();
$data = $stmt->fetch();

if (isset($_POST["submit"])) {
    if (updateCustomer($_POST) > 0) {
        echo "
            <script>
                alert('Data Berhasil Diubah');
                document.location.href = 'customers.php';
            </script> 
        ";
    } else {
        echo "
            <script>
                alert('Data Gagal Diubah');
                document.location.href = 'customers.php';
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
        <form action="update_customers.php" method="POST">
        <div class="inputbox">

            <input type="hidden" name="customerNumber" id="customerNumber"
                value="<?php echo $data["customerNumber"]; ?>">
            
                <label for="customerName">Customer Name </label>
                <input type="text" name="customerName" id="customerName"
                        value="<?php echo $data["customerName"]; ?>"><br><br>
            
                <label for="contactLastName">Customer Last Name </label>
                <input type="text" name="contactLastName" id="contactLastName"
                        value="<?php echo $data["contactLastName"]; ?>"><br><br>
            
                <label for="contactFirstName">Customer First Name </label>
                <input type="text" name="contactFirstName" id="contactFirstName"
                        value="<?php echo $data["contactFirstName"]; ?>"><br><br>
            
                <label for="phone">Phone </label>
                <input type="text" name="phone" id="phone" value="<?php echo $data["phone"]; ?>"><br><br>
            
                <label for="addressLine1">Address Line 1 </label>
                <input type="text" name="addressLine1" id="addressLine1"
                        value="<?php echo $data["addressLine1"]; ?>"><br><br>
            
                <label for="addressLine2">Address Line 2 </label>
                <input type="text" name="addressLine2" id="addressLine2"
                        value="<?php echo $data["addressLine2"]; ?>"><br><br>
            
                <label for="city">City </label>
                <input type="text" name="city" id="city" value="<?php echo $data["city"]; ?>"><br><br>
            
                <label for="state">State </label>
                <input type="text" name="state" id="state" value="<?php echo $data["state"]; ?>"><br><br>
            
                <label for="postalCode">Postal Code </label>
                <input type="text" name="postalCode" id="postalCode" value="<?php echo $data["postalCode"]; ?>"><br><br>
                
            
                <label for="country">Country </label>
                <input type="text" name="country" id="country" value="<?php echo $data["country"]; ?>"><br><br>
            
                <label for="salesRepEmployeeNumber">Sales Rep Employee Number </label>
                <select class="formsize" id="salesRepEmployeeNumber" name="salesRepEmployeeNumber"
                        value="<?php echo $data["salesRepEmployeeNumber"]; ?>">
                        <option value="1002">1002 - Murphy</option>
                        <option value="1056">1056 - Patterson</option>
                        <option value="1076">1076 - Firrelli</option>
                        <option value="1088">1088 - Patterson</option>
                        <option value="1102">1102 - Bondur</option>
                        <option value="1143">1143 - Bow</option>
                        <option value="1165">1165 - Jennings</option>
                        <option value="1166">1166 - Thompson</option>
                        <option value="1188">1188 - Firrelli</option>
                        <option value="1286">1286 - Tseng</option>
                        <option value="1323">1323 - Vanauf</option>
                        <option value="1337">1337 - Bondur</option>
                        <option value="1370">1370 - Hernandez</option>
                        <option value="1401">1401 - Castillo</option>
                        <option value="1501">1501 - Bott</option>
                        <option value="1504">1504 - Jones</option>
                        <option value="1611">1611 - Fixter</option>
                        <option value="1612">1612 - Marsh</option>
                        <option value="1619">1619 - King</option>
                        <option value="1621">1621 - Nishi</option>
                        <option value="1625">1625 - Kato</option>
                        <option value="1702">1702 - Gerard</option>
                    </select><br><br>
            
                <label for="creditLimit">Credit Limit </label>
                <input type="text" name="creditLimit" id="creditLimit" value="<?php echo $data["creditLimit"]; ?>"><br><br>
                
                <input type="submit" name="submit" value="Submit"><br><br>
            </div>
        </form>
	</div>
    </body>
</html> 