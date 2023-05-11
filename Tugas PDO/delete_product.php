<?php
include('koneksi.php');


if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['productCode'])) {
    $productCode = $_GET['productCode'];

    $query1 = "DELETE FROM orderdetails WHERE productCode = '$productCode'";
    $result1 = $conn->query($query1);

    $query2 = "DELETE FROM products WHERE productCode = '$productCode'";
    $result2 = $conn->query($query2);

    if ($result1 && $result2) {
        echo "
            <script>
                alert('Data Berhasil Dihapus');
                document.location.href = 'product.php';
            </script> 
    ";
    } else {
        echo "
            <script>
                alert('Data Gagal Dihapus');
                document.location.href = 'product.php';
            </script> 
    ";
    }
}
}