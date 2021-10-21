<?php
include "koneksi.php";
$sql = mysqli_query($db, "select max(idtransaksi) as maxID from tb_transaksi");
$data = mysqli_fetch_array($sql);

$kode = $data['maxID'];
$kode++;
?>

<div id="label-page">
  <h3>Input Transaksi Peminjaman</h3>
</div>
<div id="content">
  <form action="proses/transaksi-peminjaman-input-proses.php" method="post" id="form">
    <table id="tabel-input">
      <tr>
        <td class="label-formulir">ID Transaksi</td>
        <td class="isian-formulir"><input type="text" name="id_transaksi" class="isian-formulir isian-formulir-border"
            value="<?=$kode?>" readonly>
        </td>
      </tr>
      <tr>
        <td class="label-formulir">Anggota</td>
        <td class="isian-formulir">
          <select name="id_anggota" id="anggota" class="isian-formulir isian-formulir-border">
            <option value="" selected disabled> Pilih Data Anggota </option>
            <?php
						$q_tampil_anggota=mysqli_query($db,
							"SELECT * FROM tb_anggota
							ORDER BY idanggota"
						);
						while($r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota)){
							echo"<option value=$r_tampil_anggota[idanggota]>$r_tampil_anggota[idanggota] | $r_tampil_anggota[nama]</option>";
						}
					?>
          </select>
        </td>
      </tr>
      <tr>
        <td class="label-formulir">Pakaian</td>
        <td class="isian-formulir">
          <select name="idpakaian" id="pakaian" class="isian-formulir isian-formulir-border">
            <option value="" selected disabled> Pilih Data Pakaian </option>
            <?php
						$q_tampil_pakaian=mysqli_query($db,
							"SELECT * FROM tb_jenis_pakaian
							ORDER BY nama_pakaian"
						);
						while($r_tampil_pakaian=mysqli_fetch_array($q_tampil_pakaian)){
							echo"<option value=$r_tampil_pakaian[idpakaian]>$r_tampil_pakaian[idpakaian] | $r_tampil_pakaian[nama_pakaian]</option>";
						}
					?>
          </select>
        </td>
      </tr>
      <tr>
        <td class="label-formulir">Tanggal Pinjam</td>
        <td class="isian-formulir"><input type="text" name="tgl_pinjam" value="<?php echo $tgl; ?>" readonly="readonly"
            class="isian-formulir isian-formulir-border warna-formulir-disabled"></td>
      </tr>
      <tr>
        <td class="label-formulir"></td>
        <td class="isian-formulir"><input name="simpan" value="Simpan" class="tombol" onclick="validasi()" readonly
            style="cursor: pointer; width: 55px;"></td>
      </tr>
    </table>
  </form>

  <script>
  function validasi() {
    anggota = document.getElementById('anggota').value;
    buku = document.getElementById('buku').value;

    if (anggota == '') {
      alert('Silahkan pilih anggota');
      return false;
    } else if (buku == '') {
      alert('Silahkan pilih buku');
      return false;
    } else {
			document.getElementById('form').submit();
      return true;
    }
  }
  </script>
</div>