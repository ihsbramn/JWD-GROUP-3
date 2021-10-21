<div id="label-page">
  <h3>Tampil Data Pakaian</h3>
</div>
<div id="content">
  <p id="tombol-tambah-container"><a href="index.php?p=pakaian-input" class="tombol">Tambah Data Pakaian</a></p>
  <table id="tabel-tampil">
    <tr>
      <th id="label-tampil-no">No</td>
      <th>ID Pakaian</th>
      <th>Nama</th>
      <th>Merk</th>
      <th>Ukuran</th>
      <th id="label-opsi">Opsi</th>
    </tr>
    <?php

		$sql="SELECT * FROM tb_jenis_pakaian ORDER BY idpakaian DESC";
		$q_tampil_pakaian = mysqli_query($db, $sql);

		$nomor=1;
		while($r_tampil_pakaian=mysqli_fetch_array($q_tampil_pakaian)){
		?>
    <tr>
      <td><?php echo $nomor++; ?></td>
      <td><?php echo $r_tampil_pakaian['idpakaian']; ?></td>
      <td><?php echo $r_tampil_pakaian['nama']; ?></td>
      <td><?php echo $r_tampil_pakaian['merk']; ?></td>
      <td><?php echo $r_tampil_pakaian['ukuran']; ?></td>
      <td class="d-flex gap-2">
        <div class="tombol-opsi-container"><a href="index.php?p=pakaian-edit&id=<?php echo $r_tampil_pakaian['idpakaian'];?>"
            class="tombol">Edit</a></div>
        <div class="tombol-opsi-container"><a href="proses/pakaian-hapus.php?id=<?php echo $r_tampil_pakaian['idpakaian']; ?>"
            onclick="return confirm('Yakin ingin menghapus data?');" class="tombol">Hapus</a></div>
      </td>
    </tr>
    <?php } ?>
  </table>
</div>