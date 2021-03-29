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

$sbmt = $_POST['submit'];
$input = $_POST[$sbmt];
if($input==NULL){
	?><script>
        alert("jumlah tidak boleh kosong");
		window.location="keuangan.php";
    </script>
	<?php
}
$cuci = $input-($input*15/100);
?>
====================================<br>
SEBELUM NEGARA API MENYERANG<br>
====================================<br>
UANG PERUSAHAAN ___________ <?php echo $total; ?> <br>
UANG MERAH _________________ <?php echo $merah; ?> <br>
====================================<br><br>
<?php
if ($_POST['submit'] == 'cancel' ){
	header('location:keuangan.php');
}else if($_POST['submit'] == 'u1_tambah' ){
	echo 'anda menambah '.$input.' uang perusahaan';
	?><br>------------------------------------------------------------------------------------------------------------------------------------
	<br>+<?php echo $input ?> uang perusahaan<br><br>
	====================================<br>
SETELAH NEGARA API MENYERANG<br>
====================================<br>
UANG PERUSAHAAN ___________ <?php echo $total+$input; ?> <br>
UANG MERAH _________________ <?php echo $merah; ?> <br>
====================================<br><br>
<?php
$u1 = $total+$input;

include 'koneksi.php';
$query="UPDATE uang SET jumlah='$u1' where id='U1'";
mysqli_query($koneksi, $query);
?><button><a href="keuangan.php">KEMBALI KE MENU KEUANGAN</a></button><?php
}else if($_POST['submit'] == 'u1_ambil' ){
	echo 'anda mengambil '.$input.' uang perusahaan';
	?><br>------------------------------------------------------------------------------------------------------------------------------------
	<br>-<?php echo $input ?> uang perusahaan<br><br>
	====================================<br>
SETELAH NEGARA API MENYERANG<br>
====================================<br>
UANG PERUSAHAAN ___________ <?php echo $total-$input; ?> <br>
UANG MERAH _________________ <?php echo $merah; ?> <br>
====================================<br><br>
<?php
$u1 = $total-$input;

include 'koneksi.php';
$query="UPDATE uang SET jumlah='$u1' where id='U1'";
mysqli_query($koneksi, $query);
?><button><a href="keuangan.php">KEMBALI KE MENU KEUANGAN</a></button><?php
}else if($_POST['submit'] == 'u2_tambah' ){
	echo 'anda menambah '.$input.' uang merah';
	?><br>------------------------------------------------------------------------------------------------------------------------------------
	<br>+<?php echo $input ?> uang merah<br><br>
	====================================<br>
SETELAH NEGARA API MENYERANG<br>
====================================<br>
UANG PERUSAHAAN ___________ <?php echo $total; ?> <br>
UANG MERAH _________________ <?php echo $merah+$input; ?> <br>
====================================<br><br>
<?php
$u2 = $merah+$input;

include 'koneksi.php';
$query="UPDATE uang SET jumlah='$u2' where id='U2'";
mysqli_query($koneksi, $query);
?><button><a href="keuangan.php">KEMBALI KE MENU KEUANGAN</a></button><?php
}else if($_POST['submit'] == 'u2_cuci' ){
	echo 'anda mencuci '.$input.' uang merah | PPN 15% | total tercuci '.$cuci.' ditambahkan otomatis ke uang perusahaan';
	?><br>------------------------------------------------------------------------------------------------------------------------------------
	<br>-<?php echo $input ?> uang merah
	<br>+<?php echo $cuci ?> uang perusahaan<br><br>
====================================<br>
SETELAH NEGARA API MENYERANG<br>
====================================<br>
UANG PERUSAHAAN ___________ <?php echo $total+$cuci; ?> <br>
UANG MERAH _________________ <?php echo $merah-$input; ?> <br>
====================================<br><br>
<?php
$u1 = $total+$cuci;
$u2 = $merah-$input;

include 'koneksi.php';
$query="UPDATE uang SET jumlah='$u1' where id='U1'";
mysqli_query($koneksi, $query);
$query="UPDATE uang SET jumlah='$u2' where id='U2'";
mysqli_query($koneksi, $query);
?><button><a href="keuangan.php">KEMBALI KE MENU KEUANGAN</a></button><?php
}
?>