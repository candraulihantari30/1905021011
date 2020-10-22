<?php
 require 'fungsi.php';
$bk = query ("SELECT * FROM detailbuku");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>
     <h1 align="center">Daftar Buku Perpustakaan</h1>
     <a href="tambah.php"> Tambah Data Buku</a>
<table border="2" cellpandding="10" cellspacing="0" align="center">

<tr bgcolor="808080" align="center">
   <th>No.</th>
   <th>Judul</th>
   <th>Kode</th>
   <th>Penulis</th>
   <th>Tahun Terbit</th>
   <th>Aksi</th>
</tr>

<?php $i = 1; ?>
<?php  foreach($bk as $row) : ?> 
<tr align="center">
   <td><?= $i; ?></td>
   <td><?= $row["judul"]; ?></td>
   <td><?= $row["kode"]; ?></td>
   <td><?= $row["penulis"]; ?></td>
   <td><?= $row["tahun_terbit"]; ?></td>
   <td>
     <a href="edit.php?id=<?= $row["id"];?>">Ubah</a> | 
     <a href="delet.php?id=<?= $row["id"]; ?>" onclick="return confirm ('Anda Yakin?'); ">Hapus</a>
   </td>
</tr>
<?php $i++; ?>
<?php endforeach; ?>
</tr>
</table>
</body>
</html>
