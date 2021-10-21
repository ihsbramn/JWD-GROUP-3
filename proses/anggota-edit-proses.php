<?php
include '../koneksi.php';

$idanggota=$_POST['id_anggota'];
$nama=$_POST['name'];
$jeniskelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];

if(isset($_POST['simpan'])){
	mysqli_query($db,
		"UPDATE tb_anggota
		SET nama='$nama',jeniskelamin='$jeniskelamin',alamat='$alamat'
		WHERE idanggota='$idanggota'"
	);
	header("location:../index.php?p=anggota");
}
?>

<!-- SELECT a.idanggota, a.nama, b.tglpinjam, b.tglkembali FROM tbanggota a INNER JOIN tbtransaksi b on a.idanggota = b.idanggota


SELECT a.idanggota, a.nama, b.tglpinjam, b.tglkembali FROM tbanggota a 
INNER JOIN tbtransaksi b on a.idanggota = b.idanggota
INNER JOIN tbbuku c on c.idbuku = b.idbuku -->