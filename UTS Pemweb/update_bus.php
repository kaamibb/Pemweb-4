<?php
   include "koneksi.php";
   
   $status = "";
   $result = "";
   if ($_SERVER["REQUEST_METHOD"] === "GET") {
       if (isset($_GET["id_bus"])) {
           //query SQL
           $id_bus_upd = $_GET["id_bus"];
           $query = "SELECT * FROM bus WHERE id_bus = '$id_bus_upd'";
   
           //eksekusi query
           $result = mysqli_query(connection(), $query);
       }
   }
   
   if ($_SERVER["REQUEST_METHOD"] === "POST") {
       $id_bus = $_POST["id_bus"];
       $plat = $_POST["plat"];
       $status = $_POST["status"];
       //query SQL
       $sql = "UPDATE bus SET  plat='$plat', status='$status' WHERE id_bus='$id_bus'";
   
       //eksekusi query
       $result = mysqli_query(connection(), $sql);
       if ($result) {
           $status = "ok";
       } else {
           $status = "err";
       }
   
       //redirect ke halaman lain
       header("Location: bus.php");
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
        <h2>Update Bus</h2>
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
    <p>Update Bus</p>
    <form action="update_bus.php" method="POST">
                        <?php while ($data = mysqli_fetch_array($result)): ?>
                           <label>Id Bus:</label>
                           <input type="text" placeholder="id_bus" name="id_bus" value="<?php echo $data[
                              "id_bus"
                              ]; ?>" required="required" readonly>

                           <label>Plat:</label>
                           <input type="text" placeholder="plat" name="plat" value="<?php echo $data[
                              "plat"
                              ]; ?>" required="required">

                           <label>Status:</label>
                           <select type="pen" name="status" required>
                              <option value="1" <?php if ($data["status"] == 1) {
                                 echo "selected";
                                 } ?>>Aktif</option>
                              <option value="2" <?php if ($data["status"] == 2) {
                                 echo "selected";
                                 } ?>>Tidak Aktif</option>
                              <option value="0" <?php if ($data["status"] == 0) {
                                 echo "selected";
                                 } ?>>Non-Aktif</option>
                           </select>
                           <br>
                           <input type="submit" name="submit" value="Update">
                           <?php endwhile; ?>
                           </form>
</div>
            </body>
</html>