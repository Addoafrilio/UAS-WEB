<html>
<head>
<title>Data Mahasiswa</title>
</head>
<h1>Data Mahasiswa</h1>
<table>
        <tr>
        <th>Nomor Induk</th>
        <th>Nama Lengkap</th>
        <th>Tanggal Lahir</th>
        <th>Edit</th>
        </tr>
<?php
include('koneksi.php');
$perintah_baca='select * from mahasiswa limit 20';
$baca=mysql_query($perintah_baca) or die(mysql_error());
while(list($nim, $nama, $ttl)=mysql_fetch_row($baca))
{
    echo “<tr>
    <td>$nim</td>
    <td>$nama</td>
    <td>$ttl</td>
    <td>
          <a href=mhs­form­edit.php?nim=$nim>Edit</a>
          <a href=mhs­hapus.php?nim=$nim>Hapus</a>
</td>
</tr>”;
}
?>
</table>