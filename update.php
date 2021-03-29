<?php
include 'koneksi.php';
$tmpg = mysqli_query($koneksi,"select * from tampung");
   $tmp = mysqli_fetch_array($tmpg);
   $uwu = $tmp['tampung'];
$tmpg = mysqli_query($koneksi,"delete from log where id='$uwu'");
exec($tmpg);
   $iniid = $tmp['tampung']+1;
   $query="UPDATE tampung SET tampung='$iniid'";
		mysqli_query($koneksi, $query);
   echo $iniid;
   
   if($iniid =='50'){
	   $query="UPDATE tampung SET tampung='0'";
mysqli_query($koneksi, $query);
   }
   
   $option = isset($_POST['taskOption']) ? $_POST['taskOption'] : false;
   if ($option) {
      $id_tmp = htmlentities($_POST['taskOption'], ENT_QUOTES, "UTF-8");
   } else {
	header( "url=error.php" ); 
   }
   $jumlah   = $_POST['jumlah'];
   $anggota   = $_POST['anggota'];
   
   echo 'ANGGOTA 		: '.$anggota. '</br/>';
   echo 'ID 		: '.$id_tmp. '</br/>';
   
   $data = mysqli_query($koneksi,"select * from senjata where id='$id_tmp'");
   $row = mysqli_fetch_array($data);
   echo 'Nama	: '.$row['nama']. '</br/>'; $nambar = $row['nama'];
   echo 'Current		: '.$row['jumlah']. '</br/>';
   
   date_default_timezone_set('Asia/Jakarta');
  $date=date("Y-m-d"); 
  $time=date("h:i");
if ($_POST['submit'] == 'TAMBAH') {
	echo 'menambah	: '.$jumlah. '</br/>';
	$temp_log='</br/>'.$date.'&nbsp;&nbsp;&nbsp;| '.$anggota.' telah MENAMBAH '.$jumlah.'x | '.$row['nama'].' ke Brankas</br/>';
   $total = $jumlah+$row['jumlah'];
   $sql = "INSERT INTO log ".
       "(id,tanggal,jam,anggota,status,jumlah,barang) ".
       "VALUES('$uwu','$date','$time','$anggota', 'menambah','$jumlah','$nambar')";
	  if (mysqli_query($koneksi, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($koneksi);
	 }
//	 mysqli_close($koneksi);
} else {
	echo 'mengambil	: '.$jumlah. '</br/>';
	$temp_log='</br/>'.$date.'&nbsp;&nbsp;&nbsp;| '. $anggota.' telah MENGAMBIL '.$jumlah.'x | '.$row['nama'].' dari Brankas</br/>';
   $total = $row['jumlah']-$jumlah;
   $sql = "INSERT INTO log ".
       "(id,tanggal,jam,anggota,status,jumlah,barang) ".
       "VALUES('$uwu','$date','$time','$anggota', 'mengambil','$jumlah','$nambar')";
	  if (mysqli_query($koneksi, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($koneksi);
	 }
}   
   echo 'total		: '.$total.'</br/>';
	

$log = $temp_log;


$file = fopen("log.php","a+");
echo fwrite($file,$log);
fclose($file);

	
	echo 'mengalihkan kembali ke halaman awal';
	// query SQL untuk insert data
$query="UPDATE senjata SET jumlah='$total'where id='$id_tmp'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
?>
<br>
<a href="https://lucianokah.000webhostapp.com/">KEMBALI KE HALAMAN AWAL</a>