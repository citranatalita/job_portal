<?php
//menghubungkan file config dengan index
include("config.php");
session_start(); //mulai sesi
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data pekerjaan</title>
<style>
    /*membuat styling pada table*/
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 10px;
    }
    </style>
     </head>
    
    <body>
        <h2>data pekerjaan</h2>
        <!--tampilkan notifikasi jika ada -->
        <?php if (isset($_SESSION['notifikasi' ])): ?>
        <P><?PHP echo $_SESSION['notifikasi' ]; ?></p>
        <!--hapus notifikasi setelah ditampilkan-->
        <?php endif; ?>
        <table>
            <thead>
                <tr align="center">
                    <th>No</th>
                    <th>nama pekerjaan</th>
                    <th>nama perusahaan</th>
                    <th>alamat</th>
                    <th><a href="tambah-pekerjaan.php">tambah data </a></th>
          </tr>
          </thead>
          <tbody>
            <?php
         $no = 1; //membuat penomoran data dari 1
         //membuat variable untuk menjalankan query SQL
         $query = $db->query("SELECT * FROM tb_pekerjaan");
         /*perulangan while akan terus berjalan (menampailkan data) 
         selama kondisi $query bernilai true (adanya data pada
         table tb_pekerjaan) */
         while ($pekerjaan= $query->fetch_assoc()){
         /* fungsi fetch_assoc digunakan untuk mengambil
         data perulangan dalam bentuk array */
         ?> <!--kode PHP ditutup untuk menyisipkan kode HTML
          yang akan di looping menggunakan while loop -->

              
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $pekerjaan['nama_pekerjaan'] ?></td>
                <td><?php echo $pekerjaan['nama_perusahaan'] ?></td>
                <td><?php echo $pekerjaan['alamat'] ?></td>
                <td align="center">
                    <!--URL ke halaman edit data dengan menggunakan 
                    parameter id pada kolom table -->
                    <a href="edit-pekerjaan.php?id=<?php echo $pekerjaan['pekerjaan_id'] ?>">edit</a>

                    <!--URL untuk menghapus data dengan menggunakn parameter id 
                    pada kolom table dan alert confirmasi hapus data-->

                    <a onclick="return confirm('anda yakin ingin menghapus data?')" 
                        href="hapus-pekerjaan.php?id= <?php echo $pekerjaan ['pekerjaan_id'] ?>">hapus</a>
                </td>
                </tr>
              <?php 
            } /*mengakhiri proses perulangan while yang mulai pada baris 48 */
            ?>
        </tbody>
        </table>
              <!--menghitung jumlah baris yang ada pada table (pekerjaan)-->
             <p>total: <?php echo mysqli_num_rows($query) ?></p>
    </body>
    </html>