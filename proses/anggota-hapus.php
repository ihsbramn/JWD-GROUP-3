<?php
include'../koneksi.php';
$idanggota=$_GET['id'];

mysqli_query($db,
	"DELETE FROM tb_anggota
	WHERE idanggota='$idanggota'"
);
header("location:../index.php?p=anggota");
?>