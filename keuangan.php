<!DOCTYPE html>
<html lang="en">
	<head>
		<title>𝔩𝔲𝔠𝔦𝔞𝔫𝔬</title>
		<link rel="shortcut icon" href="lostmc.ico">
		<link href="css/select-css.css" rel="stylesheet">
		<link href="css/titid.css" rel="stylesheet">
		<link href="css/titid2.css" rel="stylesheet">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-tidth, initial-scale=1">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script>
		$(document).ready(function(){
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
			  }, 800, function(){

				// Add hash (#) to URL when done scrolling (default click behavior)
				window.location.hash = hash;
			  });
			} // End if
		  });
		});
		</script>
		<style type="text/css">
			body{
				background:url(https://i.imgur.com/k0RVubJ.jpg) fixed;
				background-repeat:no-repeat;
				background-color: #262626;
				background-size: auto 120%; 
				font-family:'Oswald',sans-serif;
				font-size: 15px;
				font-weight: 400;
				line-height: 1.5em;
				background-position:center;
			}
			
			h1{
				text-shadow: 2px 2px 4px #000000;
				font-size:5em;
				padding:0;
				margin:0;
				text-align:center;
				font-family: 'arial';
				position:absolute;
				top: 45%;
				left:50%;
				transform: translateX(-50%) translateY(-50%);
				color:#FFFFFF;
			}
			h2{
				text-shadow: 2px 2px 4px #000000;
				font-size:15px;
				padding:0;
				margin:0;
				text-align:center;
				position:absolute;
				top: 52%;
				left:50%;
				transform: translateX(-50%) translateY(-50%);
				color:#FFFFFF;
				line-height:1;
			}
			
			
			
			.inner_main_menu {
				margin:0 auto;
				width:1178px;
			}
			
			.inner_main_menu ul {
				margin:0 auto; 
				padding:0; 
				list-style:none; 
				text-align:right;
			}
			
			.inner_main_menu ul li{
				float:none; 
				display:inline-block;
			}
			
			.inner_main_menu ul li a{
				color: #FFFFFF; 
				font-size:17px; 
				text-decoration:none; 
				display:block; 
				padding: 18px 28px;
				transition: opacity 0.2s ease-in; /* vendorless fallback */
				-o-transition: opacity 0.2s ease-in; /* opera */
				-ms-transition: opacity 0.2s ease-in; /* IE 10 betas, not needed in final build. */
				-moz-transition: opacity  0.2s ease-in; /* Firefox */
				-webkit-transition: opacity 0.2s ease-in; /*safari and chrome */
			}
			
			.inner_main_menu ul li a:hover{
				opacity:0.3;
				transition: opacity 0.2s ease-in; /* vendorless fallback */
				-o-transition: opacity 0.2s ease-in; /* opera */
				-ms-transition: opacity 0.2s ease-in; /* IE 10 betas, not needed in final build. */
				-moz-transition: opacity  0.2s ease-in; /* Firefox */
				-webkit-transition: opacity 0.2s ease-in; /*safari and chrome */
			}
			
			#main_menu{
				margin :-px;
				position: fixed; /* Set the navbar to fixed position */
				top:10px; /* Position the navbar at the top of the page */
				width: 100%; /* Full width */
				opacity:0.75;
				transition: opacity 0.5s ease-in; /* vendorless fallback */
				-o-transition: opacity 0.5s ease-in; /* opera */
				-ms-transition: opacity 0.5s ease-in; /* IE 10 betas, not needed in final build. */
				-moz-transition: opacity  0.5s ease-in; /* Firefox */
				-webkit-transition: opacity 0.5s ease-in; /*safari and chrome */
			}
			
			#main_menu:hover{
			opacity:1;
				transition: opacity 0.5s ease-in; /* vendorless fallback */
				-o-transition: opacity 0.5s ease-in; /* opera */
				-ms-transition: opacity 0.5s ease-in; /* IE 10 betas, not needed in final build. */
				-moz-transition: opacity  0.5s ease-in; /* Firefox */
				-webkit-transition: opacity 0.5s ease-in; /*safari and chrome */
			}
			
			.logo_area{
				position:absolute; 
				top:0; 
				margin-left:10px; 
				content:"";
			}
			
			.logo_area a img{
				height:100px;
			}
			.sec2{ 
				text-align: center; 
				margin-top:52%; 
				margin-bottom:75%; 
				background:url(https://vignette.wikia.nocookie.net/gtawiki/images/5/59/The_Lost_Clubhouse_4.jpg); 
				background-size:250%;
				background-position:center;
				width: 100%;
				padding-top:50px;
				padding-bottom:200px;}
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
				margin-left:auto; 
				margin-right:auto;
				font-family: sans-serif;
				color: #FFFF;
				border-collapse: collapse;
				width: 50%;
			}
			
			.table1 {
				margin-left:auto; 
				margin-right:auto;
				font-family: sans-serif;
				color: #FFFFFF;
				border-collapse: collapse;
				width: 50%;
				background-color:#262626;
			}
			.table2 {
				margin-left:auto; 
				margin-right:auto;
				margin-bottom:20px;
				font-family: sans-serif;
				color: #444;
				width: 100%;
			}
			 
			.table1 tr th{
				background: #262626;
				color: #fff;
				font-weight: normal;
			}
			 
			.table1, th, td {
				padding: 8px 20px;
				text-align: center;
			}
			 
			.table1 tr:hover {
				opacity:0.75;
			}
			 
			.table1 tr:nth-child(even) {
				background-color: #151515;
			}
			.table-wrapper{
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
		.tbl{
			margin-left:auto; 
			margin-right:auto;
			color: #262626;
			width: 50%;
			margin-top:170px;
		}
		</style>
	</head>
	<body>
	<section class="sec1">
			<h1 style="top:10%">𝔩𝔲𝔠𝔦𝔞𝔫𝔬</h1>
			<h2 style="top:17%">ɢᴛᴀ ᴠ ʀᴏʟᴇᴘʟᴀʏ ғᴀᴍɪʟʏ<br>#ʙɪᴋᴇʀsɴᴏsᴄᴀʀᴇ #ʙɪᴋᴇʀs𝟺ʟɪғᴇ</h2>
		</section>
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
	?>
	<form action="prosesuang.php" method="post">
	<table class="tbl">
		<tr>
			<th width="200px"><font color="white">UANG PERUSAHAAN</font></th>
			<th></th>
			<th width="200px"><font color="red">UANG MERAH</font></th>
		</tr>
		<tr>
			<td style="background-color: #FFFFFF; border-radius:20px;"><b><?php echo $total; ?></b></td>
			<td></td>
			<td style="background-color: #FF0000; border-radius:20px;"><b><?php echo $merah; ?></b></td>
		</tr>
		<tr>
			<td><button class="button-success" type="submit" name="submit" value="u1_tambah">Tambah</button><br><button class="button-warning" type="submit" name="submit"  value="u1_ambil">Ambil</button></td>
			<td></td>
			<td><button class="button-error" type="submit" name="submit"  value="u2_tambah">Tambah</button><br><button class="button-success" type="submit"  name="submit" value="u2_cuci">Cuci</button></td>
		</tr>
	</table>
	</form>
	<h2>Note: uang merah yang dicuci akan otomatis masuk ke uang perusahaan dan terpotong 15%</h2>