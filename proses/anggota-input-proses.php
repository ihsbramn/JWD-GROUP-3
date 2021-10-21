<?php
include'../koneksi.php';
$idanggota=$_POST['idanggota'];
$nama=$_POST['nama'];
$jeniskelamin=$_POST['jeniskelamin'];
$alamat=$_POST['alamat'];
	
if(isset($_POST['simpan'])){

	$sql = 
	"INSERT INTO tb_anggota
		VALUES('$idanggota','$nama','$jeniskelamin','$alamat')";
	$query = mysqli_query($db, $sql);

	header("location:../index.php?p=anggota");
}
?>