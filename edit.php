<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
 
	<h2>DATA MAHASISWA UPG</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA MAHASISWA</h3>
 
	<?php
  include 'proses.php';
?>


    <table align="center" border="1" style="width: 1250px;">
    <tr>
        <th bgcolor="yellow">No</th>
        <th bgcolor="yellow">Nim</th>
        <th bgcolor="yellow">Nama Mahasiswa</th>
        <th bgcolor="yellow">Alamat</th>
        <th bgcolor="yellow">Agama</th>
        <th bgcolor="yellow">Jenis Kelamin</th>
        <th bgcolor="yellow">No Telp</th>
        <th bgcolor="yellow">Aksi</th>
    </tr>
   <?php
$no = 1;
$data = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
while($d = mysqli_fetch_array($data)){


?>
<tr>
  <td bgcolor="white"><?php echo $no++ ?></td>
  <td bgcolor="white"><?php echo $d['nim']?></td>
  <td bgcolor="white"><?php echo $d['nama']?></td>
  <td bgcolor="white"><?php echo $d['alamat']?></td>
  <td bgcolor="white"><?php echo $d['agama']?></td>
  <td bgcolor="white"><?php echo $d['jeniskelamin']?></td>
  <td bgcolor="white"><?php echo $d['telp']?></td>
  <td bgcolor="white"><a href="hapus.php?id=<?php echo $d['nim']; ?>">Hapus</a> | <a href="edit.php?id=<?php echo $d['nim']; ?>">Edit</a></td>
</tr>

<?php
}
?>
</table>
	
		<?php 
	?>
 
</body>
</html>