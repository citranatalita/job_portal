<?php
  //menentukan nama host, biasanya "localhost"
  $server = "localhost";
  //nama pengguna MYSQL (default: root)
  $user = "root";
  //kata sandi untuk penggunaan MYSQL (default: kosong untuk root)
  $password = "";
  //nama basis data yang akan dihubungkan
  $nama_database = "job_portall";

  //mencoba untuk membuat koneksi ke basis data
  $db = mysqli_connect($server, $user, $password, $nama_database);

  //memeriksa apakah koneksi berhasil
  if (!$db) {
    die("gagal terhubung dengan database: " . mysqli_connect_error());
  }
  ?>