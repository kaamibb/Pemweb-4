<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Buku</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <?php
    echo "<p class=\"title2\">Data Buku</p>";
    $file = "buku.txt";

    $read = file($file); // array

    echo "<table border='1'>
    <thead>
        <th>Judul Buku</th>
        <th>Penerbit</th>
        <th>Tahun Terbit</th>
        <th>Jumlah Halaman</th>
        <th>Pengarang</th>
        <th>Kategori</th>
        <th>Kode Buku</th>
        <th>Foto Cover</th>
    </thead>";

    foreach ($read as $buku) {
        $data_buku = explode("-", $buku); // array
        echo "<tr>";
        echo "<td>$data_buku[0]</td>";
        echo "<td>$data_buku[1]</td>";
        echo "<td>$data_buku[2]</td>";
        echo "<td>$data_buku[3]</td>";
        echo "<td>$data_buku[4]</td>";
        echo "<td>$data_buku[5]</td>";
        echo "<td>$data_buku[6]</td>";
        echo "<td><img src='$data_buku[7]' alt='Foto Cover' style='width: 100px;'></td>";
        echo "</tr>";
    }
    echo "</table>";

    echo '<br><br><a href="index.php">Kembali ke Form</a>';
    ?>

</body>

</html>