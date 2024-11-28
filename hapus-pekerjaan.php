<?php
session_start();//mulai sesi
include("config.php");

//periksa apakah ada ID yang dikirim melalui URL
if (isset($_GET['id'])) {
    // ambil ID dari URL
$id= $_GET['id'];

    //buat query untuk menghapus data pekerjaan berdasarkan ID
    $sql = "DELETE FROM tb_pekerjaan WHERE pekerjaan_id= $id";
    $query = mysqli_query($db, $sql);

    //simpan pesan notifikasi dalam sesi berdasarkan hasil query
    if ($query) {
        $_SESSION['notifikasi'] = "data pekerjaan berhasil dihapus!";
    
    } else { 
        $_SESSION['notifikasi'] = "data pekerjaan gagal dihapus!";
    }

    //alihkan ke halaman index.php
    header('location: index.php');
} else {
    //jika akses langsung tanpa ID, tampikan pesan error
    die("Akses ditolak");
}
?>