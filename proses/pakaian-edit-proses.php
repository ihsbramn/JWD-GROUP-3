<?php
include'../koneksi.php';

$id_pakaian=$_POST['idpakaian'];
$nama_pakaian=$_POST['nama'];
$merk=$_POST['merk'];
$ukuran=$_POST['ukuran'];

If(isset($_POST['simpan'])){
	mysqli_query($db,
		"UPDATE tb_jenis_pakaian
		SET nama_pakaian='$nama_pakaian',merk='$merk',ukuran='$ukuran'
		WHERE idpakaian='$id_pakaian'"
	);
	header("location:../index.php?p=pakaian");
}
?>