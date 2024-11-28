<?php
//temasuk file konfigurasi
include("config.php");

//mengambil ID siswa dari parameter URL
$pekerjaan_id = $_GET['id'];

//mengambil data pekerjaan dari database berdasarkan ID
$query = $db->query("SELECT * FROM tb_pekerjaan WHERE pekerjaan_id = '$pekerjaan_id'");
$pekerjaan= $query->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>edit data pekerjaan</title>
</head>
<body>
    <h3>edit data pekerjaan</h3>
    <form action="proses-edit.php" method ="POST">
        <!-- Menyimpan ID untuk proses selanjutnya -->
         <input type="hidden" name="pekerjaan_id" value="<?php echo $pekerjaan['pekerjaan_id']; ?>">
         <table border="0">
<tr>
    <td>nama pekerjaan</td>
    <td>
        <input type="text" name="nama_pekerjaan"
        value="<?php echo $pekerjaan['nama_pekerjaan']; ?>" required>
        </td>

</tr>
<tr>
    <td>nama perusahaan</td>
    <td>
        <input type="text" name="nama_perusahaan"
        value="<?php echo $pekerjaan['nama_perusahaan']; ?>">

</td>
</tr>
<tr>
    <td>alamat</td>
    <td>
      <textarea name="alamat"><?php echo $pekerjaan['alamat']; ?></textarea>
</td>
</tr>
</table>
<button type="submit" name="simpan">simpan</button>
</form>

</body>
</html>