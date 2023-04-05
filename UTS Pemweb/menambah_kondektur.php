<?php 
    include ('koneksi.php');

    $status = '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id_kondektur= $_POST['id_kondektur'];
        $nama = $_POST['nama'];
        //query SQL
        $query = "INSERT INTO kondektur (id_kondektur, nama) 
        VALUES('$id_kondektur', '$nama')"; 
        //eksekusi query
        $result = mysqli_query(connection(),$query);
        if ($result) {
          $status = 'ok';
        }
        else{
          $status = 'err';
        }
        header('Location: kondektur.php');
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
        <h2>Form Kondektur</h2>
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
    <p>Form Kondektur</p>
                      <form action="menambah_kondektur.php" method="POST">

                        <label>id_kondektur</label>
                        <input type="text" class="form-control" placeholder="id_kondektur" name="id_kondektur" required="required">

                        <label>nama</label>
                        <input type="text" class="form-control" placeholder="nama" name="nama" required="required">

                        <input type="submit" name="submit" value="Simpan">
  </form>
</div>
            </body>
            </html>