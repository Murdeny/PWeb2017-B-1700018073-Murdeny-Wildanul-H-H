<!DOCTYPE HTML PUBLIC >
<html>
<head>
<title>Travel Store</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-5">
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
	<div id="header"></div>
	<div id="headers">
		<div id="meta">
			<a href="index.php" class="marr">Home</a>
			<a href="indexlogin.php" class="marr">Login</a>
			<a href="index2.php" class="marr">Pesan</a>
			</div>

	<font color="blue">_______</font><img src="images/regis.jpg" width="160" height="160" /></a>
	<font color="blue">_________________________________________________________________________________________________</font>
	</div>
	<div id="wrapper">
		<div id="left">
			<div id="left_navigation">
				<img src="images/gtop.gif" alt="" width="191" height="8" />
				<div class="title1">Ticket</div>
				<ul class="contries">
					<li><a href="index2.php  ?>">Kereta</a></li>
				</ul>
				<img src="images/gbot.gif" alt="" width="191" height="8" />
			</div>
			<br>
			<img src="images/wonder.jpg" alt="" width="191" height="150" /></a>
		</div>
		<div id="big">
<br><br>

<div class="block">
<?php
	$nama = $_POST['ker_nama'];
	$nohp = $_POST['ker_nohp'];
	$email = $_POST['ker_email'];
	$alamat = $_POST['ker_alamat'];
	$tujuan = $_POST['tujuan'];
	$Kereta = $_POST['Kereta'];?>

	<table border="1px" width="350" height="500" bgcolor="#3CB371">
		<tr><td colspan="2"><p align="center"> NOTA </p></td></tr>
		<tr>
			<td><p align="center">Nama</td>

			<td><p align="center">
				<?php echo $nama ?></td>
		</tr>
		<tr>
			<td><p align="center">Nomor HP</td>

			<td><p align="center">
				<?php echo $nohp ?></td>
		</tr>
		<tr>
			<td><p align="center">E-mail</td>

			<td>
				<p align="center"><?php echo $email ?></td>
		</tr>
		<tr>
			<td><p align="center">Alamat</td>

			<td>
				<p align="center"><?php echo $alamat ?></td>
		</tr>
		<tr>
			<td><p align="center">Tujuan</td>

			<td><p align="center">
				<?php echo $tujuan ?></td>
		</tr>
		<tr>
			<td><p align="center">Kereta</td>

			<td><p align="center">
				<?php echo $Kereta ?></td>
		</tr>
	</table>
	<p>

</div>
</div>
</body>
</html>
