<?php
include '../koneksi.php';
$id_transaksi=$_POST['id_transaksi'];
$id_anggota=$_POST['id_anggota'];
$id_pakaian=$_POST['idpakaian'];
$tgl_pinjam=$_POST['tgl_pinjam'];


if(isset($_POST['simpan'])){
	mysqli_query($db,
		"INSERT INTO tb_transaksi
		VALUES('$id_transaksi','$id_anggota','$id_pakaian','$tgl_pinjam','')"
	);
	header("location:../index.php?p=transaksi-peminjaman");
}
?>