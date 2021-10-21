<?php
include'../koneksi.php';
$idpakaian=$_GET['id'];

mysqli_query($db,
	"DELETE FROM tb_jenis_pakaian
	WHERE idpakaian='$idpakaian'"
);
header("location:../index.php?p=buku");
?>