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
<h3>Fadhil Khalid Aziz</h3>

<a href="input.php">Input Data</a>
<table border="1">
    <tr>
    <th>Id</th>
        <th>Nama Lengkap</th>
        <th>NIM</th>
        <th>Jenis Kelamin</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Agama</th>
        <th>Pendidikan</th>
        <th>Jenis Pekerjaan</th>
        <th>Update</th>
    </tr>
    <?php
    $no = 1;
    foreach($db->tampil_data() as $x){
    ?>
    <tr>
        <td><?php echo $no++; ?></td>
        
        <td><?php echo $x['NamaLengkap']; ?></td>
        <td><?php echo $x['NIM']; ?></td>
        <td><?php echo $x['JenisKelamin']; ?></td>
        <td><?php echo $x['TempatLahir']; ?></td>
        <td><?php echo $x['TanggalLahir']; ?></td>
        <td><?php echo $x['Agama']; ?></td>
        <td><?php echo $x['Pendidikan']; ?></td>
        <td><?php echo $x['JenisPekerjaan']; ?></td>
        <td>
            <a href="edit.php?id=<?php echo $x['id']; ?>&aksi=edit">Edit</a>
            <a href="../controller/proses.php?id=<?php echo $x['id']; ?>&aksi=hapus">Hapus</a>
        </td>
    </tr>
    <?php
    }
    ?>
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

    </table>
    <div class="row justify-content-center">
		<a href="logout.php" class="btn btn-link">Logout</a>