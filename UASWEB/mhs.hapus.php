<?php
include('koneksi.php');
$perintah_hapus=”delete from mahasiswa where npm='$_GET[npm]' limit 1”;
$hapusdata=mysql_query('$perintah_hapus') or die (mysql_error());
header('location:mhs­data.php');
?>