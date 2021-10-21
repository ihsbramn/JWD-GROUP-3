<?php
include'../koneksi.php';
$id_transaksi=$_GET['id'];

mysqli_query($db,
	"DELETE FROM tb_transaksi
	WHERE idtransaksi='$id_transaksi'"
);
header("location:../index.php?p=transaksi-peminjaman");
?>