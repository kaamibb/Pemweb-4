<?php
require('koneksi.php');

if (isset($_POST["submit"])) {
    if (insert_customer($_POST) > 0) {
        echo "
            <script>
                alert('Data Berhasil Ditambahkan');
                document.location.href = 'customers.php';
            </script> 
        ";
    } else {
        echo "
            <script>
                alert('Data Berhasil Ditambahkan');
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
        <form action="insert_customers.php" method="POST">
        <div class="inputbox">
            <label for="customerNumber">Customer Number:</label>
            <input type="text" id="customerNumber" name="customerNumber" required><br><br>

            <label for="customerName">Customer Name:</label>
            <input type="text" id="customerName" name="customerName" required><br><br>

            <label for="contactLastName">Contact Last Name:</label>
            <input type="text" id="contactLastName" name="contactLastName" required><br><br>

            <label for="contactFirstName">Contact First Name:</label>
            <input type="text" id="contactFirstName" name="contactFirstName" required><br><br>

            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" required><br><br>

            <label for="addressLine1">Address Line 1:</label>
            <input type="text" id="addressLine1" name="addressLine1" required><br><br>

            <label for="addressLine2">Address Line 2:</label>
            <input type="text" id="addressLine2" name="addressLine2"><br><br>

            <label for="city">City:</label>
            <input type="text" id="city" name="city" required><br><br>

            <label for="state">State:</label>
            <input type="text" id="state" name="state"><br><br>

            <label for="postalCode">Postal Code:</label>
            <input type="text" id="postalCode" name="postalCode"><br><br>

            <label for="country">Country:</label>
            <input type="text" id="country" name="country" required><br><br>

            <label for="salesRepEmployeeNumber">Sales Rep Employee Number </label>
            <select class="formsize" id="salesRepEmployeeNumber" name="salesRepEmployeeNumber">
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
                    </select><br></br>

            <label for="creditLimit">Credit Limit:</label>
            <input type="text" id="creditLimit" name="creditLimit"><br><br>

            <input type="submit" name="submit" value="Add New Product">
            </div>
        </form>
	</div>
    </body>
</html> 