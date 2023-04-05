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
         <h2>Kondektur</h2>
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
                                    <th>id_trans_upn</th>
                                    <th>id_kondektur</th>
                                    <th>id_bus</th>
                                    <th>id_driver</th>
                                    <th>jumlah_km</th>
                                    <th>tanggal</th>
                                    <th>opsi</th>
                                    </tr>
                <tr>
                                <?php 
                                $query = "SELECT * FROM trans_upn";
                                $result = mysqli_query(connection(),$query);
                                ?>

                                <?php 
                                    while($data = mysqli_fetch_array($result)): 
                                ?>
                                    <tr>
                                            <td>
                                                <?php 
                                                    echo $data['id_trans_upn'];  
                                                ?>
                                            </td>
                                            <td>
                                                <?php 
                                                    echo $data['id_kondektur'];  
                                                ?>
                                            </td>
                                            <td>
                                                <?php 
                                                    echo $data['id_bus'];  
                                                ?>
                                            </td>
                                            <td>
                                                <?php 
                                                    echo $data['id_driver'];  
                                                ?>
                                            </td>
                                            <td>
                                                <?php 
                                                    echo $data['jumlah_km'];  
                                                ?>
                                            </td>
                                            <td>
                                                <?php 
                                                    echo $data['tanggal'];  
                                                ?>
                                            </td>
                                            <td>
                                            <a href="<?php echo "update_trans_upn.php?id_trans_upn=".$data['id_trans_upn']; ?>"class="update-button">Update</a>
                                            <a href="<?php echo "hapus_trans_upn.php?id_trans_upn=".$data['id_trans_upn']; ?>"class="delete-button">Delete</a>
                                            </td>
                                    </tr>
                                    
                                <?php endwhile ?>
                                </tbody>
  </table>
</div>
</body>

</html>