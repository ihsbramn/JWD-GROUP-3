<?php
include '../koneksi.php';
$id_transaksi=$_POST['id_transaksi'];
$id_anggota=$_POST['id_anggota'];
$id_buku=$_POST['id_buku'];
$tgl_pinjam=$_POST['tgl_pinjam'];
$status_anggota="Sedang Meminjam";
$status_buku="Dipinjam";


if(isset($_POST['simpan'])){
	mysqli_query($db,
		"INSERT INTO tb_transaksi
		VALUES('$id_transaksi','$id_anggota','$id_buku','$tgl_pinjam','')"
	);
	mysqli_query($db,
		"UPDATE tb_anggota
		SET status='$status_anggota'
		WHERE idanggota='$id_anggota'"
	);
	mysqli_query($db,
		"UPDATE tb_jenis_pakaian
		WHERE idbuku='$id_buku'"
	);
	header("location:../index.php?p=transaksi-peminjaman");
}
?>