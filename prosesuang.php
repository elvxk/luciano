<!DOCTYPE html>
<html lang="en">
<style>
	body {
		background:url(https://i.imgur.com/k0RVubJ.jpg) fixed;
		background-repeat:no-repeat;
		background-color: #262626;
		background-size: auto 120%; 
		font-family:'Oswald',sans-serif;
		font-size: 15px;
		font-weight: 400;
		line-height: 1.5em;
		background-position:center;
		text-align: center;
	}
	h1{
		padding-top:10%;
	}
</style>
<body>
<form action="uangfinal.php" method="post">
<?php
include 'koneksi.php';
$data = mysqli_query($koneksi,"select * from uang where id='U1'");
while($d = mysqli_fetch_array($data)){
	$total=$d['jumlah'];
}
$query = mysqli_query($koneksi,"select * from uang where id='U2'");
while($e = mysqli_fetch_array($query)){
	$merah=$e['jumlah'];
}

if ($_POST['submit'] == 'u1_tambah') {?>
	<h1>TAMBAH UANG PERUSAHAAN</h1>
	<h3>uang perusahaan saat ini : <?php echo $total; ?></h3> <br>
	masukkan uang<br><input type="number" value="" name="u1_tambah" min="1"><p>
	<button type="submit" name="submit" value="u1_tambah">TAMBAH</button><br>
	<button type="submit" name="submit" value="cancel">CANCEL</button>
	<?php
} else if ($_POST['submit'] == 'u1_ambil') {?>
	<h1>AMBIL UANG PERUSAHAAN</h1>
	<h3>uang perusahaan saat ini : <?php echo $total; ?></h3> <br>
	ambil uang<br><input type="number" value="" name="u1_ambil" min="1"><p>
	<button type="submit" name="submit" value="u1_ambil">AMBIL</button><br>
	<button type="submit" name="submit" value="cancel">CANCEL</button>
	<?php
} else if ($_POST['submit'] == 'u2_tambah') {?>
	<h1>TAMBAH UANG MERAH</h1>
	<h3>uang merah saat ini : <?php echo $merah; ?></h3> <br>
	tambah uang<br><input type="number" value="" name="u2_tambah" min="1"><p>
	<button type="submit" name="submit" value="u2_tambah">TAMBAH</button><br>
	<button type="submit" name="submit" value="cancel">CANCEL</button>
	<?php
} else if ($_POST['submit'] == 'u2_cuci') {?>
	<h1>CUCI UANG MERAH</h1>
	<h3>uang merah saat ini : <?php echo $merah; ?></h3> <br>
	cuci uang<br><input type="number" value="" name="u2_cuci" min="1"><p>
	<button type="submit" name="submit" value="u2_cuci">CUCI</button><br>
	<button type="submit" name="submit" value="cancel">CANCEL</button><p><br>
	<font color="red">Note: uang merah yang dicuci akan otomatis masuk ke uang perusahaan dan terpotong 15%</font>
	<?php
}
?>
</form>
</body>
</html>