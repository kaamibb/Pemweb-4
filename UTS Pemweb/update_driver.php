<?php
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('koneksi.php');

  $status = '';
  $result = '';
  //melakukan pengecekan apakah ada variable GET yang dikirim
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      if (isset($_GET['id_driver'])) {
          //query SQL
          $id_driver_upd = $_GET['id_driver'];
          $query = "SELECT * FROM driver WHERE id_driver = '$id_driver_upd'";
         
          //eksekusi query
          $result = mysqli_query(connection(),$query);
      }
  }

  //melakukan pengecekan apakah ada form yang dipost
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id_driver= $_POST['id_driver'];
        $nama = $_POST['nama'];
        $no_sim = $_POST['no_sim'];
        $alamat = $_POST['alamat'];
        //query SQL
        $sql = "UPDATE driver SET nama='$nama', no_sim='$no_sim', alamat='$alamat' WHERE id_driver='$id_driver'";

        //eksekusi query
        $result = mysqli_query(connection(),$sql);
        if ($result) {
            $status = 'ok';
        } else {
            $status = 'err';
        }

        //redirect ke halaman lain
        header('Location: driver.php?status='.$status);
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
        <h2>Update Driver</h2>
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
    <p>Update Driver</p>
                        <form action="update_driver.php" method="POST">
                        <?php while($data = mysqli_fetch_array($result)): ?>

                            <label>Id Driver:</label>
                            <input type="text" placeholder="id_driver" name="id_driver" value="<?php echo $data['id_driver'];  ?>" required="required" readonly>

                            <label>nama</label>
                            <input type="text" placeholder="nama" name="nama" value="<?php echo $data['nama'];  ?>" required="required">

                            <label>No Sim:</label>
                            <input type="text" placeholder="no_sim" name="no_sim" value="<?php echo $data['no_sim'];  ?>" required="required" >

                            <label>alamat</label>
                            <input type="text" placeholder="alamat" name="alamat" value="<?php echo $data['alamat'];  ?>" required="required">

                            <br>
                          <input type="submit" name="submit" value="Update">
                          <?php endwhile; ?>
                           </form>
</div>
            </body>
</html>