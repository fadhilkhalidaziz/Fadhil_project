<?php
class database{
	
	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "kartu_keluarga";
	var $con;

	function __construct(){
	$this->con= mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
	}

	function tampil_data(){
	$data = mysqli_query($this->con,"select * from kartu_keluargafadhil");
	while($d = mysqli_fetch_array($data)){
	$hasil[] = $d;
	}
	return $hasil;
	}
	function input($id,$NamaLengkap,$NIM,$JenisKelamin,$TempatLahir,$TanggalLahir,$Agama,$Pendidikan,$JenisPekerjaan){
	mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db),"insert into kartu_keluargafadhil values('$id','$NamaLengkap','$NIM','$JenisKelamin','$TempatLahir','$TanggalLahir','$Agama','$Pendidikan','$JenisPekerjaan')");
	}
	function hapus($id){
	mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "delete from kartu_keluargafadhil where id='$id'");
	}
	function edit($id){
	$data = mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "select * from kartu_keluargafadhil where id='$id'");
	while($d = mysqli_fetch_array($data)){
	$hasil[] = $d;
	}
	return $hasil;
	}
	function update($id,$NamaLengkap,$NIM,$JenisKelamin,$TempatLahir,$TanggalLahir,$Agama,$Pendidikan,$JenisPekerjaan){
	mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "update kartu_keluargafadhil set id='$id', NamaLengkap='$NamaLengkap', NIM='$NIM', JenisKelamin='$JenisKelamin', TempatLahir='$TempatLahir', 
	TanggalLahir='$TanggalLahir', Agama='$Agama', Pendidikan='$Pendidikan', JenisPekerjaan='$JenisPekerjaan' where id='$id'");
	}
}
?>