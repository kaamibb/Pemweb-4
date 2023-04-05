<?php
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('koneksi.php');

  $status = '';
  $result = '';
  //melakukan pengecekan apakah ada variable GET yang dikirim
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      if (isset($_GET['id_trans_upn'])) {
          //query SQL
          $id_trans_upn_upd = $_GET['id_trans_upn'];
          $query = "SELECT * FROM trans_upn WHERE id_trans_upn = '$id_trans_upn_upd'";
         
          //eksekusi query
          $result = mysqli_query(connection(),$query);
      }
  }

  //melakukan pengecekan apakah ada form yang dipost
  //melakukan pengecekan apakah ada form yang dipost
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_trans_upn = $_POST['id_trans_upn'];
    $id_kondektur = $_POST['id_kondektur'];
    $id_bus = $_POST['id_bus'];
    $id_driver = $_POST['id_driver'];
    $jumlah_km = $_POST['jumlah_km'];
    $tanggal = $_POST['tanggal'];

    //query SQL
    $sql = "UPDATE trans_upn SET id_kondektur='$id_kondektur', id_bus='$id_bus', id_driver='$id_driver', jumlah_km='$jumlah_km', tanggal='$tanggal' WHERE id_trans_upn='$id_trans_upn'";

    //eksekusi query
    $result = mysqli_query(connection(), $sql);

    if ($result) {
      $status = 'ok';
    } else {
      $status = 'err';
    }

    //redirect ke halaman lain
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
        <h2>Update Trans UPN</h2>
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
  <p>Update Trans UPN</p>
  <form action="update_trans_upn.php" method="POST">
  <?php while($data = mysqli_fetch_array($result)): ?>

                            <label>id_trans_upn</label>
                            <input type="text" class="form-control" placeholder="id_trans_upn" name="id_trans_upn" value="<?php echo $data['id_trans_upn'];  ?>" required="required" readonly>

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
        <select type="pen"name="id_bus">
            <?php
                 $query_bus = "SELECT * FROM bus";
                 $result_bus = mysqli_query(connection(), $query_bus);
                 while($data_bus = mysqli_fetch_array($result_bus)) {
                     echo "<option value='".$data_bus['id_bus']."'>".$data_bus['plat']."</option>";
                 }
             ?>
        </select>
    
    <label>Id driver:</label>
        <select type="pen"name="id_driver">
            <?php
                 $query_driver = "SELECT * FROM driver";
                 $result_driver = mysqli_query(connection(), $query_driver);
                 while($data_driver = mysqli_fetch_array($result_driver)) {
                     echo "<option value='".$data_driver['id_driver']."'>".$data_driver['nama']."</option>";
                 }
             ?>
        </select>

    <label>jumlah_km</label>
    <input type="text" class="form-control" placeholder="jumlah_km" name="jumlah_km" value="<?php echo $data['jumlah_km'];  ?>" required="required">

    <label>Tanggal:</label>
    <input type="text" class="form-control" placeholder="tanggal" name="tanggal" value="<?php echo $data['tanggal'];  ?>" required="required">

    <input type="submit" name="submit" value="Update">
                          <?php endwhile; ?>
                           </form>
</div>
            </body>
</html>