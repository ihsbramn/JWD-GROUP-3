<?php
include'../koneksi.php';
$nama=$_POST['nama'];
$merk=$_POST['merk'];
$ukuran=$_POST['ukuran'];
	
if(isset($_POST['simpan'])){
	$sql = "INSERT INTO tb_jenis_pakaian
		VALUES('', '$nama','$merk','$ukuran')";
	$query = mysqli_query($db, $sql);
	
	header("location:../index.php?p=pakaian");
}
?>