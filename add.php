<?php
include 'koneksi.php';
   
   $jumlah   = $_POST['jumlah'];
   $anggota   = $_POST['anggota'];
   $barang   = $_POST['barang'];
   $jenis   = $_POST['taskOption'];
   
   echo 'ANGGOTA 		: '.$anggota. '</br/>';
   
   
date_default_timezone_set('Asia/Jakarta');
  $date=date("Y-m-d | h:i"); 
	
	$temp_log='</br/>'.$date.'&nbsp;&nbsp;&nbsp;| '.$anggota.' telah MENAMBAH '.$jumlah.'x | '.$barang.' ke Brankas</br/>';
   
$log = $temp_log;

$data = mysqli_query($koneksi,"select * from senjata where id=( SELECT max(id) FROM senjata)");
   $row = mysqli_fetch_array($data);
   echo 'IIIIDDDDDDDD	: '.$row['id']. '</br/>';
   $tmpid=$row['id'];
   $id=$row['id']+1;

$file = fopen("log.php","a+");
echo fwrite($file,$log);
fclose($file);

	
	echo 'mengalihkan kembali ke halaman awal';
	
	$sql = "INSERT INTO senjata ".
       "(jenis,id,nama,jumlah) ".
       "VALUES('$jenis','$id','$barang',$jumlah)";
	  if (mysqli_query($koneksi, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($koneksi);
	 }
	 mysqli_close($koneksi);
	
// mengalihkan ke halaman index.php
 header( "refresh:3; url=index.php" ); 
?>

<br>
<a href="https://lucianokah.000webhostapp.com/">KEMBALI KE HALAMAN AWAL</a>