<?php
    include ('koneksi.php');
    
    if(isset($_POST['submit'])){
        $customerNumber = $_POST['customerNumber'];
        $customerName = $_POST['customerName'];
        $contactLastName = $_POST['contactLastName'];
        $contactFirstName = $_POST['contactFirstName'];
        $phone = $_POST['phone'];
        $addressLine1 = $_POST['addressLine1'];
        $addressLine2 = $_POST['addressLine2'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $postalCode = $_POST['postalCode'];
        $country = $_POST['country'];
        $salesRepEmployeeNumber = $_POST['salesRepEmployeeNumber'];
        $creditLimit = $_POST['creditLimit'];
    
        $query = "INSERT INTO customers (customerNumber, customerName, contactLastName, contactFirstName, phone, addressLine1, addressLine2, city, state, postalCode, country, salesRepEmployeeNumber, creditLimit)
        VALUES ('$customerNumber' ,'$customerName', '$contactLastName', '$contactFirstName', '$phone', '$addressLine1', '$addressLine2', '$city', '$state', '$postalCode', '$country', $salesRepEmployeeNumber, $creditLimit)";
    
        $result = mysqli_query($conn, $query);
    
        if($result){
            header("Location: customers.php");
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

            <label for="salesRepEmployeeNumber">Sales Rep Employee Number:</label>
            <select name="salesRepEmployeeNumber">
    <?php
        $query = "SELECT employeeNumber, lastName FROM employees";
        $result = mysqli_query($conn, $query);
        
        while($row = mysqli_fetch_assoc($result)){
            echo "<option value='{$row['employeeNumber']}'>{$row['lastName']}</option>";
        }
    ?>
</select><br><br>
            <label for="creditLimit">Credit Limit:</label>
            <input type="text" id="creditLimit" name="creditLimit"><br><br>

            <input type="submit" name="submit" value="Add New Product">
            </div>
        </form>
	</div>
    </body>
</html> 