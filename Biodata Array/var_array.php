<?php 
// tampilan home
    $name = array(
        "depan" => "Bima",
        "belakang" => "Arya");

// tampilan about
    $about =array(
        "desk" => "Saya seorang mahasiswa di Universitas Pembangunan Nasional Veteran Jawa Timur yang sedang mengampu S1 Prodi Informatika. 

        Dalam 2 tahun selama saya menginjak bangku kuliah, pengalaman dalam bidang IT cukup saya kuasai. Skill dan pengetahuan tersebut sangat membantu dalam pekerjaan saya kedepannya.",
        "nama" => "Bima Arya Kurniawan",
        "addres" => "Balongbendo, Sidoarjo, Indonesia",
        "study" => "UPN Veteran Jawa Timur",
        "email" => "kuntum079@gmail.com",
        "phone" => "+6285655052350");
        
// Tanggal lahir
    $tanggal_lahir = "2003-04-03";

// Menghitung umur
    $tgl_lahir = new DateTime($tanggal_lahir);
    $tgl_sekarang = new DateTime();
    $umur = $tgl_sekarang->diff($tgl_lahir)->format('%y tahun, %m bulan, %d hari, %h jam, %i menit, %s detik');

    $link = array(
        "facebook" => "https://www.facebook.com/id=100008493995978",
        "twitter" => "https://twitter.com/kaamib__",
        "whatsapp" => "https://wa.me/+6285655052350",
        "instagram" => "https://instagram.com/bima994");
?>
