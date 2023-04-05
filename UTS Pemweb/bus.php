<?php
   include "koneksi.php"; ?>
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
         <h2>Bus</h2>
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
      <div class="container">
<?php
  // Bagian select
  $query = "SELECT * FROM bus";
  if (isset($_GET["status"]) && $_GET["status"] != "all") {
      $status = $_GET["status"];
      $query .= " WHERE status='$status'";
  }
  $result = mysqli_query(connection(), $query);
?>
<?php $statuses = [
  ["id" => "all", "name" => "Semua"],
  ["id" => "1", "name" => "Aktif"],
  ["id" => "2", "name" => "Tidak Aktif"],
  ["id" => "0", "name" => "Sedang Perawatan"],
  ]; ?>
<form method="GET">
  <select name="status" id="status" >
    <?php foreach ($statuses as $status): ?>
    <option value="<?php echo $status["id"]; ?>" <?php echo $status[
      "id"
      ] == @$_GET["status"]
      ? "selected"
      : ""; ?>><?php echo $status["name"]; ?></option>
    <?php endforeach; ?>
  </select>
  <button type="submit" class="cssbuttons-io-button">Filter</button>
</form>
      <table class="rwd-table">
         <tbody>
            <tr>
               <th>ID Bus</th>
               <th>Plat</th>
               <th>Status</th>
               <th>Total KM</th>
               <th>Action</th>
            </tr>
            <?php while ($data = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?php echo $data["id_bus"]; ?></td>
               <td><?php echo $data["plat"]; ?></td>
               <td>
                  <?php
                     $status = $data["status"];
                     if ($status == 1) {
                         $color = "green";
                     } elseif ($status == 2) {
                         $color = "yellow";
                     } elseif ($status == 0) {
                         $color = "red";
                     }
                     echo "<button style='background-color: $color;'>$status</button>";
                     ?>
               <td>
                  <?php
                     $query_km =
                         "SELECT SUM(jumlah_km) as total_km FROM trans_upn WHERE id_bus=" .
                         $data["id_bus"];
                     $result_km = mysqli_query(connection(), $query_km);
                     $data_km = mysqli_fetch_array($result_km);
                     echo $data_km["total_km"];
                     ?>
               </td>
               <td>
                  <a href="<?php echo "update_bus.php?id_bus=" .
                     $data[
                         "id_bus"
                     ]; ?>" class="update-button">Update</a>
                  <a href="<?php echo "hapus_bus.php?id_bus=" .
                     $data[
                         "id_bus"
                     ]; ?>" class="delete-button">Delete</a>
               </td>
            </tr>
            <?php endwhile; ?>
         </tbody>
      </table>
   </body>
</html>