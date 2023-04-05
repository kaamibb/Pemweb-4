<?php
   include "koneksi.php";
   
   $status = "";
   $result = "";
   
   if ($_SERVER["REQUEST_METHOD"] === "GET") {
       if (isset($_GET["id_kondektur"])) {
           //query SQL
           $id_kondektur_upd = $_GET["id_kondektur"];
           $query = "SELECT * FROM kondektur WHERE id_kondektur = '$id_kondektur_upd'";
   
           //eksekusi query
           $result = mysqli_query(connection(), $query);
       }
   }
   
   if ($_SERVER["REQUEST_METHOD"] === "POST") {
       $id_kondektur = $_POST["id_kondektur"];
       $nama = $_POST["nama"];
       
       //query SQL
       $sql = "UPDATE kondektur SET id_kondektur='$id_kondektur', nama='$nama' WHERE id_kondektur='$id_kondektur'";
   
       //eksekusi query
       $result = mysqli_query(connection(), $sql);
       
       if ($result) {
           $status = "ok";
       } else {
           $status = "err";
       }
   
       //redirect ke halaman lain
       header("Location: kondektur.php");
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
        <h2>Update Kondektur</h2>
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
    <p>Update Kondektur</p>
                        <form action="update_kondektur.php" method="POST">
                        <?php while($data = mysqli_fetch_array($result)): ?>
                            <label>id_kondektur</label>
                            <input type="text" class="form-control" placeholder="id_kondektur" name="id_kondektur" value="<?php echo $data['id_kondektur'];  ?>" required="required" readonly >
                            
                            <label>nama</label>
                            <input type="text" class="form-control" placeholder="nama" name="nama" value="<?php echo $data['nama'];  ?>" required="required">

                            <input type="submit" name="submit" value="Update">
                          <?php endwhile; ?>
                           </form>
</div>
            </body>
</html>