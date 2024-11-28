<!DOCTYPE html>
<html lang="en">
<head>
    <title>job_portall </title>
</head>
<body>
    <h3>Tambah Data Pekerjaan</h3>
    <form action="proses-tambah.php" method="POST">
        <table border="0">
            <tr>
               
</tr>
<tr>
    <td>nama pekerjaan</td>
    <td><input type="varchar" name="nama_pekerjaan" required></td>
</tr>
<tr>
    <td>nama perusahaan</td>
    <td><input type="varchar" name="nama_perusahaan" required></td>

</tr>
<tr>
  
    <td>alamat</td>
    <td><textarea name="alamat"></textarea></td>
</tr>
</table>
<button type="submit" name="simpan" class="btn btn-primary">
    simpan</button>
    </form>
</body>
</html>