<?php
include('koneksi.php');
$id_bus = $_GET['id_bus'];

// First, delete the dependent records in trans_upn
$query1 = "DELETE FROM trans_upn WHERE id_bus='$id_bus'";
$result1 = mysqli_query(connection(), $query1);

// Then, delete the record in bus
$query2 = "DELETE FROM bus WHERE id_bus='$id_bus'";
$result2 = mysqli_query(connection(), $query2);

if($result2) {
    header("Location:bus.php");
} else {
    echo "Error deleting record: " . mysqli_error(connection());
}
?>
