<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Buku</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
<?php
if ($_POST) {
    // Variable penampung
    $judul = $_POST['judul'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $halaman = $_POST['halaman'];
    $pengarang = $_POST['pengarang'];
    $kategori = $_POST['kategori'];
    $kode_buku = $_POST['kode_buku'];

    // Informasi file foto
    $foto = $_FILES['foto'];
    $foto_name = $foto['name'];
    $foto_tmp_name = $foto['tmp_name'];

    // Mendapatkan ekstensi file foto
    $foto_ext = pathinfo($foto_name, PATHINFO_EXTENSION);

    // Membuat nama unik untuk file foto
    $nama_file = $judul . '_' . $pengarang . '.' . $foto_ext;

    // Memindahkan foto ke lokasi yang diinginkan
    $foto_destination = 'uploads/' . $nama_file;

    // Pindahkan file ke direktori uploads/
    if (move_uploaded_file($foto_tmp_name, $foto_destination)) {
        // Data buku
        $buku = $judul . "-" . $penerbit . "-" . $tahun_terbit . "-" . $halaman . "-" . $pengarang . "-" . $kategori . "-" . $kode_buku . "-" . $foto_destination . "\n";

        // Simpan ke file
        $file = "buku.txt";
        if (file_put_contents($file, $buku, FILE_APPEND) !== false) {
            echo "Data berhasil disimpan";
        } else {
            echo "Data gagal disimpan";
        }
    } else {
        echo "Gagal mengunggah foto";
    }

    echo '<br><br><a href="index.php">Kembali ke Form</a>';
    echo '<br><br><a href="read.php">Lihat Data</a>';
}
?>


</body>

</html>