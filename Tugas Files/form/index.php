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
    <div class="read">
        <a href="read.php">Informasi Buku</a>
    </div>
    <form class="form" action="input.php" method="POST" enctype="multipart/form-data">
    <p class="title">Input Buku </p>
    <div class="flex">
        <label>
            <input required type="text" class="input" name="judul">
            <span>Judul</span>
        </label>

        <label>
            <input required type="text" class="input" name="penerbit">
            <span>Penerbit</span>
        </label>
</div>  
            
    <label>
        <input required type="number" class="input" name="tahun_terbit">
        <span>Tahun Terbit</span>
    </label> 
        
    <label>
        <input required type="number" class="input" name="halaman">
        <span>Jumlah Halaman</span>
    </label>

    <label>
        <input required type="text" class="input" name="pengarang">
        <span>Pengarang</span>
    </label>

    <label>
        <input required type="text" class="input" name="kategori">
        <span>Kategori</span>
    </label>

    <label>
        <input required type="number" class="input" name="kode_buku">
        <span>Kode Buku</span>
    </label>
    
    <label>
        <input required type="file" class="input" name="foto" accept="image/*">
    </label>

    <button type="submit" class="submit">Submit</button>
</form>


</body>

</html>