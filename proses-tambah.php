<?php

session_start(); //mulai sesi
//menghubungkan file ini dengan file konfigurasi database
include("config.php");

//mengecek apakah tombol 'simpan' telah ditekan
if(isset($_POST['simpan'])){
    /*mengambil nilai dari form input 
    dan menyimpannya ke dalam variabel */
    
    $nama_pekerjaan = $_POST['nama_pekerjaan'];
    $nama_perusahaan= $_POST['nama_perusahaan'];
    $alamat= $_POST['alamat'];
 

    /*menyusun query SQL untuk menambahkan data 
    ke tabel 'tb_pekerjaan' */
    $sql = "INSERT INTO tb_pekerjaan
    (nama_pekerjaan, nama_perusahaan,
    alamat)
    VALUES ('$nama_pekerjaan',
     '$nama_perusahaan', '$alamat')";

    //menjalankan query dan menyimpan hasilnya dalam variabel $query
    $query = mysqli_query($db, $sql);

    //simpan pesan disesi
    if ($query) {
        $_SESSION['notifikasi'] = "data pekerjaan berhasil ditambahkan!";
    } else {
        $_SESSION['notifikasi'] = "data pekerjaan gagal ditambahkan!";
    }
    //alihkan ke halaman index.php
    header('location: index.php');
} else {  
    //jika akses langsung tanpa form, tampilkan pesan error 
    die("Akses ditolak..");
}
?>  

        
    

