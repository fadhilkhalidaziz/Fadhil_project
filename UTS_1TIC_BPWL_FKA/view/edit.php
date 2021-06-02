<?php 
include '../model/database.php';
$db = new database();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">

<h1>CRUD OOP PHP</h1>
<h2>KARTU KELUARGA</h2>
<h3>FADHIL KHALID AZIZ</h3>

<form action="../controller/proses.php?aksi=update" method="post">
<?php
foreach($db->edit($_GET['id']) as $d){
?>
<table>
	<tr>
		<td>Nama Lengkap</td>
		<td>
			<input type="hidden" name="id" value="<?php echo $d['id'] ?>">
			<input type="text" name="NamaLengkap" value="<?php echo $d['NamaLengkap'] ?>">
		</td>
	</tr>
	<tr>
		<td>NIM</td>
		<td><input type="text" name="NIM" value="<?php echo $d['NIM'] ?>"></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td><input type="text" name="JenisKelamin" value="<?php echo $d['JenisKelamin'] ?>"></td>
	</tr>
		
	<tr>
		<td>Tempat Lahir</td>
		<td>
			<input type="hidden" name="id" value="<?php echo $d['id'] ?>">
			<input type="text" name="TempatLahir" value="<?php echo $d['TempatLahir'] ?>">
		</td>
	</tr>
	<tr>
		<td>Tanggal Lahir</td>
		<td><input type="text" name="TanggalLahir" value="<?php echo $d['TanggalLahir'] ?>"></td>
	</tr>
	<tr>
		<td>Agama</td>
		<td><input type="text" name="Agama" value="<?php echo $d['Agama'] ?>"></td>
	</tr>
	<tr>
		<td>Pendidikan</td>
		<td><input type="text" name="Pendidikan" value="<?php echo $d['Pendidikan'] ?>"></td>
	</tr>
	<tr>
		<td>Jenis Pekerjaan</td>
		<td><input type="text" name="JenisPekerjaan" value="<?php echo $d['JenisPekerjaan'] ?>"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>
<?php } ?>
</table>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

</form>