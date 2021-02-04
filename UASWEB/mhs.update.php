<?php
include('koneksi.php');
$perintah_update=”update mahasiswa set nama=npm='$_POST[nama]',
ttl='$_POST[ttl]' where npm='$_GET[npm]' limit 1”;
$updatedata=mysql_query('$perintah_update') or die (mysql_error());
header('location:mhs­data.php');
?>