<!DOCTYPE html>
<html lang="en">

<head>
	<title>𝔩𝔲𝔠𝔦𝔞𝔫𝔬</title>
	<link rel="shortcut icon" href="lostmc.ico">
	<link href="css/select-css.css" rel="stylesheet">
	<link href="css/titid.css" rel="stylesheet">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-tidth, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
		$(document).ready(function() {
			// Add smooth scrolling to all links
			$("a").on('click', function(event) {

				// Make sure this.hash has a value before overriding default behavior
				if (this.hash !== "") {
					// Prevent default anchor click behavior
					event.preventDefault();

					// Store hash
					var hash = this.hash;

					// Using jQuery's animate() method to add smooth page scroll
					// The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
					$('html, body').animate({
						scrollTop: $(hash).offset().top
					}, 800, function() {

						// Add hash (#) to URL when done scrolling (default click behavior)
						window.location.hash = hash;
					});
				} // End if
			});
		});
	</script>
	<style type="text/css">
		body {
			background: url(https://cdn.discordapp.com/attachments/722716018991956029/728653520974250004/unknown.png) fixed;
			background-repeat: no-repeat;
			background-color: #262626;
			background-size: auto 120%;
			font-family: 'Oswald', sans-serif;
			font-size: 15px;
			font-weight: 400;
			line-height: 1.5em;
			background-position: center;
		}

		h1 {
			text-shadow: 2px 2px 4px #000000;
			font-size: 5em;
			padding: 0;
			margin: 0;
			text-align: center;
			font-family: 'arial';
			position: absolute;
			top: 45%;
			left: 50%;
			transform: translateX(-50%) translateY(-50%);
			color: #FFFFFF;
		}

		h2 {
			text-shadow: 2px 2px 4px #000000;
			font-size: 15px;
			padding: 0;
			margin: 0;
			text-align: center;
			position: absolute;
			top: 52%;
			left: 50%;
			transform: translateX(-50%) translateY(-50%);
			color: #FFFFFF;
			line-height: 1;
		}



		.inner_main_menu {
			margin: 0 auto;
			width: 1178px;
		}

		.inner_main_menu ul {
			margin: 0 auto;
			padding: 0;
			list-style: none;
			text-align: right;
		}

		.inner_main_menu ul li {
			float: none;
			display: inline-block;
		}

		.inner_main_menu ul li a {
			color: #FFFFFF;
			font-size: 17px;
			text-decoration: none;
			display: block;
			padding: 18px 28px;
			transition: opacity 0.2s ease-in;
			/* vendorless fallback */
			-o-transition: opacity 0.2s ease-in;
			/* opera */
			-ms-transition: opacity 0.2s ease-in;
			/* IE 10 betas, not needed in final build. */
			-moz-transition: opacity 0.2s ease-in;
			/* Firefox */
			-webkit-transition: opacity 0.2s ease-in;
			/*safari and chrome */
		}

		.inner_main_menu ul li a:hover {
			opacity: 0.3;
			transition: opacity 0.2s ease-in;
			/* vendorless fallback */
			-o-transition: opacity 0.2s ease-in;
			/* opera */
			-ms-transition: opacity 0.2s ease-in;
			/* IE 10 betas, not needed in final build. */
			-moz-transition: opacity 0.2s ease-in;
			/* Firefox */
			-webkit-transition: opacity 0.2s ease-in;
			/*safari and chrome */
		}

		#main_menu {
			margin: -px;
			position: fixed;
			/* Set the navbar to fixed position */
			top: 10px;
			/* Position the navbar at the top of the page */
			width: 100%;
			/* Full width */
			opacity: 0.75;
			transition: opacity 0.5s ease-in;
			/* vendorless fallback */
			-o-transition: opacity 0.5s ease-in;
			/* opera */
			-ms-transition: opacity 0.5s ease-in;
			/* IE 10 betas, not needed in final build. */
			-moz-transition: opacity 0.5s ease-in;
			/* Firefox */
			-webkit-transition: opacity 0.5s ease-in;
			/*safari and chrome */
		}

		#main_menu:hover {
			opacity: 1;
			transition: opacity 0.5s ease-in;
			/* vendorless fallback */
			-o-transition: opacity 0.5s ease-in;
			/* opera */
			-ms-transition: opacity 0.5s ease-in;
			/* IE 10 betas, not needed in final build. */
			-moz-transition: opacity 0.5s ease-in;
			/* Firefox */
			-webkit-transition: opacity 0.5s ease-in;
			/*safari and chrome */
		}

		.logo_area {
			position: absolute;
			top: 0;
			margin-left: 10px;
			content: "";
		}

		.logo_area a img {
			height: 100px;
		}

		.sec2 {
			text-align: center;
			margin-top: 52%;
			margin-bottom: 75%;
			background: url(https://vignette.wikia.nocookie.net/gtawiki/images/5/59/The_Lost_Clubhouse_4.jpg);
			background-size: 250%;
			background-position: center;
			width: 100%;
			padding-top: 50px;
			padding-bottom: 200px;
		}

		.field {
			clear: both;
			margin-bottom: 10px
		}

		.gredient_input {
			border: 1px solid rgba(0, 0, 0, 0.0);
			height: 15px;
			padding: 5px 10px 5px 5px;
			font-size: 15px;
			/*border-radius*/
			-moz-border-radius: 3px;
			-webkit-border-radius: 3px;
			border-radius: 3px;
			width: 200px
		}

		html {
			scroll-behavior: smooth;
		}

		.tablelbl {
			margin-left: auto;
			margin-right: auto;
			font-family: sans-serif;
			color: #FFFF;
			border-collapse: collapse;
			width: 50%;
		}

		.table1 {
			margin-left: auto;
			margin-right: auto;
			font-family: sans-serif;
			color: #FFFFFF;
			border-collapse: collapse;
			width: 50%;
			background-color: #262626;
		}

		.table2 {
			margin-left: auto;
			margin-right: auto;
			margin-bottom: 20px;
			font-family: sans-serif;
			color: #444;
			width: 100%;
		}

		.table1 tr th {
			background: #262626;
			color: #fff;
			font-weight: normal;
		}

		.table1,
		th,
		td {
			padding: 8px 20px;
			text-align: center;
		}

		.table1 tr:hover {
			opacity: 0.75;
		}

		.table1 tr:nth-child(even) {
			background-color: #151515;
		}

		.table-wrapper {
			height: 300px;
			overflow: auto;
		}

		.button-success,
		.button-error,
		.button-warning,
		.button-secondary {
			color: white;
			border-radius: 4px;
			text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
		}

		.button-success {
			background: rgb(28, 184, 65);
			/* this is a green */
		}

		.button-error {
			background: rgb(202, 60, 60);
			/* this is a maroon */
		}

		.button-warning {
			background: rgb(223, 117, 20);
			/* this is an orange */
		}

		.button-secondary {
			background: rgb(66, 184, 221);
			/* this is a light blue */
		}
	</style>
</head>

<body>

	<?php
	include 'koneksi.php';
	$data = mysqli_query($koneksi, "select * from senjata where jumlah=0");
	while ($d = mysqli_fetch_array($data)) {
		$tamp = $d['nama'];
		$query = "delete from senjata where nama='$tamp'";
		mysqli_query($koneksi, $query);
	} ?>

	<div id="main_menu">
		<div class="logo_area">
			<a href=""><img src="lostmc.png" alt=""></a>
		</div>
		<div class="inner_main_menu">
			<ul>
				<li><a href="#sec2">ʙ ʀ ᴀ ɴ ᴋ ᴀ s</a></li>
				<li><a href="log.php" target="_blank">ʟ ᴏ ɢ</a></li>
				<li><a href="">ᴀ ʙ ᴏ ᴜ ᴛ</a></li>
			</ul>
		</div>
	</div>
	<section class="sec1">
		<h1>𝔩𝔲𝔠𝔦𝔞𝔫𝔬</h1>
		<h2>ɢᴛᴀ ᴠ ʀᴏʟᴇᴘʟᴀʏ ғᴀᴍɪʟʏ<br>#ʙɪᴋᴇʀsɴᴏsᴄᴀʀᴇ #ʙɪᴋᴇʀs𝟺ʟɪғᴇ</h2>
	</section>
	<section class="sec2" id="sec2">
		<h3 class="nm" style="color:#000000; margin-bottom:5px;">ʙ ʀ ᴀ ɴ ᴋ ᴀ s</h3>
		<table class="tablelbl">
			<tr>
				<th>Barang</th>
				<th>Jumlah</th>
			</tr>
		</table>
		<div class="table-wrapper">
			<table class="table1">
				<tr>
					<font color="#fff">
						S E N J A T A
					</font>
				</tr>
				<?php
				include 'koneksi.php';
				$data = mysqli_query($koneksi, "select * from senjata where jenis='senjata'");
				while ($d = mysqli_fetch_array($data)) {
				?>
					<tr>
						<td style='vertical-align:middle; text-align:center;'><?php echo $d['nama']; ?> </td>
						<td style='vertical-align:middle; text-align:center;'><?php echo $d['jumlah']; ?></td>
						<td></td>
					<?php } ?>
					</tr>
			</table><br>
			<table class="table1">
				<tr>
					<font color="#fff">
						B A R A N G &nbsp; H A R A M
					</font>
				</tr>
				<?php
				include 'koneksi.php';
				$data = mysqli_query($koneksi, "select * from senjata where jenis='BARANG HARAM'");
				while ($d = mysqli_fetch_array($data)) {
				?>
					<tr>
						<td style='vertical-align:middle; text-align:center;'><?php echo $d['nama']; ?> </td>
						<td style='vertical-align:middle; text-align:center;'><?php echo $d['jumlah']; ?></td>
						<td></td>
					<?php } ?>
					</tr>
			</table><br>
			<table class="table1">
				<tr>
					<font color="#fff">
						B A R A N G &nbsp; L E G A L
					</font>
				</tr>
				<?php
				include 'koneksi.php';
				$data = mysqli_query($koneksi, "select * from senjata where jenis='BARANG legal'");
				while ($d = mysqli_fetch_array($data)) {
				?>
					<tr>
						<td style='vertical-align:middle; text-align:center;'><?php echo $d['nama']; ?> </td>
						<td style='vertical-align:middle; text-align:center;'><?php echo $d['jumlah']; ?></td>
						<td></td>
					<?php } ?>
					</tr>
			</table>
		</div><br>
		<form action="update.php" method="post" style="background-color:#262626; padding-top:10px; padding-bottom:20px; margin-left:350px; margin-right:350px;">
			<h3 class="nm" style="color:#FFFFFF; margin-bottom:5px;text-shadow: 2px 2px 4px #000000;">ᴜ ᴘ ᴅ ᴀ ᴛ ᴇ &nbsp; &nbsp;ʙ ʀ ᴀ ɴ ᴋ ᴀ s</h3>
			<label style="color:#FFFFFF; margin-bottom:5px;text-shadow: 2px 2px 4px #000000;">ɴᴀᴍᴀ ᴀɴɢɢᴏᴛᴀ</label>
			<input type="text" value="" class="titid" name="anggota"><br>
			<label style="color:#FFFFFF; margin-bottom:5px;text-shadow: 2px 2px 4px #000000;">ᴘɪʟɪʜ ʙᴀʀᴀɴɢ</label>
			<select class="titid" name="taskOption">
				<option value="" selected="true" disabled>Pilih Barang</option>
				<?php
				include 'koneksi.php';
				$data = mysqli_query($koneksi, "select * from senjata");
				while ($d = mysqli_fetch_array($data)) {
				?>
					<option type="text" class="form-control" value="<?php echo $d['id']; ?>"><?php echo $d['nama']; ?></option>
				<?php } ?>
			</select>
			<label style="color:#FFFFFF; margin-bottom:5px;text-shadow: 2px 2px 4px #000000;">ᴊᴜᴍʟᴀʜ</label>
			<input type="number" value="" class="titid" name="jumlah" min="1">
			<br><button class="button-warning pure-button" type="submit" name="submit" value="AMBIL">AMBIL</button>&nbsp;<button class="button-success pure-button" type="submit" name="submit" value="TAMBAH">TAMBAH</button>
		</form>
		<br><br>
		<form action="add.php" method="post" style="background-color:#f0f0f0; padding-top:10px; padding-bottom:20px; margin-left:350px; margin-right:350px;">
			<h3 class="nm" style="color:#000000; margin-bottom:5px;">ᴛ ᴀ ᴍ ʙ ᴀ ʜ &nbsp; &nbsp;ʙ ᴀ ʀ ᴀ ɴ ɢ &nbsp; &nbsp;ʙ ᴀ ʀ ᴜ</h3>
			<label style="color:#000000; margin-bottom:5px;">ɴᴀᴍᴀ ᴀɴɢɢᴏᴛᴀ</label>
			<input type="text" value="" class="titid" name="anggota"><br>
			<label style="color:#000000; margin-bottom:5px;">ɴᴀᴍᴀ ʙᴀʀᴀɴɢ ʙᴀʀᴜ</label>
			<input type="text" value="" class="titid" name="barang"><br>
			<label style="color:#FFFFFF; margin-bottom:5px;text-shadow: 2px 2px 4px #000000;">ᴊᴇɴɪs ʙᴀʀᴀɴɢ</label>
			<select class="titid" name="taskOption">
				<option value="" selected="true" disabled>pilih jenis barang</option>
				<option value="senjata">Senjata</option>
				<option value="barang haram">Barang Haram</option>
				<option value="barang legal">Barang Legal</option>
			</select>
			<label style="color:#000000; margin-bottom:5px;">ᴊᴜᴍʟᴀʜ</label>
			<input type="number" value="" class="titid" name="jumlah" min="1">
			<br><button class="button-success pure-button" type="submit" value="TAMBAH">TAMBAH</button>
		</form>
	</section>
</body>

</html>