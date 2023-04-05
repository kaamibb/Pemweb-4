<?php
    include('koneksi.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id_driver = $_POST["id_driver"];
        $nama = $_POST["nama"];
        $no_sim = $_POST["no_sim"];
        $alamat = $_POST["alamat"];

        $sql_check = "SELECT id_driver FROM driver WHERE id_driver = '$id_driver'";
        $result_check = mysqli_query(connection(), $sql_check);

        if (mysqli_num_rows($result_check) > 0) {
            echo "Error: Driver with ID $id_driver already exists";
        } else {
            $sql = "INSERT INTO driver (id_driver, nama, no_sim, alamat)
            VALUES ('$id_driver', '$nama', '$no_sim', '$alamat')";

            if (mysqli_query(connection(), $sql)) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error(connection());
            }
        }
        header('Location: driver.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Transupn</title>
</head>
<body>
<nav>
        <h2>Form Driver</h2>
        <ul>
            <div class="dropdown">
                <a href="<?php echo "bus.php"; ?>">Bus</a>
                <div class="menu">
                <a href="<?php echo "menambah_bus.php"; ?>">Insert</a>
                </div>
            </div>

            <div class="dropdown">
                <a href="<?php echo "driver.php"; ?>">Driver</a>
                <div class="menu">
                <a href="<?php echo "menambah_driver.php"; ?>">Insert</a>
                <a href="<?php echo "pendapatan_driver.php"; ?>">Data</a>
                </div>
            </div>

            <div class="dropdown">
                <a href="<?php echo "kondektur.php"; ?>">Kondektur</a>
                <div class="menu">
                <a href="<?php echo "menambah_kondektur.php"; ?>">Insert</a>
                <a href="<?php echo "pendapatan_kondektur.php"; ?>">Data</a>
                </div>
            </div>

            <div class="dropdown">
                <a href="<?php echo "trans_upn.php"; ?>">Trans UPN</a>
                <div class="menu">
                <a href="<?php echo "menambah_trans_upn.php"; ?>">Insert</a>
                </div>
            </div>
         </ul>
    </nav>
    <div class="box"">
    <p>Form Driver</p>
                      <form action="menambah_driver.php" method="POST">

                        <label for="id_driver">Id Driver:</label>
                        <input type="text" placeholder="id_driver" name="id_driver" required="required">

                        <label for="nama">Nama:</label>
                        <input type="text" placeholder="nama" name="nama" required="required">

                        <label for="no_sim">No Sim:</label>
                        <input type="text" class="form-control" placeholder="no_sim" name="no_sim" required="required">

                        <label for="alamat">Alamat:</label>
                        <input type="text" placeholder="alamat" name="alamat" required="required">

                      <input type="submit" name="submit" value="Simpan">
                      </form>
</div>
            </body>
            </html>