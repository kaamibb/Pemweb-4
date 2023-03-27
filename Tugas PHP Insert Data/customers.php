<?php
include('koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Classic Model</title>
</head>
<body>
    <nav>
        <h2>Classic Model</h2>
        <ul>
            <li><a href="#">Customers</a></li>
            <li><a href="product.php">Products</a></li>
        </ul>
    </nav>
    <div class="container">
  <table class="rwd-table">
    <tbody>
      <tr>
                    <th>Customer Number</th>
                    <th>Customer Name</th>
                    <th>Contact Last Name</th>
                    <th>Contact First Name</th>
                    <th>Phone</th>
                    <th>Address Line1</th>
                    <th>Address Line2</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Postal Code</th>
                    <th>Country</th>
                    <th>Sales Rep Employee Number</th>
                    <th>Credit Limit</th>
                </tr>
                <button class="cssbuttons-io-button" onclick="location.href='insert_customers.php'">Insert</button>
                <tr>
                <?php
                $query = "SELECT * FROM customers";
                $result = mysqli_query($conn, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <td>
                                <?php echo $row['customerNumber']; ?>
                            </td>
                            <td>
                                <?php echo $row['customerName']; ?>
                            </td>
                            <td>
                                <?php echo $row['contactLastName']; ?>
                            </td>
                            <td>
                                <?php echo $row['contactFirstName']; ?>
                            </td>
                            <td>
                                <?php echo $row['phone']; ?>
                            </td>
                            <td>
                                <?php echo $row['addressLine1']; ?>
                            </td>
                            <td>
                                <?php echo $row['addressLine2']; ?>
                            </td>
                            <td>
                                <?php echo $row['city']; ?>
                            </td>
                            <td>
                                <?php echo $row['state']; ?>
                            </td><td>
                                <?php echo $row['postalCode']; ?>
                            </td><td>
                                <?php echo $row['country']; ?>
                            </td><td>
                                <?php echo $row['salesRepEmployeeNumber']; ?>
                            </td><td>
                                <?php echo $row['creditLimit']; ?>
                            </td>
                            </tr>
                            <?php
                    }
                    mysqli_free_result($result);
                } else {
                    echo "Data tidak ada";
                }
                mysqli_close($conn);
                ?>
			</tbody>
  </table>
</div>
</body>

</html>