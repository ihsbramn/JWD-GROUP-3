<?php
include'../koneksi.php';
$id_buku=$_POST['idpakaian'];
$judul_buku=$_POST['nama'];
$kategori=$_POST['merk'];
$pengarang=$_POST['ukuran'];
	
if(isset($_POST['simpan'])){
	$sql = "INSERT INTO tb_jenis_pakaian
		VALUES('$idpakaian','$nama','$merk','$ukuran')";
	$query = mysqli_query($db, $sql);
	
	header("location:../index.php?p=buku");
}
?>