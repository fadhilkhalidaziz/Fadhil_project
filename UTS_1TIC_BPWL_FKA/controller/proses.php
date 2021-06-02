<?php
// studi kasus KARTU KELUARGA 
include '../model/database.php';
$db = new database();
 
$aksi = $_GET['aksi'];
 if($aksi == "tambah"){
 	$db->input($_POST['id'], $_POST['NamaLengkap'], $_POST['NIM'], $_POST['JenisKelamin'], $_POST['TempatLahir'], $_POST['TanggalLahir'], 
	 $_POST['Agama'], $_POST['Pendidikan'], $_POST['JenisPekerjaan']);
 	header("location:../view/tampil.php");
 }else if($aksi == "hapus"){ 	
 	$db->hapus($_GET['id']);
	header("location:../view/tampil.php");
 }else if($aksi == "update"){
 	$db->update($_POST['id'], $_POST['NamaLengkap'], $_POST['NIM'], $_POST['JenisKelamin'], $_POST['TempatLahir'], $_POST['TanggalLahir'], 
	 $_POST['Agama'], $_POST['Pendidikan'], $_POST['JenisPekerjaan']);
 }
?>