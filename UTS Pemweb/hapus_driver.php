<?php 

include('koneksi.php');

$status = '';
$result = '';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['id_driver'])) {
        // Get the id_driver parameter
        $id_driver = $_GET['id_driver'];

        // Check if there are any related rows in the trans_upn table
        $query = "SELECT COUNT(*) as count FROM trans_upn WHERE id_driver = '$id_driver'";
        $result = mysqli_query(connection(), $query);

        if ($result) {
            $count = mysqli_fetch_assoc($result)['count'];

            if ($count > 0) {
                // If there are related rows, delete them first
                $query = "DELETE FROM trans_upn WHERE id_driver = '$id_driver'";
                $result = mysqli_query(connection(), $query);

                if (!$result) {
                    $status = 'err';
                    header('Location: driver.php?status=' . $status);
                    exit();
                }
            }
        } else {
            $status = 'err';
            header('Location: driver.php?status=' . $status);
            exit();
        }

        // Delete the row from the driver table
        $query = "DELETE FROM driver WHERE id_driver = '$id_driver'";
        $result = mysqli_query(connection(), $query);

        if ($result) {
            $status = 'ok';
        } else {
            $status = 'err';
        }

        // Redirect to the driver page
        header('Location: driver.php?status=' . $status);
    }
}
