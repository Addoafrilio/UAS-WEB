<!DOCTYPE  html>
<html>
<head>
<title>WEB  1</title>
<!-- menghubungkan dengan file css -->
<link  rel="stylesheet"  type="text/css"  href="style.css">
<!-- menghubungkan dengan file jquery -->
<script  type="text/javascript"  src="jquery.js"></script>
</head>
<body>
<div  class="content">
<header>
<h1  class="judul">WEB UAS</h1>
</header>

<div  class="menu">
<ul>
<li><a  href="index.php?page=mahasiswa">DATA MAHASISWA</a></li>
</ul>
</div>

<div  class="badan">

<form action="index.php" method="get">
	<label>Search :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
</form>

<?php if(isset($_GET['page'])){
$page  =  $_GET['page'];

switch  ($page)  { 

    case  'mahasiswa':
    include  "mhs.form.input.php"; break;
    default:
    echo  "<center><h3>Maaf.  Halaman  tidak  di  temukan  !</h3></cente
    r>";
    break;
    }
    }else{
    include  "mhs.form.input.php";
    }
    
    ?>
    
    </div>
    </div>
    </body>
    </html>
    