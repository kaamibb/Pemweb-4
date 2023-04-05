<?php
    include('koneksi.php');
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
         <h2>Driver</h2>
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
  <table class="rwd-table">
    <tbody>
      <tr>
                                    <th>Id Driver</th>
                                    <th>Nama</th>
                                    <th>No Sim</th>
                                    <th>Alamat</th>
                                    <th>Opsi</th>
                                    </tr>
                <tr>
                                <?php 
                                $query = "SELECT * FROM driver";
                                $result = mysqli_query(connection(),$query);
                                ?>

                                <?php 
                                    while($data = mysqli_fetch_array($result)): 
                                ?>
                                    <tr>
                                            <td>
                                                <?php 
                                                    echo $data['id_driver'];  
                                                ?>
                                            </td>
                                            <td>
                                                <?php 
                                                    echo $data['nama'];  
                                                ?>
                                            </td>
                                            <td>
                                                <?php 
                                                    echo $data['no_sim'];  
                                                ?>
                                            </td>
                                            <td>
                                                <?php 
                                                    echo $data['alamat'];  
                                                ?>
                                            </td>
                                            <td>
                                            <a href="<?php echo "update_driver.php?id_driver=".$data['id_driver']; ?>" class="update-button">Update</a>
                                            <a href="<?php echo "hapus_driver.php?id_driver=".$data['id_driver']; ?>" class="delete-button">Delete</a>
                                            </td>
                                    </tr>
                                    
                                <?php endwhile ?>
                                </tbody>
  </table>
</div>
</body>

</html>