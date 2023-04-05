<?php
include ('koneksi.php');

$status = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_trans_upn = $_POST['id_trans_upn'];
    $id_kondektur = $_POST['id_kondektur'];
    $id_bus = $_POST['id_bus'];
    $id_driver = $_POST['id_driver'];
    $jumlah_km = $_POST['jumlah_km'];
    $tanggal = $_POST['tanggal'];

    // Check if the foreign key values exist in their respective tables
    $konduktor_result = mysqli_query(connection(), "SELECT * FROM kondektur WHERE id_kondektur='$id_kondektur'");
    $bus_result = mysqli_query(connection(), "SELECT * FROM bus WHERE id_bus='$id_bus'");
    $driver_result = mysqli_query(connection(), "SELECT * FROM driver WHERE id_driver='$id_driver'");

    if (mysqli_num_rows($konduktor_result) > 0 && mysqli_num_rows($bus_result) > 0 && mysqli_num_rows($driver_result) > 0) {
        $query = "INSERT INTO trans_upn (id_trans_upn, id_kondektur, id_bus, id_driver, jumlah_km, tanggal)
                  VALUES ('$id_trans_upn', '$id_kondektur', '$id_bus', '$id_driver', '$jumlah_km', '$tanggal')";
        $result = mysqli_query(connection(), $query);
        if ($result) {
            $status = 'ok';
        } else {
            $status = 'err';
        }
    } else {
        $status = 'fk_err';
    }
    header('Location: trans_upn.php?status=' . $status);
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
        <h2>Form Trans UPN</h2>
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
    <div class="box">
    <p>Form Trans UPN</p>
    <form action="menambah_trans_upn.php" method="POST">

        <label>Id Trans UPN:</label>
        <input type="text" placeholder="id_trans_upn" name="id_trans_upn" required="required">

        <label>Id Kondektur:</label>
        <select type="pen" name="id_kondektur">
            <?php
                 $query_kondektur = "SELECT * FROM kondektur";
                 $result_kondektur = mysqli_query(connection(), $query_kondektur);
                 while($data_kondektur = mysqli_fetch_array($result_kondektur)) {
                     echo "<option value='".$data_kondektur['id_kondektur']."'>".$data_kondektur['nama']."</option>";
                 }
             ?>
        </select>

        <label>Id Bus:</label>
        <select type="pen" name="id_bus">
            <?php
                 $query_bus = "SELECT * FROM bus";
                 $result_bus = mysqli_query(connection(), $query_bus);
                 while($data_bus = mysqli_fetch_array($result_bus)) {
                     echo "<option value='".$data_bus['id_bus']."'>".$data_bus['plat']."</option>";
                 }
             ?>
        </select>

        <label>Id driver:</label>
        <select type="pen" name="id_driver">
            <?php
                 $query_driver = "SELECT * FROM driver";
                 $result_driver = mysqli_query(connection(), $query_driver);
                 while($data_driver = mysqli_fetch_array($result_driver)) {
                     echo "<option value='".$data_driver['id_driver']."'>".$data_driver['nama']."</option>";
                 }
             ?>
        </select>

        <label>Jumlah Km:</label>
        <input type="text" placeholder="jumlah_km" name="jumlah_km" required="required">

        <label>Tanggal:</label>
        <input type="text" placeholder="year-mm-dd" name="tanggal" required="required">

        <input type="submit" name="submit" value="Simpan">
    </form>
</div>
            </body>
            </html>