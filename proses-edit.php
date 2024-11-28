<?php

session_start(); //mulai sesi
include("config.php");

//periksa apakah tombol "simpan" pada form edit ditekan
if (isset($_POST['simpan'])) {
    //ambil data dari form
    $id = $_POST['pekerjaan_id'];
    $nama_pekerjaan=$_POST['nama_pekerjaan'];
    $nama_perusahaan= $_POST['nama_perusahaan'];
    $alamat= $_POST['alamat'];
    
    
    //buat query untuk memperbarui job_portall
    $sql = "UPDATE tb_pekerjaan SET
    pekerjaan_id='$id',
    nama_pekerjaan='$nama_pekerjaan',
    nama_perusahaan='$nama_perusahaan',
    alamat='$alamat'
    WHERE pekerjaan_id=$id";
    $query = mysqli_query($db, $sql);
    // simpan pesan notifikasi dalam sesi berdasarkan hasil query
    if ($query) {
        $_SESSION['notifikasi'] = "data pekerjaan berhasil diperbarui!";
    } else {
        $_SESSION['notifikasi'] = "data pekerjaan gagal diperbarui!";
    }

    //alihkan ke halaman index.php
    header('Location: index.php');
} else {
    //jika akses langsung tanpa form, tampilkan pesan error
    die("akses ditolak...");
}
?>
        
