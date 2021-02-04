<?php
include('koneksi.php');
$perintah_simpan='insert into mahasiswa (nim, nama, ttl)  
                  values ('$_POST[nim]','$_POST[nama]','$_POST[ttl]')';
$simpan=mysql_query('$perintah_simpan') or die (mysql_error());
header('location:mhs­form­input.php');
?>